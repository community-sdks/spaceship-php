<?php

declare(strict_types=1);

use CommunitySDKs\Spaceship\Client;
use CommunitySDKs\Spaceship\Config\Config;

require __DIR__ . '/../vendor/autoload.php';

$apiKey = getenv('SPACESHIP_API_KEY') ?: 'YOUR_API_KEY';
$apiSecret = getenv('SPACESHIP_API_SECRET') ?: 'YOUR_API_SECRET';
$customEndpoint = getenv('SPACESHIP_API_ENDPOINT') ?: null;

$config = $customEndpoint !== null && $customEndpoint !== ''
    ? Config::withCustomEndpoint($apiKey, $apiSecret, $customEndpoint)
    : Config::sandbox($apiKey, $apiSecret);

$client = new Client($config);
