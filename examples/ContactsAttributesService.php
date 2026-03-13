<?php

declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

$service = $client->contactsAttributes();

echo "Running ContactsAttributesService::saveContactAttributes...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\SaveContactAttributesRequest::sample();
try {
    $response = $service->saveContactAttributes($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

echo "Running ContactsAttributesService::readAttributeDetails...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\ReadAttributeDetailsRequest::sample();
try {
    $response = $service->readAttributeDetails($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

