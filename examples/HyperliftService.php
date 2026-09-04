<?php

declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

use CommunitySDKs\Spaceship\DTO\Hyperlift\Request\GetHyperliftApplicationLogsRequest;

$applicationId = getenv('SPACESHIP_APPLICATION_ID');
if ($applicationId === false || $applicationId === '') {
    throw new RuntimeException('Set SPACESHIP_APPLICATION_ID to the application whose logs you want to read.');
}

// Fetch one page. Store the cursor and pass it back on the next call to follow logs.
$response = $client->hyperlift()->getHyperliftApplicationLogs(
    new GetHyperliftApplicationLogsRequest(id: $applicationId, take: 100),
);
echo json_encode($response->data->toArray(), JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR) . PHP_EOL;
echo 'Next cursor: ' . ($response->data->cursor?->value ?? '(none)') . PHP_EOL;
