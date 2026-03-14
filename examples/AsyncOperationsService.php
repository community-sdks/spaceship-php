<?php

declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

use CommunitySDKs\Spaceship\DTO\AsyncOperations\Request\GetAsyncOperationDetailsRequest;

$service = $client->asyncOperations();

echo "Running AsyncOperationsService::getAsyncOperationDetails...\n";
$request = new GetAsyncOperationDetailsRequest('operation_123');

try {
    $response = $service->getAsyncOperationDetails($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $exception) {
    echo 'Error: ' . $exception->getMessage() . PHP_EOL;
}

echo str_repeat('-', 60) . PHP_EOL;

