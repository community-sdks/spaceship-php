<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Service;

use CommunitySDKs\Spaceship\Http\ApiClient;

final class SellerhubService
{
    public function __construct(private readonly ApiClient $apiClient)
    {
    }

    /**
     * Create a checkout link.
     */
    public function createCheckoutLink(\CommunitySDKs\Spaceship\DTO\Request\CreatecheckoutlinkRequest $request): \CommunitySDKs\Spaceship\DTO\Response\CreatecheckoutlinkResponse
    {
        $response = $this->apiClient->request(
            'POST',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\CreatecheckoutlinkException(
                'API request failed for createCheckoutLink',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\CreatecheckoutlinkResponse::fromPsrResponse($response);
    }

    /**
     * Get SellerHub domains list.
     */
    public function getSellerHubDomainList(\CommunitySDKs\Spaceship\DTO\Request\GetsellerhubdomainlistRequest $request): \CommunitySDKs\Spaceship\DTO\Response\GetsellerhubdomainlistResponse
    {
        $response = $this->apiClient->request(
            'GET',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\GetsellerhubdomainlistException(
                'API request failed for getSellerHubDomainList',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\GetsellerhubdomainlistResponse::fromPsrResponse($response);
    }

    /**
     * Create a SellerHub domain.
     */
    public function createSellerHubDomain(\CommunitySDKs\Spaceship\DTO\Request\CreatesellerhubdomainRequest $request): \CommunitySDKs\Spaceship\DTO\Response\CreatesellerhubdomainResponse
    {
        $response = $this->apiClient->request(
            'POST',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\CreatesellerhubdomainException(
                'API request failed for createSellerHubDomain',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\CreatesellerhubdomainResponse::fromPsrResponse($response);
    }

    /**
     * Get a specific SellerHub domain.
     */
    public function getSellerHubDomain(\CommunitySDKs\Spaceship\DTO\Request\GetsellerhubdomainRequest $request): \CommunitySDKs\Spaceship\DTO\Response\GetsellerhubdomainResponse
    {
        $response = $this->apiClient->request(
            'GET',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\GetsellerhubdomainException(
                'API request failed for getSellerHubDomain',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\GetsellerhubdomainResponse::fromPsrResponse($response);
    }

    /**
     * Update a SellerHub domain.
     */
    public function updateSellerHubDomain(\CommunitySDKs\Spaceship\DTO\Request\UpdatesellerhubdomainRequest $request): \CommunitySDKs\Spaceship\DTO\Response\UpdatesellerhubdomainResponse
    {
        $response = $this->apiClient->request(
            'PATCH',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\UpdatesellerhubdomainException(
                'API request failed for updateSellerHubDomain',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\UpdatesellerhubdomainResponse::fromPsrResponse($response);
    }

    /**
     * Delete a SellerHub domain.
     */
    public function deleteSellerHubDomain(\CommunitySDKs\Spaceship\DTO\Request\DeletesellerhubdomainRequest $request): \CommunitySDKs\Spaceship\DTO\Response\DeletesellerhubdomainResponse
    {
        $response = $this->apiClient->request(
            'DELETE',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\DeletesellerhubdomainException(
                'API request failed for deleteSellerHubDomain',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\DeletesellerhubdomainResponse::fromPsrResponse($response);
    }

    /**
     * Get verification records.
     */
    public function getVerificationRecords(\CommunitySDKs\Spaceship\DTO\Request\GetverificationrecordsRequest $request): \CommunitySDKs\Spaceship\DTO\Response\GetverificationrecordsResponse
    {
        $response = $this->apiClient->request(
            'GET',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\GetverificationrecordsException(
                'API request failed for getVerificationRecords',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\GetverificationrecordsResponse::fromPsrResponse($response);
    }

}
