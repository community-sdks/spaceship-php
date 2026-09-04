# community-sdks/spaceship-php

Typed PHP SDK for the Spaceship API.

Requires PHP 8.2 or newer. Covers all 50 operations in the bundled [OpenAPI contract](openapi.json), including domains, DNS, contacts, async operations, SellerHub, and Hyperlift. Every service accepts a request DTO and returns a response DTO with typed nested data.

Upgrading from v1? Read the [v2 migration guide](docs/MIGRATION-v2.md).

- Composer package: community-sdks/spaceship-php
- Namespace: CommunitySDKs\Spaceship

## Installation

```bash
composer require community-sdks/spaceship-php:^2.0
```

## Basic setup

```php
use CommunitySDKs\Spaceship\Client;
use CommunitySDKs\Spaceship\Config\Config;

$client = new Client(Config::sandbox('API_KEY', 'API_SECRET'));
```

Load `vendor/autoload.php` before using the SDK. Use `Config::production()` for production credentials. Keep keys in environment variables and grant only the scopes required by the operations you use. Service references list those scopes.

## List domains with typed pagination

```php
use CommunitySDKs\Spaceship\DTO\Domains\Request\GetDomainListRequest;

$skip = 0;
do {
    $page = $client->domains()->getDomainList(new GetDomainListRequest(
        take: 100,
        skip: $skip,
        orderBy: ['name'],
    ))->data;

    foreach ($page->items as $domain) {
        echo $domain->name->value . ' ' . $domain->expirationDate->value . PHP_EOL;
    }
    $skip += count($page->items);
} while ($page->items !== [] && $skip < $page->total);
```

`data` is a schema DTO, `items` contains DTOs, and `total` is an integer. Scalar wrappers and enums expose `value`. Optional request arguments default to `null` and are omitted from the request. The SDK sends one request per method call; pagination is controlled by the caller.

## Write DNS records

```php
use CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue;
use CommunitySDKs\Spaceship\DTO\Common\Schema\IpV4Address;
use CommunitySDKs\Spaceship\DTO\DNSRecords\Request\SaveRecordsRequest;
use CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\AResourceRecordCreateOrUpdateItem;
use CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\RecordsRecordsUpdateModel;
use CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsListCreateOrUpdateItem;

$records = new ResourceRecordsListCreateOrUpdateItem([
    new AResourceRecordCreateOrUpdateItem('A', new HostNameValue('@'), 3600, new IpV4Address('192.0.2.1')),
]);
$response = $client->dnsRecords()->saveRecords(new SaveRecordsRequest(
    domain: 'example.com',
    body: new RecordsRecordsUpdateModel(force: null, items: $records),
));
// Successful writes return HTTP 204 with $response->data === null.
```

Use typed DTOs in constructors. At a JSON boundary, `SomeSchema::fromArray($decoded)` recursively hydrates nested DTOs, and `toArray()` produces the wire representation. Collection constructors reject invalid element types. API-specific limits and business rules remain enforced by the server; see the [DTO field reference](docs/DTOs.md).

## Async operations

Domain registration, renewal, restoration, and transfer return HTTP 202. Read `$response->operationId()?->value` from that response and pass it to the status endpoint:

```php
use CommunitySDKs\Spaceship\DTO\AsyncOperations\Request\GetAsyncOperationDetailsRequest;
use CommunitySDKs\Spaceship\DTO\AsyncOperations\Enum\AsyncOperationStatus;

$operation = $client->asyncOperations()->getAsyncOperationDetails(
    new GetAsyncOperationDetailsRequest('operation-id-from-response'),
)->data;

if ($operation->status === AsyncOperationStatus::SUCCESS) {
    $details = $operation->details?->items;
}
```

Poll while the status is `PENDING`, with a delay and a deadline appropriate to your application; handle `FAILED` explicitly. The SDK does not poll automatically. The contract leaves `details` undefined, so its DTO preserves an arbitrary JSON dictionary through `items` instead of discarding unknown fields.

## Hyperlift logs and environment

