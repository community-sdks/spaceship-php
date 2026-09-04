<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Tests;

use CommunitySDKs\Spaceship\Config\Config;
use CommunitySDKs\Spaceship\Http\ApiClient;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

/** Exercises every published operation against the supplied contract, without API credentials. */
final class OpenApiContractTest extends TestCase
{
    private array $spec;

    protected function setUp(): void
    {
        $this->spec = json_decode(file_get_contents(__DIR__ . '/../openapi.json'), true, 512, JSON_THROW_ON_ERROR);
    }

    private function resolve(array $schema): array
    {
        if (count($schema['allOf'] ?? []) === 1 && !isset($schema['properties'])) {
            return array_replace($schema, $this->resolve($schema['allOf'][0]));
        }
        if (isset($schema['$ref'])) {
            $parts = explode('/', $schema['$ref']);
            return $this->resolve($this->spec['components'][$parts[2]][$parts[3]]);
        }
        $properties = [];
        $required = [];
        foreach ($schema['allOf'] ?? [] as $base) {
            $resolved = $this->resolve($base);
            $properties = array_replace($properties, $resolved['properties'] ?? []);
            $required = array_merge($required, $resolved['required'] ?? []);
            $schema = array_replace($resolved, $schema);
        }
        if ($properties !== []) {
            $schema['properties'] = array_replace($properties, $schema['properties'] ?? []);
            $schema['required'] = array_unique(array_merge($required, $schema['required'] ?? []));
        }
        unset($schema['allOf']);
        return $schema;
    }

    private function sample(array $schema): mixed
    {
        $schema = $this->resolve($schema);
        if (isset($schema['enum'])) {
            return $schema['enum'][0];
        }
        if (isset($schema['discriminator']) && !isset($schema['properties']['type']['enum'])) {
            return $this->sample(['$ref' => array_values($schema['discriminator']['mapping'])[0]]);
        }
        return match ($schema['type'] ?? 'object') {
            'string' => 'test/value',
            'integer' => max(1, $schema['minimum'] ?? 1),
            'number' => 1.5,
            'boolean' => false,
            'array' => [$this->sample($schema['items'])],
            'object' => $this->sampleObject($schema),
        };
    }

    private function sampleObject(array $schema): array
    {
        $data = [];
        foreach ($schema['properties'] ?? [] as $key => $field) {
            $data[$key] = $this->sample($field);
        }
        if (is_array($schema['additionalProperties'] ?? null)) {
            $data['EXAMPLE'] = $this->sample($schema['additionalProperties']);
        }
        return $data;
    }

    private function typedValue(\ReflectionNamedType $type, mixed $value): mixed
    {
        $class = $type->getName();
        if ($type->isBuiltin()) {
            return $value;
        }
        return is_array($value) ? $class::fromArray($value) : $class::fromValue($value);
    }

    public function testEveryOperationUsesTypedContractsAndCorrectWireFormat(): void
    {
        $count = 0;
        foreach ($this->spec['paths'] as $path => $methods) {
            foreach ($methods as $method => $operation) {
                if (!isset($operation['operationId'])) {
                    continue;
                }
                $group = match (explode('/', $path)[2]) {
                    'async-operations' => 'AsyncOperations',
                    'contacts' => str_contains($path, '/attributes') ? 'ContactsAttributes' : 'Contacts',
                    'dns' => 'DNSRecords',
                    'domains' => 'Domains',
                    'hyperlift' => 'Hyperlift',
                    'sellerhub' => 'SellerHub',
                };
                $name = ucfirst($operation['operationId']);
                $requestClass = "CommunitySDKs\\Spaceship\\DTO\\$group\\Request\\{$name}Request";
                $reflection = new \ReflectionClass($requestClass);
                $parameters = [];
                $expectedPath = $path;
                $expectedQuery = [];
                foreach ($operation['parameters'] ?? [] as $parameter) {
                    $parameter = $this->resolve($parameter);
                    $key = $parameter['name'];
                    $value = $this->sample($parameter['schema']);
                    $parameters[$key] = $this->typedValue($reflection->getProperty($key)->getType(), $value);
                    if ($parameter['in'] === 'path') {
                        $expectedPath = str_replace('{' . $key . '}', rawurlencode((string) $value), $expectedPath);
                    } elseif ($parameter['in'] === 'query') {
                        $expectedQuery[$key] = is_array($value) && !($parameter['explode'] ?? true) ? implode(',', $value) : $value;
                    }
                }
                $bodySchema = $operation['requestBody']['content']['application/json']['schema'] ?? null;
                $expectedBody = null;
                if ($bodySchema !== null) {
                    $expectedBody = $this->sample($bodySchema);
                    $parameters['body'] = $this->typedValue($reflection->getProperty('body')->getType(), $expectedBody);
                }
                $request = new $requestClass(...$parameters);
                foreach ($operation['responses'] as $status => $responseSpec) {
                    if ($status < 200 || $status >= 300) {
                        continue;
                    }
                    $responseSchema = $responseSpec['content']['application/json']['schema'] ?? null;
                    $payload = $responseSchema === null ? null : $this->sample($responseSchema);
                    $history = [];
                    $stack = HandlerStack::create(new MockHandler([new Response((int) $status, ['spaceship-operation-id' => 'op-123'], $payload === null ? '' : json_encode($payload, JSON_THROW_ON_ERROR))]));
                    $stack->push(Middleware::history($history));
                    $serviceClass = "CommunitySDKs\\Spaceship\\Service\\{$group}Service";
                    $service = new $serviceClass(new ApiClient(new Client(['handler' => $stack]), Config::sandbox('key', 'secret')));
                    $response = $service->{$operation['operationId']}($request);
                    self::assertSame((int) $status, $response->statusCode, $name);
                    self::assertSame('op-123', $response->operationId()->value);
                    self::assertSame(strtoupper($method), $history[0]['request']->getMethod());
                    self::assertStringEndsWith($expectedPath, $history[0]['request']->getUri()->getPath());
                    parse_str($history[0]['request']->getUri()->getQuery(), $actualQuery);
                    self::assertEquals($expectedQuery, $actualQuery, $name);
                    $wireBody = (string) $history[0]['request']->getBody();
                    self::assertEquals($expectedBody, $wireBody === '' ? null : json_decode($wireBody, true, 512, JSON_THROW_ON_ERROR), $name);
                    if ($payload !== null) {
                        self::assertIsObject($response->data, $name);
                        // JSON normalization allows object-valued dictionaries in toArray().
                        self::assertEquals($payload, json_decode(json_encode($response->data->toArray(), JSON_THROW_ON_ERROR), true, 512, JSON_THROW_ON_ERROR), $name);
                    } else {
                        self::assertNull($response->data);
                    }
                }
                ++$count;
            }
        }
        self::assertSame(50, $count);
    }

