<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Service;

use CommunitySDKs\Spaceship\Http\ApiClient;

final class SellerHubService
{
    public function __construct(private readonly ApiClient $apiClient)
    {
    }

    /**
     * Create a checkout link.
     */
    public function createCheckoutLink(\CommunitySDKs\Spaceship\DTO\Request\CreateCheckoutLinkRequest $request): \CommunitySDKs\Spaceship\DTO\Response\CreateCheckoutLinkResponse
    {
        $response = $this->apiClient->request(
            'POST',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\CreateCheckoutLinkException(
                'API request failed for createCheckoutLink',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\CreateCheckoutLinkResponse::fromPsrResponse($response);
    }

    /**
     * Get SellerHub domains list.
     */
    public function getSellerHubDomainList(\CommunitySDKs\Spaceship\DTO\Request\GetSellerHubDomainListRequest $request): \CommunitySDKs\Spaceship\DTO\Response\GetSellerHubDomainListResponse
    {
        $response = $this->apiClient->request(
            'GET',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\GetSellerHubDomainListException(
                'API request failed for getSellerHubDomainList',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\GetSellerHubDomainListResponse::fromPsrResponse($response);
    }

    /**
     * Create a SellerHub domain.
     */
    public function createSellerHubDomain(\CommunitySDKs\Spaceship\DTO\Request\CreateSellerHubDomainRequest $request): \CommunitySDKs\Spaceship\DTO\Response\CreateSellerHubDomainResponse
    {
        $response = $this->apiClient->request(
            'POST',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\CreateSellerHubDomainException(
                'API request failed for createSellerHubDomain',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\CreateSellerHubDomainResponse::fromPsrResponse($response);
    }

    /**
     * Get a specific SellerHub domain.
     */
    public function getSellerHubDomain(\CommunitySDKs\Spaceship\DTO\Request\GetSellerHubDomainRequest $request): \CommunitySDKs\Spaceship\DTO\Response\GetSellerHubDomainResponse
    {
        $response = $this->apiClient->request(
            'GET',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\GetSellerHubDomainException(
                'API request failed for getSellerHubDomain',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\GetSellerHubDomainResponse::fromPsrResponse($response);
    }

    /**
     * Update a SellerHub domain.
     */
    public function updateSellerHubDomain(\CommunitySDKs\Spaceship\DTO\Request\UpdateSellerHubDomainRequest $request): \CommunitySDKs\Spaceship\DTO\Response\UpdateSellerHubDomainResponse
    {
        $response = $this->apiClient->request(
            'PATCH',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\UpdateSellerHubDomainException(
                'API request failed for updateSellerHubDomain',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\UpdateSellerHubDomainResponse::fromPsrResponse($response);
    }

    /**
     * Delete a SellerHub domain.
     */
    public function deleteSellerHubDomain(\CommunitySDKs\Spaceship\DTO\Request\DeleteSellerHubDomainRequest $request): \CommunitySDKs\Spaceship\DTO\Response\DeleteSellerHubDomainResponse
    {
        $response = $this->apiClient->request(
            'DELETE',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\DeleteSellerHubDomainException(
                'API request failed for deleteSellerHubDomain',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\DeleteSellerHubDomainResponse::fromPsrResponse($response);
    }

    /**
     * Get verification records.
     */
    public function getVerificationRecords(\CommunitySDKs\Spaceship\DTO\Request\GetVerificationRecordsRequest $request): \CommunitySDKs\Spaceship\DTO\Response\GetVerificationRecordsResponse
    {
        $response = $this->apiClient->request(
            'GET',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\GetVerificationRecordsException(
                'API request failed for getVerificationRecords',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\GetVerificationRecordsResponse::fromPsrResponse($response);
    }

}
