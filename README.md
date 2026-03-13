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

Run ready-to-use sandbox examples from the `examples/` folder.

**PowerShell:**
```powershell
$env:SPACESHIP_API_KEY='your_key'; $env:SPACESHIP_API_SECRET='your_secret'; php examples/DomainsService.php
```

**Bash (Mac / Linux / Git Bash):**
```bash
SPACESHIP_API_KEY=your_key SPACESHIP_API_SECRET=your_secret php examples/DomainsService.php
```

See `examples/README.md` for all scripts and environment variables.

## Documentation

| Service | Description |
|---|---|
| [DomainsService](/docs/DomainsService.md) | Full domain lifecycle — list, create, delete, renew, restore, transfer, contacts, nameservers, privacy, auth code, and transfer lock |
| [DNSRecordsService](/docs/DNSRecordsService.md) | Manage DNS resource records for domains — save, delete, and list records |
| [ContactsService](/docs/ContactsService.md) | Save and read registrant/contact details |
| [ContactsAttributesService](/docs/ContactsAttributesService.md) | Save and read extended contact attributes per TLD |
| [AsyncOperationsService](/docs/AsyncOperationsService.md) | Retrieve the status and result of long-running async operations |
| [SellerHubService](/docs/SellerHubService.md) | Manage SellerHub domains — checkout links, domain lifecycle, and verification records |

## Run tests

```bash
composer install
composer test
```
