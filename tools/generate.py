"""Generate typed SDK contracts and endpoint reference from the bundled OpenAPI spec.

Run with Python 3.10+: python tools/generate.py
"""
import json
import re
from pathlib import Path

ROOT = Path(__file__).resolve().parents[1]
SPEC = json.loads((ROOT / 'openapi.json').read_text(encoding='utf-8'))
schemas = SPEC['components']['schemas']
for methods in SPEC['paths'].values():
    for op in methods.values():
        if isinstance(op, dict) and 'parameters' in op:
            op['parameters'] = [SPEC['components']['parameters'][p['$ref'].split('/')[-1]] if '$ref' in p else p for p in op['parameters']]
prefix = 'CommunitySDKs\\Spaceship\\'
locations = {}
for path in (ROOT / 'src/DTO').glob('*/**/*.php'):
    if path.parent.name in ('Schema', 'Enum'):
        locations[path.stem.lower()] = str(path.relative_to(ROOT / 'src')).replace('/', '\\').removesuffix('.php')

def title(name):
    return ''.join(p[:1].upper() + p[1:] for p in name.split('.'))

def group(path):
    return {'async-operations': 'AsyncOperations', 'contacts': 'Contacts', 'dns': 'DNSRecords', 'domains': 'Domains', 'hyperlift': 'Hyperlift', 'sellerhub': 'SellerHub'}[path.split('/')[2]] if '/contacts/attributes' not in path else 'ContactsAttributes'

owners = {}
def assign(s, g):
    if isinstance(s, dict):
        if '$ref' in s:
            n = s['$ref'].split('/')[-1]
            if n not in owners:
                owners[n] = g
                assign(schemas[n], g)
        for k, v in s.items():
            if k not in ('example', 'examples'):
                assign(v, g)
    elif isinstance(s, list):
        for v in s:
            assign(v, g)
for p, methods in SPEC['paths'].items():
    assign(methods, group(p))

def location(n):
    return locations.get(title(n).lower(), 'DTO\\' + owners.get(n, 'Common') + ('\\Enum\\' if 'enum' in schemas[n] else '\\Schema\\') + title(n))

def fq(n):
    return '\\' + prefix + location(n)

def write(loc, body):
    path = ROOT / 'src' / (loc.replace('\\', '/') + '.php')
    path.parent.mkdir(parents=True, exist_ok=True)
    ns, name = loc.rsplit('\\', 1)
    path.write_text('<?php\n\ndeclare(strict_types=1);\n\nnamespace ' + prefix + ns + ';\n\n' + body, encoding='utf-8')

def ref(s):
    if '$ref' in s:
        return s['$ref'].split('/')[-1]
    if len(s.get('allOf', [])) == 1 and not s.get('properties'):
        return ref(s['allOf'][0])

def typ(s):
    n = ref(s)
    if n:
        return fq(n)
    return {'string': 'string', 'integer': 'int', 'number': 'float', 'boolean': 'bool', 'array': 'array', 'object': 'array'}[s.get('type', 'object')]

def decode(s, v):
    n = ref(s)
    if n:
        method = 'fromArray' if schemas[n].get('type') in ('object', 'array') else 'fromValue'
        return fq(n) + '::' + method + '(' + v + ')'
    if s.get('type') == 'array':
        return 'array_map(static fn ($item) => ' + decode(s['items'], '$item') + ', ' + v + ')'
    return v

def encode(s, v):
    n = ref(s)
    if n:
        expression = v + ('->toArray()' if schemas[n].get('type') in ('object', 'array') else '->toValue()')
        if schemas[n].get('type') == 'object' and not props(schemas[n])[0]:
            return '(object) ' + expression
        return expression
    if s.get('type') == 'array':
        return 'array_map(static fn ($item) => ' + encode(s['items'], '$item') + ', ' + v + ')'
    return v

