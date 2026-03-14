<?php

declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

use CommunitySDKs\Spaceship\DTO\Domains\Request\CheckDomainsAvailabilityRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\CheckSingleDomainAvailabilityRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\GetDomainInfoRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\GetDomainListRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainName;
use CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsGetDomainsAvailabilityRequest;

$service = $client->domains();

echo "Running DomainsService::getDomainList...\n";
$request = new GetDomainListRequest(20, 0, ['createdAt desc']);

try {
    $response = $service->getDomainList($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $exception) {
    echo 'Error: ' . $exception->getMessage() . PHP_EOL;
}

echo str_repeat('-', 60) . PHP_EOL;

echo "Running DomainsService::checkDomainsAvailability...\n";
$request = new CheckDomainsAvailabilityRequest(
    new DomainsGetDomainsAvailabilityRequest([
        DomainName::fromValue('example.com'),
        DomainName::fromValue('example.net'),
    ])
);

try {
    $response = $service->checkDomainsAvailability($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $exception) {
    echo 'Error: ' . $exception->getMessage() . PHP_EOL;
}

echo str_repeat('-', 60) . PHP_EOL;

echo "Running DomainsService::getDomainInfo...\n";
$request = new GetDomainInfoRequest('example.com');

try {
    $response = $service->getDomainInfo($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $exception) {
    echo 'Error: ' . $exception->getMessage() . PHP_EOL;
}

echo str_repeat('-', 60) . PHP_EOL;

echo "Running DomainsService::checkSingleDomainAvailability...\n";
$request = new CheckSingleDomainAvailabilityRequest('example.com');

try {
    $response = $service->checkSingleDomainAvailability($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $exception) {
    echo 'Error: ' . $exception->getMessage() . PHP_EOL;
}

echo str_repeat('-', 60) . PHP_EOL;

