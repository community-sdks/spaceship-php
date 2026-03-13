<?php

declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

$service = $client->contacts();

echo "Running ContactsService::saveDetails...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\SaveDetailsRequest::sample();
try {
    $response = $service->saveDetails($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

echo "Running ContactsService::readDetails...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\ReadDetailsRequest::sample();
try {
    $response = $service->readDetails($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

