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

Run ready-to-use sandbox examples from the `examples/` folder:

```bash
php examples/DomainsService.php
```

See `examples/README.md` for all scripts and environment variables.

## Run tests

```bash
composer install
composer test
```
