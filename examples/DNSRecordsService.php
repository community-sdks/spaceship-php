<?php

declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

$service = $client->dNSRecords();

echo "Running DNSRecordsService::saveRecords...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\SaveRecordsRequest::sample();
try {
    $response = $service->saveRecords($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

echo "Running DNSRecordsService::deleteRecords...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\DeleteRecordsRequest::sample();
try {
    $response = $service->deleteRecords($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

echo "Running DNSRecordsService::getResourceRecordsList...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\GetResourceRecordsListRequest::sample();
try {
    $response = $service->getResourceRecordsList($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