def props(s):
    result, required = {}, []
    for parent in s.get('allOf', []):
        p, r = props(schemas[ref(parent)])
        result.update(p)
        required += r
    result.update(s.get('properties', {}))
    return result, set(required + s.get('required', []))

def promote_inline(s, name, g):
    for key, value in list(s.get('properties', {}).items()):
        if value.get('type') == 'object' and value.get('properties'):
            n = name + title(key)
            schemas[n] = value
            owners[n] = g
            s['properties'][key] = {'$ref': '#/components/schemas/' + n, 'nullable': value.get('nullable', False)}
        elif value.get('type') == 'array' and value.get('items', {}).get('type') == 'object':
            n = name + title(key) + 'Item'
            schemas[n] = value['items']
            owners[n] = g
            value['items'] = {'$ref': '#/components/schemas/' + n}

operations = []
for path, methods in SPEC['paths'].items():
    for method, op in methods.items():
        if 'operationId' not in op:
            continue
        g, name = group(path), title(op['operationId'])
        success = next(v for k, v in op['responses'].items() if k.startswith('2'))
        response = success.get('content', {}).get('application/json', {}).get('schema')
        if response and not ref(response):
            n = name + 'Result'
            schemas[n], owners[n] = response, g
            response = {'$ref': '#/components/schemas/' + n}
        operations.append((path, method, op, g, name, response))
for n, s in list(schemas.items()):
    promote_inline(s, title(n), owners.get(n, 'Common'))

