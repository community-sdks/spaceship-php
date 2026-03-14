<?php

declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

use CommunitySDKs\Spaceship\DTO\Contacts\Request\ReadDetailsRequest;
use CommunitySDKs\Spaceship\DTO\Contacts\Request\SaveDetailsRequest;
use CommunitySDKs\Spaceship\DTO\Contacts\Schema\ContactDetails;
use CommunitySDKs\Spaceship\DTO\Contacts\Schema\CountryCode;
use CommunitySDKs\Spaceship\DTO\Contacts\Schema\Phone;

function buildContactDetails(): ContactDetails
{
    return new ContactDetails(
        'Jane',
        'Doe',
        'Example LLC',
        'jane@example.com',
        '123 Example Street',
        null,
        'Phoenix',
        CountryCode::fromValue('US'),
        'AZ',
        '85001',
        Phone::fromValue('+14805550100'),
        null,
        null,
        null,
        null,
    );
}

$service = $client->contacts();

echo "Running ContactsService::saveDetails...\n";
$request = new SaveDetailsRequest(buildContactDetails());

try {
    $response = $service->saveDetails($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $exception) {
    echo 'Error: ' . $exception->getMessage() . PHP_EOL;
}

echo str_repeat('-', 60) . PHP_EOL;

echo "Running ContactsService::readDetails...\n";
$request = new ReadDetailsRequest('contact-handle');

try {
    $response = $service->readDetails($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $exception) {
    echo 'Error: ' . $exception->getMessage() . PHP_EOL;
}

echo str_repeat('-', 60) . PHP_EOL;

