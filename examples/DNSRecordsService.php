<?php

declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

use CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue;
use CommunitySDKs\Spaceship\DTO\Common\Schema\IpV4Address;
use CommunitySDKs\Spaceship\DTO\DNSRecords\Request\DeleteRecordsRequest;
use CommunitySDKs\Spaceship\DTO\DNSRecords\Request\GetResourceRecordsListRequest;
use CommunitySDKs\Spaceship\DTO\DNSRecords\Request\SaveRecordsRequest;
use CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\AResourceRecordCreateOrUpdateItem;
use CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\AResourceRecordDeleteItem;
use CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\RecordsRecordsUpdateModel;
use CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsListCreateOrUpdateItem;
use CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsListDeleteItem;

$service = $client->dnsRecords();

echo "Running DNSRecordsService::saveRecords...\n";
$request = new SaveRecordsRequest(
    'example.com',
    new RecordsRecordsUpdateModel(
        false,
        new ResourceRecordsListCreateOrUpdateItem([
            new AResourceRecordCreateOrUpdateItem(
                'A',
                HostNameValue::fromValue('www'),
                3600,
                IpV4Address::fromValue('203.0.113.10')
            ),
        ])
    )
);

try {
    $response = $service->saveRecords($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $exception) {
    echo 'Error: ' . $exception->getMessage() . PHP_EOL;
}

echo str_repeat('-', 60) . PHP_EOL;

echo "Running DNSRecordsService::deleteRecords...\n";
$request = new DeleteRecordsRequest(
    'example.com',
    new ResourceRecordsListDeleteItem([
        new AResourceRecordDeleteItem(
            'A',
            HostNameValue::fromValue('www'),
            IpV4Address::fromValue('203.0.113.10')
        ),
    ])
);

try {
    $response = $service->deleteRecords($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $exception) {
    echo 'Error: ' . $exception->getMessage() . PHP_EOL;
}

echo str_repeat('-', 60) . PHP_EOL;

echo "Running DNSRecordsService::getResourceRecordsList...\n";
$request = new GetResourceRecordsListRequest('example.com', 50, 0, ['name asc']);

try {
    $response = $service->getResourceRecordsList($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $exception) {
    echo 'Error: ' . $exception->getMessage() . PHP_EOL;
}

echo str_repeat('-', 60) . PHP_EOL;