```php
use CommunitySDKs\Spaceship\DTO\Hyperlift\Request\GetHyperliftApplicationLogsRequest;

$logs = $client->hyperlift()->getHyperliftApplicationLogs(
    new GetHyperliftApplicationLogsRequest(id: 'application-id', take: 100),
)->data;

// Pass $logs->cursor?->value as the next request's cursor.
// $logs->finished indicates that the application has stopped.
```

Environment writes use `UpdateHyperliftApplicationEnvironmentRequest` with an `EnvironmentVariables` body containing `EnvironmentVariableItems`. Dictionary values are `EnvironmentVariableValue` DTOs. See the [Hyperlift reference](docs/HyperliftService.md) for metrics, scaling, builds, and restart operations.

## Error handling

```php
use CommunitySDKs\Spaceship\Exception\Common\ApiException;
use GuzzleHttp\Exception\GuzzleException;

try {
    $response = $client->domains()->getDomainList(new GetDomainListRequest(10, 0));
} catch (ApiException $error) {
    // Also catch a specific subclass such as GetDomainListException if preferred.
    error_log('Spaceship HTTP status: ' . $error->statusCode);
    // $error->headers and $error->responseBody retain API error details.
} catch (GuzzleException $error) {
    // Connection failures, timeouts, and other transport errors.
}
```

The SDK does not retry automatically. For HTTP 429, inspect `Retry-After` and the rate-limit headers before retrying. Avoid blindly retrying mutations, which may already have succeeded. Invalid JSON responses raise `JsonException`; malformed DTO payloads raise type/validation exceptions. Set the timeout through `Config::sandbox($key, $secret, timeoutSeconds: 30)` or the corresponding production factory. A custom Guzzle `ClientInterface` can be passed as the second `Client` constructor argument.

## Custom endpoint override

```php
use CommunitySDKs\Spaceship\Client;
use CommunitySDKs\Spaceship\Config\Config;

$config = Config::withCustomEndpoint(
    'API_KEY',
    'API_SECRET',
    'https://spaceship.dev/api'
);

$client = new Client($config);
```

## Examples

Run the sandbox example templates from the `examples/` folder.
Each script shows manual DTO construction with placeholder values you should replace before making real API calls.

**PowerShell:**
```powershell
$env:SPACESHIP_API_KEY='your_key'; $env:SPACESHIP_API_SECRET='your_secret'; php examples/DomainsService.php
```

**Bash (Mac / Linux / Git Bash):**
```bash
SPACESHIP_API_KEY=your_key SPACESHIP_API_SECRET=your_secret php examples/DomainsService.php
```

See `examples/README.md` for the available scripts, required environment variables, and notes about replacing placeholder data.

## Documentation

| Service | Description |
|---|---|
| [DomainsService](docs/DomainsService.md) | Full domain lifecycle: list, availability checks, create, delete, renew, restore, transfer, contacts, nameservers, privacy, auth code, and transfer lock |
| [DNSRecordsService](docs/DNSRecordsService.md) | Manage DNS resource records for domains: save, delete, and list records |
| [ContactsService](docs/ContactsService.md) | Save and read registrant and contact details |
| [ContactsAttributesService](docs/ContactsAttributesService.md) | Save and read extended contact attributes per TLD |
| [AsyncOperationsService](docs/AsyncOperationsService.md) | Retrieve the status and result of long-running async operations |
| [SellerHubService](docs/SellerHubService.md) | Manage SellerHub checkout links, domains, pricing, and verification records |
| [HyperliftService](docs/HyperliftService.md) | Applications, builds, logs, metrics, environment variables, restart, and scaling |

SellerHub also supports sold-domain reports and SafePay transactions. The [DTO reference](docs/DTOs.md) documents all schema fields and the [changelog](CHANGELOG.md) summarizes release changes.

## Run tests

```bash
composer install
composer test
```

Tests use Guzzle mocks and require no API credentials. Contract tests exercise every operation against `openapi.json`, including typed request/response round trips and HTTP serialization.

To regenerate DTOs, service methods, and reference documentation after updating the contract:

```bash
python tools/generate.py
composer test
```

Python 3.10+ is needed only for generation, not for using the SDK. Commit the contract, generator, generated code, and references together. Handwritten usage guidance and migration notes live outside generated service reference files.
