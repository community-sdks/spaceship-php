<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship;

use CommunitySDKs\Spaceship\Config\Config;
use CommunitySDKs\Spaceship\Http\ApiClient;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\ClientInterface;
use CommunitySDKs\Spaceship\Service\AsyncOperationsService;
use CommunitySDKs\Spaceship\Service\ContactsAttributesService;
use CommunitySDKs\Spaceship\Service\ContactsService;
use CommunitySDKs\Spaceship\Service\DNSRecordsService;
use CommunitySDKs\Spaceship\Service\DomainsService;
use CommunitySDKs\Spaceship\Service\SellerHubService;

final class Client
{
    private readonly ApiClient $apiClient;

    public function __construct(Config $config, ?ClientInterface $httpClient = null)
    {
        $this->apiClient = new ApiClient($httpClient ?? new GuzzleClient(), $config);
    }

public function asyncOperations(): AsyncOperationsService
{
    return new AsyncOperationsService($this->apiClient);
}

public function contactsAttributes(): ContactsAttributesService
{
    return new ContactsAttributesService($this->apiClient);
}

public function contacts(): ContactsService
{
    return new ContactsService($this->apiClient);
}

public function dnsRecords(): DNSRecordsService
{
    return new DNSRecordsService($this->apiClient);
}

public function domains(): DomainsService
{
    return new DomainsService($this->apiClient);
}

public function sellerhub(): SellerHubService
{
    return new SellerHubService($this->apiClient);
}

}
