<?php

declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

$service = $client->domains();

echo "Running DomainsService::getDomainList...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\GetDomainListRequest::sample();
try {
    $response = $service->getDomainList($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

echo "Running DomainsService::checkDomainsAvailability...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\CheckDomainsAvailabilityRequest::sample();
try {
    $response = $service->checkDomainsAvailability($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

echo "Running DomainsService::getDomainInfo...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\GetDomainInfoRequest::sample();
try {
    $response = $service->getDomainInfo($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

echo "Running DomainsService::domainDelete...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\DomainDeleteRequest::sample();
try {
    $response = $service->domainDelete($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

echo "Running DomainsService::domainCreate...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\DomainCreateRequest::sample();
try {
    $response = $service->domainCreate($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

echo "Running DomainsService::updateAutorenewal...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\UpdateAutorenewalRequest::sample();
try {
    $response = $service->updateAutorenewal($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

echo "Running DomainsService::checkSingleDomainAvailability...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\CheckSingleDomainAvailabilityRequest::sample();
try {
    $response = $service->checkSingleDomainAvailability($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

echo "Running DomainsService::setDomainContacts...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\SetDomainContactsRequest::sample();
try {
    $response = $service->setDomainContacts($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

echo "Running DomainsService::setDomainNameservers...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\SetDomainNameserversRequest::sample();
try {
    $response = $service->setDomainNameservers($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

echo "Running DomainsService::getDomainPersonalNameservers...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\GetDomainPersonalNameserversRequest::sample();
try {
    $response = $service->getDomainPersonalNameservers($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

echo "Running DomainsService::getDomainPersonalNameserverHostInfo...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\GetDomainPersonalNameserverHostInfoRequest::sample();
try {
    $response = $service->getDomainPersonalNameserverHostInfo($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

echo "Running DomainsService::updateDomainPersonalNameserverHostInfo...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\UpdateDomainPersonalNameserverHostInfoRequest::sample();
try {
    $response = $service->updateDomainPersonalNameserverHostInfo($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

echo "Running DomainsService::deleteDomainPersonalNameserverHostInfo...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\DeleteDomainPersonalNameserverHostInfoRequest::sample();
try {
    $response = $service->deleteDomainPersonalNameserverHostInfo($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

echo "Running DomainsService::updateDomainEmailProtectionPreference...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\UpdateDomainEmailProtectionPreferenceRequest::sample();
try {
    $response = $service->updateDomainEmailProtectionPreference($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

echo "Running DomainsService::updateDomainPrivacyPreference...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\UpdateDomainPrivacyPreferenceRequest::sample();
try {
    $response = $service->updateDomainPrivacyPreference($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

echo "Running DomainsService::domainRenew...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\DomainRenewRequest::sample();
try {
    $response = $service->domainRenew($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

echo "Running DomainsService::domainRestore...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\DomainRestoreRequest::sample();
try {
    $response = $service->domainRestore($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

echo "Running DomainsService::transferRequest...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\TransferRequestRequest::sample();
try {
    $response = $service->transferRequest($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

echo "Running DomainsService::getTransferInfo...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\GetTransferInfoRequest::sample();
try {
    $response = $service->getTransferInfo($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

echo "Running DomainsService::getAuthCode...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\GetAuthCodeRequest::sample();
try {
    $response = $service->getAuthCode($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

echo "Running DomainsService::updateTransferLock...\n";
$request = \CommunitySDKs\Spaceship\DTO\Request\UpdateTransferLockRequest::sample();
try {
    $response = $service->updateTransferLock($request);
    echo 'Status: ' . $response->statusCode . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
echo str_repeat('-', 60) . PHP_EOL;

