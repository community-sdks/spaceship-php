<?php

declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

use CommunitySDKs\Spaceship\DTO\Common\Schema\Currency;
use CommunitySDKs\Spaceship\DTO\SellerHub\Request\CreateCheckoutLinkRequest;
use CommunitySDKs\Spaceship\DTO\SellerHub\Request\GetSellerHubDomainListRequest;
use CommunitySDKs\Spaceship\DTO\SellerHub\Request\GetVerificationRecordsRequest;
use CommunitySDKs\Spaceship\DTO\SellerHub\Enum\CheckoutLinkType;
use CommunitySDKs\Spaceship\DTO\SellerHub\Schema\CreateCheckoutLinkRequest as CreateCheckoutLinkBody;
use CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Price;
use CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerhubDomainName;

$service = $client->sellerhub();

echo "Running SellerHubService::createCheckoutLink...\n";
$request = new CreateCheckoutLinkRequest(
    new CreateCheckoutLinkBody(
        CheckoutLinkType::BUY_NOW,
        new Price('12.99', Currency::fromValue('USD')),
        SellerhubDomainName::fromValue('example.com')
    )
);

try {
    $response = $service->createCheckoutLink($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $exception) {
    echo 'Error: ' . $exception->getMessage() . PHP_EOL;
}

echo str_repeat('-', 60) . PHP_EOL;

echo "Running SellerHubService::getSellerHubDomainList...\n";
$request = new GetSellerHubDomainListRequest(20, 0);

try {
    $response = $service->getSellerHubDomainList($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $exception) {
    echo 'Error: ' . $exception->getMessage() . PHP_EOL;
}

echo str_repeat('-', 60) . PHP_EOL;

echo "Running SellerHubService::getVerificationRecords...\n";
$request = new GetVerificationRecordsRequest();

try {
    $response = $service->getVerificationRecords($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $exception) {
    echo 'Error: ' . $exception->getMessage() . PHP_EOL;
}

echo str_repeat('-', 60) . PHP_EOL;

