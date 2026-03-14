<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Service;

use CommunitySDKs\Spaceship\DTO\SellerHub\Request\CreateCheckoutLinkRequest;
use CommunitySDKs\Spaceship\DTO\SellerHub\Request\CreateSellerHubDomainRequest;
use CommunitySDKs\Spaceship\DTO\SellerHub\Request\DeleteSellerHubDomainRequest;
use CommunitySDKs\Spaceship\DTO\SellerHub\Request\GetSellerHubDomainListRequest;
use CommunitySDKs\Spaceship\DTO\SellerHub\Request\GetSellerHubDomainRequest;
use CommunitySDKs\Spaceship\DTO\SellerHub\Request\GetVerificationRecordsRequest;
use CommunitySDKs\Spaceship\DTO\SellerHub\Request\UpdateSellerHubDomainRequest;
use CommunitySDKs\Spaceship\DTO\SellerHub\Response\CreateCheckoutLinkResponse;
use CommunitySDKs\Spaceship\DTO\SellerHub\Response\CreateSellerHubDomainResponse;
use CommunitySDKs\Spaceship\DTO\SellerHub\Response\DeleteSellerHubDomainResponse;
use CommunitySDKs\Spaceship\DTO\SellerHub\Response\GetSellerHubDomainListResponse;
use CommunitySDKs\Spaceship\DTO\SellerHub\Response\GetSellerHubDomainResponse;
use CommunitySDKs\Spaceship\DTO\SellerHub\Response\GetVerificationRecordsResponse;
use CommunitySDKs\Spaceship\DTO\SellerHub\Response\UpdateSellerHubDomainResponse;
use CommunitySDKs\Spaceship\Exception\SellerHub\CreateCheckoutLinkException;
use CommunitySDKs\Spaceship\Exception\SellerHub\CreateSellerHubDomainException;
use CommunitySDKs\Spaceship\Exception\SellerHub\DeleteSellerHubDomainException;
use CommunitySDKs\Spaceship\Exception\SellerHub\GetSellerHubDomainException;
use CommunitySDKs\Spaceship\Exception\SellerHub\GetSellerHubDomainListException;
use CommunitySDKs\Spaceship\Exception\SellerHub\GetVerificationRecordsException;
use CommunitySDKs\Spaceship\Exception\SellerHub\UpdateSellerHubDomainException;
use CommunitySDKs\Spaceship\Http\ApiClient;

final class SellerHubService
{
    public function __construct(private readonly ApiClient $apiClient)
    {
    }

    /**
     * Create a checkout link.
     */
    public function createCheckoutLink(CreateCheckoutLinkRequest $request): CreateCheckoutLinkResponse
    {
        $path = '/v1/sellerhub/checkout-links';

        $response = $this->apiClient->request(
            'POST',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new CreateCheckoutLinkException(
                'API request failed for createCheckoutLink',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return CreateCheckoutLinkResponse::fromPsrResponse($response);
    }

    /**
     * Get SellerHub domains list.
     */
    public function getSellerHubDomainList(GetSellerHubDomainListRequest $request): GetSellerHubDomainListResponse
    {
        $path = '/v1/sellerhub/domains';

        $response = $this->apiClient->request(
            'GET',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new GetSellerHubDomainListException(
                'API request failed for getSellerHubDomainList',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return GetSellerHubDomainListResponse::fromPsrResponse($response);
    }

    /**
     * Create a SellerHub domain.
     */
    public function createSellerHubDomain(CreateSellerHubDomainRequest $request): CreateSellerHubDomainResponse
    {
        $path = '/v1/sellerhub/domains';

        $response = $this->apiClient->request(
            'POST',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new CreateSellerHubDomainException(
                'API request failed for createSellerHubDomain',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return CreateSellerHubDomainResponse::fromPsrResponse($response);
    }

    /**
     * Get a specific SellerHub domain.
     */
    public function getSellerHubDomain(GetSellerHubDomainRequest $request): GetSellerHubDomainResponse
    {
        $path = '/v1/sellerhub/domains/' . $request->domain;

        $response = $this->apiClient->request(
            'GET',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new GetSellerHubDomainException(
                'API request failed for getSellerHubDomain',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return GetSellerHubDomainResponse::fromPsrResponse($response);
    }

    /**
     * Update a SellerHub domain.
     */
    public function updateSellerHubDomain(UpdateSellerHubDomainRequest $request): UpdateSellerHubDomainResponse
    {
        $path = '/v1/sellerhub/domains/' . $request->domain;

        $response = $this->apiClient->request(
            'PATCH',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new UpdateSellerHubDomainException(
                'API request failed for updateSellerHubDomain',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return UpdateSellerHubDomainResponse::fromPsrResponse($response);
    }

    /**
     * Delete a SellerHub domain.
     */
    public function deleteSellerHubDomain(DeleteSellerHubDomainRequest $request): DeleteSellerHubDomainResponse
    {
        $path = '/v1/sellerhub/domains/' . $request->domain;

        $response = $this->apiClient->request(
            'DELETE',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new DeleteSellerHubDomainException(
                'API request failed for deleteSellerHubDomain',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return DeleteSellerHubDomainResponse::fromPsrResponse($response);
    }

    /**
     * Get verification records.
     */
    public function getVerificationRecords(GetVerificationRecordsRequest $request): GetVerificationRecordsResponse
    {
        $path = '/v1/sellerhub/verification-records';

        $response = $this->apiClient->request(
            'GET',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new GetVerificationRecordsException(
                'API request failed for getVerificationRecords',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return GetVerificationRecordsResponse::fromPsrResponse($response);
    }
}
