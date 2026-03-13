<?php

declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

$service = $client->asyncOperations();

echo "Running AsyncOperationsService::getAsyncOperationDetails...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\GetAsyncOperationDetailsRequest::sample();
try {
    $response = $service->getAsyncOperationDetails($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

