# Migrating from v1 to v2

Version 2 aligns the SDK with the bundled `openapi.json` and adds all 14 previously missing operations. The existing 36 operation IDs and HTTP routes remain available.

## Typed responses

Every JSON response now exposes a DTO in `$response->data`. Replace array access with property access:

```php
// v1: $response->data['items']
foreach ($response->data->items as $domain) {
    echo $domain->name->value;
}
echo $response->data->total;
```

Nested schemas are DTOs too. Scalar wrappers expose `value`; enums expose their backed `value`. Use `toArray()` when you need the wire representation for storage or JSON serialization. Page results now require both `items` and `total`; update mocked responses accordingly.

Bodyless responses expose `data === null`. Obtain the asynchronous operation identifier using `$response->operationId()?->value`; it reads the `spaceship-operation-id` header case-insensitively.

## Requests and collections

Service methods accept operation-specific request DTOs. Request body properties accept schema DTOs. Pass typed objects to collection constructors, or hydrate the complete schema with `fromArray()` at a JSON boundary. Invalid collection element types now throw `InvalidArgumentException`; unknown DNS/contact discriminator values also throw rather than silently dropping subtype fields.

Optional request filters default to `null` and are omitted. Array query parameters whose OpenAPI encoding is `explode: false` are sent as comma-separated values. Path values are URL-encoded as individual segments. Prefer named arguments, especially when mixing required body data and optional filters.

Schema constructors retain their field order. Trailing optional schema fields default to `null`; optional fields preceding required fields still need an explicit `null`. Required nullable response fields remain present in `toArray()`.

## Added capabilities

- `hyperlift()`: application list/details, builds, build logs, runtime logs, environment variables, metrics, restart, and scale.
- `sellerhub()`: sold-domain reports and SafePay transaction list, creation, and details.
- Checkout link bodies include the optional typed `feePercentageShare` commission split.
- Environment-variable dictionaries contain `EnvironmentVariableValue` objects. An empty environment dictionary serializes as `{}`.
- Async operation `details` now preserves its payload in `AsyncOperationDetails::$items`. The API contract does not define its fields, so this dictionary intentionally contains arbitrary JSON values.

## Exceptions and cleanup

HTTP 4xx/5xx responses consistently throw the operation-specific `ApiException` subclass, including with the default Guzzle client. Transport errors still use Guzzle exceptions. The SDK does not retry automatically.

The unused `BaseSchema` scalar superclass and test-only `TestDomainNameServersConfigurationBase` have been removed. Object schemas no longer inherit scalar conversion methods or an uninitialized scalar `value` property. Use each DTO's own conversion methods.

See the [DTO reference](DTOs.md) for fields and the service references for request signatures, result types, permissions, and endpoint paths.
