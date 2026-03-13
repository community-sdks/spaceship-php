<?php

declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

$service = $client->sellerHub();

echo "Running SellerHubService::createCheckoutLink...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\CreateCheckoutLinkRequest::sample();
try {
    $response = $service->createCheckoutLink($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

echo "Running SellerHubService::getSellerHubDomainList...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\GetSellerHubDomainListRequest::sample();
try {
    $response = $service->getSellerHubDomainList($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

echo "Running SellerHubService::createSellerHubDomain...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\CreateSellerHubDomainRequest::sample();
try {
    $response = $service->createSellerHubDomain($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

echo "Running SellerHubService::getSellerHubDomain...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\GetSellerHubDomainRequest::sample();
try {
    $response = $service->getSellerHubDomain($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

echo "Running SellerHubService::updateSellerHubDomain...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\UpdateSellerHubDomainRequest::sample();
try {
    $response = $service->updateSellerHubDomain($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

echo "Running SellerHubService::deleteSellerHubDomain...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\DeleteSellerHubDomainRequest::sample();
try {
    $response = $service->deleteSellerHubDomain($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

echo "Running SellerHubService::getVerificationRecords...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\GetVerificationRecordsRequest::sample();
try {
    $response = $service->getVerificationRecords($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