for n, s in schemas.items():
    loc, name = location(n), title(n)
    name = loc.split('\\')[-1]
    if s.get('type') not in ('object', 'array'):
        t = {'integer': 'int', 'string': 'string', 'number': 'float'}[s['type']]
        if 'enum' in s:
            cases = []
            for value in s['enum']:
                case = re.sub(r'[^A-Za-z0-9_]', '_', re.sub(r'([a-z0-9])([A-Z])', r'\1_\2', str(value))).upper()
                if case[0].isdigit():
                    case = 'VALUE_' + case
                cases.append('    case ' + case + ' = ' + json.dumps(value) + ';')
            body = 'enum ' + name + ': ' + t + '\n{\n' + '\n'.join(cases) + '\n'
        else:
            body = 'final class ' + name + '\n{\n    public function __construct(public readonly ' + t + ' $value) {}\n'
        body += '\n    public static function fromValue(' + t + ' $value): self\n    {\n        return ' + ('self::from($value)' if 'enum' in s else 'new self($value)') + ';\n    }\n\n    public function toValue(): ' + t + '\n    {\n        return $this->value;\n    }\n}\n'
        write(loc, body)
        continue
    p, required = props(s)
    if not p:
        if s.get('type') == 'array':
            item = s['items']
            annotation = 'list<' + typ(item) + '>'
            dec, enc = decode(s, '$data'), encode(s, '$this->items')
        elif isinstance(s.get('additionalProperties'), dict):
            item = s['additionalProperties']
            annotation = 'array<string, ' + typ(item) + '>'
            dec = 'array_map(static fn ($item) => ' + decode(item, '$item') + ', $data)'
            enc = 'array_map(static fn ($item) => ' + encode(item, '$item') + ', $this->items)'
        else:
            annotation, dec, enc = 'array<string, mixed>', '$data', '$this->items'
        checks = ''
        if s.get('type') == 'array' or isinstance(s.get('additionalProperties'), dict):
            checks = ' foreach ($items as $item) { \\CommunitySDKs\\Spaceship\\DTO\\ValueValidator::check($item, ' + repr(typ(item).lstrip('\\')) + '); } '
        write(loc, 'final class ' + name + '\n{\n    /** @param ' + annotation + ' $items */\n    public function __construct(public readonly array $items = []) {' + checks + '}\n\n    public static function fromArray(array $data): self\n    {\n        return new self(' + dec + ');\n    }\n\n    public function toArray(): array\n    {\n        return ' + enc + ';\n    }\n}\n')
        continue
    parent = ref(s['allOf'][0]) if s.get('allOf') else None
    inherited = props(schemas[parent])[0] if parent else {}
    args, checks, hydrate, serialize, docs = [], [], [], [], []
    # Preserve schema order, including inherited constructor parameters.
    for key, field in p.items():
        optional = key not in required
        nullable = optional or field.get('nullable', False)
        t = typ(field)
        trailing_optional = optional and all(k not in required for k in list(p)[list(p).index(key):])
        args.append('        ' + ('' if key in inherited else 'public readonly ') + t + ('|null' if nullable else '') + ' $' + key + (' = null' if trailing_optional else ''))
        if field.get('type') == 'array':
            docs.append('     * @param list<' + typ(field['items']) + '>' + ('|null' if nullable else '') + ' $' + key)
            checks.append('        if ($' + key + ' !== null) { foreach ($' + key + ' as $item) { ' + '\\CommunitySDKs\\Spaceship\\DTO\\ValueValidator::check($item, ' + repr(typ(field['items']).lstrip('\\')) + '); } }')
        if field.get('enum'):
            checks.append('        if ($' + key + ' !== null && !in_array($' + key + ', ' + '[' + ', '.join(json.dumps(x) for x in field['enum']) + ']' + ', true)) { throw new \\InvalidArgumentException("Invalid ' + key + '"); }')
        v = "$data['" + key + "']"
        val = decode(field, v)
        if nullable:
            val = '(' + v + ' === null ? null : ' + val + ')'
        missing = 'null' if optional else 'throw new \\InvalidArgumentException("Missing required field ' + key + ' for ' + name + '")'
        hydrate.append("            array_key_exists('" + key + "', $data) ? " + val + ' : ' + missing)
        assignline = "$data['" + key + "'] = " + encode(field, '$this->' + key) + ';'
        if nullable:
            assignline = 'if ($this->' + key + ' !== null) { ' + assignline + ' }' + (" else { $data['" + key + "'] = null; }" if not optional else '')
        serialize.append('        ' + assignline)
    body = 'class ' + name + (' extends ' + fq(parent) if parent else '') + '\n{\n'
    if docs:
        body += '    /**\n' + '\n'.join(docs) + '\n     */\n'
    body += '    public function __construct(\n' + ',\n'.join(args) + '\n    ) {\n'
    if parent:
        body += '        parent::__construct(' + ', '.join('$' + k for k in inherited) + ');\n'
    body += '\n'.join(checks) + '\n    }\n\n    public static function fromArray(array $data): self\n    {\n'
    if 'discriminator' in s:
        d = s['discriminator']
        body += "        $type = $data['" + d['propertyName'] + "'] ?? null;\n        switch ($type) {\n"
        for value, target in d['mapping'].items():
            body += '            case ' + repr(value) + ': return ' + fq(target.split('/')[-1]) + '::fromArray($data);\n'
        body += '            default: throw new \\InvalidArgumentException("Unknown discriminator for ' + name + '");\n        }\n'
    else:
        body += '        return new self(\n' + ',\n'.join(hydrate) + '\n        );\n'
    body += '    }\n\n    public function toArray(): array\n    {\n        $data = [];\n' + '\n'.join(serialize) + '\n        return $data;\n    }\n}\n'
    write(loc, body)

