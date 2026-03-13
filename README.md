# community-sdks/spaceship

Typed PHP SDK for the Spaceship API.

- Composer package: community-sdks/spaceship
- Namespace: CommunitySDKs\Spaceship

## Installation

```bash
composer require community-sdks/spaceship
```

## Basic setup

```php
use CommunitySDKs\Spaceship\Client;
use CommunitySDKs\Spaceship\Config\SpaceshipConfig;

$client = new Client(SpaceshipConfig::sandbox('API_KEY', 'API_SECRET'));
```

## Run tests

```bash
composer install
composer test
```
