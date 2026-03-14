<?php

declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

use CommunitySDKs\Spaceship\DTO\ContactsAttributes\Request\ReadAttributeDetailsRequest;
use CommunitySDKs\Spaceship\DTO\ContactsAttributes\Request\SaveContactAttributesRequest;
use CommunitySDKs\Spaceship\DTO\ContactsAttributes\Schema\UsAttributeDetails;

$service = $client->contactsAttributes();

echo "Running ContactsAttributesService::saveContactAttributes...\n";
$request = new SaveContactAttributesRequest(new UsAttributeDetails('us', 'P3', 'C11'));

try {
    $response = $service->saveContactAttributes($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $exception) {
    echo 'Error: ' . $exception->getMessage() . PHP_EOL;
}

echo str_repeat('-', 60) . PHP_EOL;

echo "Running ContactsAttributesService::readAttributeDetails...\n";
$request = new ReadAttributeDetailsRequest('contact-handle');

try {
    $response = $service->readAttributeDetails($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $exception) {
    echo 'Error: ' . $exception->getMessage() . PHP_EOL;
}

echo str_repeat('-', 60) . PHP_EOL;