services, docs = {}, {}
for path, method, op, g, name, response in operations:
    base = 'DTO\\' + g
    params = op.get('parameters', [])
    body_schema = op.get('requestBody', {}).get('content', {}).get('application/json', {}).get('schema')
    args, query, headers, checks, annotations = [], [], [], [], []
    for param in params:
        key, field = param['name'], param['schema']
        optional = not param.get('required', False)
        args.append('        public readonly ' + typ(field) + ('|null' if optional else '') + ' $' + key + (' = null' if optional else ''))
        if field.get('type') == 'array':
            annotations.append('     * @param list<' + typ(field['items']) + '>' + ('|null' if optional else '') + ' $' + key)
            checks.append('        if ($' + key + ' !== null) { foreach ($' + key + ' as $item) { \\CommunitySDKs\\Spaceship\\DTO\\ValueValidator::check($item, ' + repr(typ(field['items']).lstrip('\\')) + '); } }')
        value = encode(field, '$this->' + key)
        if field.get('type') == 'array' and not param.get('explode', True):
            value = "implode(',', " + value + ')'
        line = "        if ($this->" + key + " !== null) { $values['" + key + "'] = " + value + '; }'
        if param['in'] == 'query': query.append(line)
        if param['in'] == 'header': headers.append(line)
    if body_schema:
        args.append('        public readonly ' + typ(body_schema) + ' $body')
    # Required parameters first; callers can use named arguments for optional filters.
    args.sort(key=lambda a: ' = null' in a)
    request = 'final class ' + name + 'Request extends \\' + prefix + 'DTO\\BaseRequest\n{\n' + ('    /**\n' + '\n'.join(annotations) + '\n     */\n' if annotations else '') + '    public function __construct(\n' + ',\n'.join(args) + '\n    ) {\n' + '\n'.join(checks) + '\n    }\n'
    for m, lines in [('toQueryParams', query), ('toHeaders', headers)]:
        if lines:
            request += '\n    public function ' + m + '(): array\n    {\n        $values = [];\n' + '\n'.join(lines) + '\n        return $values;\n    }\n'
    if body_schema:
        request += '\n    public function toBody(): ?array\n    {\n        return ' + encode(body_schema, '$this->body') + ';\n    }\n'
    write(base + '\\Request\\' + name + 'Request', request + '}\n')
    resulttype = typ(response) if response else 'null'
    result = decode(response, '$decoded') if response else 'null'
    responsebody = 'final class ' + name + 'Response\n{\n    /** @param array<string, list<string>> $headers */\n    public function __construct(\n        public readonly int $statusCode,\n        public readonly array $headers,\n        public readonly ' + resulttype + ' $data' + (' = null' if not response else '') + '\n    ) {}\n\n    public function operationId(): ?\\' + prefix + 'DTO\\Common\\Schema\\OperationId\n    {\n        foreach ($this->headers as $name => $values) {\n            if (strtolower($name) === "spaceship-operation-id" && isset($values[0])) {\n                return new \\' + prefix + 'DTO\\Common\\Schema\\OperationId($values[0]);\n            }\n        }\n        return null;\n    }\n\n    public static function fromPsrResponse(\\Psr\\Http\\Message\\ResponseInterface $response): self\n    {\n'
    if response:
        responsebody += '        $decoded = json_decode((string) $response->getBody(), true, 512, JSON_THROW_ON_ERROR);\n'
    responsebody += '        return new self($response->getStatusCode(), $response->getHeaders(), ' + result + ');\n    }\n}\n'
    write(base + '\\Response\\' + name + 'Response', responsebody)
    exc = 'Exception\\' + g + '\\' + name + 'Exception'
    write(exc, 'final class ' + name + 'Exception extends \\' + prefix + 'Exception\\Common\\ApiException\n{\n}\n')
    path_expr = "'" + re.sub(r'\{(\w+)\}', lambda m: "' . rawurlencode(" + encode(next(p['schema'] for p in params if p['name'] == m[1]), '$request->' + m[1]) + ") . '", path) + "'"
    rq, rs = '\\' + prefix + base + '\\Request\\' + name + 'Request', '\\' + prefix + base + '\\Response\\' + name + 'Response'
    services.setdefault(g, []).append('    /** ' + op.get('summary', op['operationId']).replace('*/', '') + ' */\n    public function ' + op['operationId'] + '(' + rq + ' $request): ' + rs + '\n    {\n        $response = $this->apiClient->request(' + repr(method.upper()) + ', ' + path_expr + ', $request->toQueryParams(), $request->toHeaders(), $request->toBody());\n        if ($response->getStatusCode() >= 400) {\n            throw new \\' + prefix + exc + '("API request failed for ' + op['operationId'] + '", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());\n        }\n        return ' + rs + '::fromPsrResponse($response);\n    }')
    section = '## `' + op['operationId'] + '`\n\n' + op.get('summary', '') + '\n\n`' + method.upper() + ' ' + path + '`\n\n'
    section += '- Request: `CommunitySDKs\\Spaceship\\' + base + '\\Request\\' + name + 'Request`\n- Response: `CommunitySDKs\\Spaceship\\' + base + '\\Response\\' + name + 'Response`\n- `data`: `' + resulttype.lstrip('\\') + '`\n- Exception: `CommunitySDKs\\Spaceship\\' + exc + '`\n- Scopes: ' + ', '.join('`' + x + '`' for x in op.get('x-scopes', [])) + '\n\n'
    if params or body_schema:
        section += '| Argument | PHP type | Required | Description |\n|---|---|---|---|\n'
        for p in params:
            section += '| `' + p['name'] + '` | `' + typ(p['schema']).lstrip('\\') + '` | ' + ('yes' if p.get('required') else 'no') + ' | ' + p.get('description', '').replace('\n', ' ').replace('|', '\\|') + ' |\n'
        if body_schema:
            section += '| `body` | `' + typ(body_schema).lstrip('\\') + '` | yes | Typed JSON body |\n'
    docs.setdefault(g, []).append(section)