    public function testErrorsRemainEndpointSpecificWithDefaultGuzzleMiddleware(): void
    {
        $stack = HandlerStack::create(new MockHandler([new Response(429, ['Retry-After' => '30'], '{"title":"rate limit"}')]));
        $client = new \CommunitySDKs\Spaceship\Client(Config::sandbox('key', 'secret'), new Client(['handler' => $stack]));
        try {
            $client->domains()->getDomainList(new \CommunitySDKs\Spaceship\DTO\Domains\Request\GetDomainListRequest(10, 0));
            self::fail('Expected endpoint exception');
        } catch (\CommunitySDKs\Spaceship\Exception\Domains\GetDomainListException $error) {
            self::assertSame(429, $error->statusCode);
            self::assertSame(['30'], $error->headers['Retry-After']);
            self::assertSame('{"title":"rate limit"}', $error->responseBody);
        }
    }

    public function testAsyncDetailsPreserveUnknownPayload(): void
    {
        $data = ['domain' => 'example.com', 'nested' => ['result' => true], 'items' => [1, 2]];
        $details = \CommunitySDKs\Spaceship\DTO\AsyncOperations\Schema\AsyncOperationDetails::fromArray($data);
        self::assertSame($data, $details->toArray());
    }

    public function testTypedCollectionsRejectRawArrays(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        new \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsListDeleteItem([['type' => 'A']]);
    }

    public function testEmptyEnvironmentMapSerializesAsObject(): void
    {
        $body = new \CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\EnvironmentVariables(new \CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\EnvironmentVariableItems());
        self::assertSame('{"items":{}}', json_encode($body->toArray(), JSON_THROW_ON_ERROR));
    }

    public function testOptionalFiltersAreOmittedAndFalseIsPreserved(): void
    {
        $request = new \CommunitySDKs\Spaceship\DTO\Domains\Request\GetDomainListRequest(10, 0);
        self::assertSame(['take' => 10, 'skip' => 0], $request->toQueryParams());
        $body = new \CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsDomainAutoRenewal(false);
        self::assertSame(['isEnabled' => false], $body->toArray());
    }

    public function testMissingRequiredPaginationFieldIsRejected(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        \CommunitySDKs\Spaceship\DTO\Domains\Schema\GetDomainListResult::fromArray(['items' => []]);
    }

    public function testUnknownDnsRecordTypeIsRejected(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecord::fromArray(['type' => 'UNKNOWN', 'name' => '@', 'group' => []]);
    }

    public function testAllSourceClassesAutoload(): void
    {
        $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(__DIR__ . '/../src'));
        foreach ($files as $file) {
            if ($file->getExtension() !== 'php') {
                continue;
            }
            $source = file_get_contents($file->getPathname());
            preg_match('/namespace ([^;]+);/', $source, $namespace);
            $class = $namespace[1] . '\\' . $file->getBasename('.php');
            self::assertTrue(class_exists($class) || enum_exists($class), $class);
        }
    }
}
