# community-sdks/spaceship-php

Typed PHP SDK for the Spaceship API.

- Composer package: community-sdks/spaceship-php
- Namespace: CommunitySDKs\Spaceship

## Installation

```bash
composer require community-sdks/spaceship-php
```

## Basic setup

```php
use CommunitySDKs\Spaceship\Client;
use CommunitySDKs\Spaceship\Config\Config;

$client = new Client(Config::sandbox('API_KEY', 'API_SECRET'));
```

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

## Run tests

```bash
composer install
composer test
```