for g, methods in services.items():
    write('Service\\' + g + 'Service', 'final class ' + g + 'Service\n{\n    public function __construct(private readonly \\' + prefix + 'Http\\ApiClient $apiClient) {}\n\n' + '\n\n'.join(methods) + '\n}\n')
    (ROOT / 'docs' / (g + 'Service.md')).write_text('# ' + g + 'Service\n\nGenerated from the bundled `openapi.json`. Optional request arguments default to `null` and are omitted from the wire. Response bodies are hydrated into DTOs; empty responses have `data === null`.\n\n' + '\n'.join(docs[g]), encoding='utf-8')
reference = ['# DTO reference\n\nGenerated from `openapi.json`. Object DTOs provide `fromArray()` and `toArray()`; scalar wrappers and enums provide `fromValue()` and `toValue()`. PHP collection element types are documented and checked at construction. Required nullable fields must be present during hydration. Optional null values are omitted during serialization. Constraints listed below are API requirements; the SDK checks PHP types and discriminators, not every server-side validation rule.\n']
for n, s in schemas.items():
    reference.append('## `' + title(n) + '`\n\n`' + prefix + location(n) + '`\n\n' + s.get('description', '').replace('<', '&lt;') + '\n')
    p, required = props(s)
    if p:
        reference.append('| Field | PHP type | Required | Description |\n|---|---|---|---|')
        for key, field in p.items():
            t = 'list<' + typ(field['items']) + '>' if field.get('type') == 'array' else typ(field)
            description = field.get('description', '').replace('\n', ' ').replace('|', '\\|').replace('<', '&lt;')
            constraints = {k: field[k] for k in ('enum', 'minimum', 'maximum', 'minLength', 'maxLength', 'minItems', 'maxItems', 'pattern') if k in field}
            reference.append('| `' + key + '` | `' + t.lstrip('\\') + (' or null' if field.get('nullable') or key not in required else '') + '` | ' + ('yes' if key in required else 'no') + ' | ' + description + (' Constraints: `' + json.dumps(constraints).replace('|', '\\|') + '`.' if constraints else '') + ' |')
    elif 'enum' in s:
        reference.append('Allowed values: ' + ', '.join('`' + str(v) + '`' for v in s['enum']) + '.')
    elif s.get('type') in ('array', 'object'):
        reference.append('Collection data is available through the `items` property. Only schemas with no defined fields expose arbitrary JSON values.')
    reference.append('')
(ROOT / 'docs/DTOs.md').write_text('\n'.join(reference), encoding='utf-8')
print(f'Generated {len(operations)} operations and {len(schemas)} schemas.')
