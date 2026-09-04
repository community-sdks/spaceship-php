<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Service;

final class SellerHubService
{
    public function __construct(private readonly \CommunitySDKs\Spaceship\Http\ApiClient $apiClient) {}

    /** Create a checkout link */
    public function createCheckoutLink(\CommunitySDKs\Spaceship\DTO\SellerHub\Request\CreateCheckoutLinkRequest $request): \CommunitySDKs\Spaceship\DTO\SellerHub\Response\CreateCheckoutLinkResponse
    {
        $response = $this->apiClient->request('POST', '/v1/sellerhub/checkout-links', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\SellerHub\CreateCheckoutLinkException("API request failed for createCheckoutLink", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\SellerHub\Response\CreateCheckoutLinkResponse::fromPsrResponse($response);
    }

    /** Get SellerHub domains list */
    public function getSellerHubDomainList(\CommunitySDKs\Spaceship\DTO\SellerHub\Request\GetSellerHubDomainListRequest $request): \CommunitySDKs\Spaceship\DTO\SellerHub\Response\GetSellerHubDomainListResponse
    {
        $response = $this->apiClient->request('GET', '/v1/sellerhub/domains', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\SellerHub\GetSellerHubDomainListException("API request failed for getSellerHubDomainList", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\SellerHub\Response\GetSellerHubDomainListResponse::fromPsrResponse($response);
    }

    /** Create a SellerHub domain */
    public function createSellerHubDomain(\CommunitySDKs\Spaceship\DTO\SellerHub\Request\CreateSellerHubDomainRequest $request): \CommunitySDKs\Spaceship\DTO\SellerHub\Response\CreateSellerHubDomainResponse
    {
        $response = $this->apiClient->request('POST', '/v1/sellerhub/domains', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\SellerHub\CreateSellerHubDomainException("API request failed for createSellerHubDomain", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\SellerHub\Response\CreateSellerHubDomainResponse::fromPsrResponse($response);
    }

    /** Get sold domains */
    public function getSoldDomains(\CommunitySDKs\Spaceship\DTO\SellerHub\Request\GetSoldDomainsRequest $request): \CommunitySDKs\Spaceship\DTO\SellerHub\Response\GetSoldDomainsResponse
    {
        $response = $this->apiClient->request('GET', '/v1/sellerhub/domains/reports/sold', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\SellerHub\GetSoldDomainsException("API request failed for getSoldDomains", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\SellerHub\Response\GetSoldDomainsResponse::fromPsrResponse($response);
    }

    /** Get a specific SellerHub domain */
    public function getSellerHubDomain(\CommunitySDKs\Spaceship\DTO\SellerHub\Request\GetSellerHubDomainRequest $request): \CommunitySDKs\Spaceship\DTO\SellerHub\Response\GetSellerHubDomainResponse
    {
        $response = $this->apiClient->request('GET', '/v1/sellerhub/domains/' . rawurlencode($request->domain) . '', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\SellerHub\GetSellerHubDomainException("API request failed for getSellerHubDomain", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\SellerHub\Response\GetSellerHubDomainResponse::fromPsrResponse($response);
    }

    /** Update a SellerHub domain */
    public function updateSellerHubDomain(\CommunitySDKs\Spaceship\DTO\SellerHub\Request\UpdateSellerHubDomainRequest $request): \CommunitySDKs\Spaceship\DTO\SellerHub\Response\UpdateSellerHubDomainResponse
    {
        $response = $this->apiClient->request('PATCH', '/v1/sellerhub/domains/' . rawurlencode($request->domain) . '', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\SellerHub\UpdateSellerHubDomainException("API request failed for updateSellerHubDomain", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\SellerHub\Response\UpdateSellerHubDomainResponse::fromPsrResponse($response);
    }

    /** Delete a SellerHub domain */
    public function deleteSellerHubDomain(\CommunitySDKs\Spaceship\DTO\SellerHub\Request\DeleteSellerHubDomainRequest $request): \CommunitySDKs\Spaceship\DTO\SellerHub\Response\DeleteSellerHubDomainResponse
    {
        $response = $this->apiClient->request('DELETE', '/v1/sellerhub/domains/' . rawurlencode($request->domain) . '', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\SellerHub\DeleteSellerHubDomainException("API request failed for deleteSellerHubDomain", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\SellerHub\Response\DeleteSellerHubDomainResponse::fromPsrResponse($response);
    }

    /** List SafePay transactions */
    public function getSafePayTransactionList(\CommunitySDKs\Spaceship\DTO\SellerHub\Request\GetSafePayTransactionListRequest $request): \CommunitySDKs\Spaceship\DTO\SellerHub\Response\GetSafePayTransactionListResponse
    {
        $response = $this->apiClient->request('GET', '/v1/sellerhub/safepay-transactions', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\SellerHub\GetSafePayTransactionListException("API request failed for getSafePayTransactionList", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\SellerHub\Response\GetSafePayTransactionListResponse::fromPsrResponse($response);
    }

    /** Create a SafePay transaction */
    public function createSafePayTransaction(\CommunitySDKs\Spaceship\DTO\SellerHub\Request\CreateSafePayTransactionRequest $request): \CommunitySDKs\Spaceship\DTO\SellerHub\Response\CreateSafePayTransactionResponse
    {
        $response = $this->apiClient->request('POST', '/v1/sellerhub/safepay-transactions', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\SellerHub\CreateSafePayTransactionException("API request failed for createSafePayTransaction", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\SellerHub\Response\CreateSafePayTransactionResponse::fromPsrResponse($response);
    }

    /** Get a SafePay transaction */
    public function getSafePayTransaction(\CommunitySDKs\Spaceship\DTO\SellerHub\Request\GetSafePayTransactionRequest $request): \CommunitySDKs\Spaceship\DTO\SellerHub\Response\GetSafePayTransactionResponse
    {
        $response = $this->apiClient->request('GET', '/v1/sellerhub/safepay-transactions/' . rawurlencode($request->transactionId) . '', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\SellerHub\GetSafePayTransactionException("API request failed for getSafePayTransaction", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\SellerHub\Response\GetSafePayTransactionResponse::fromPsrResponse($response);
    }

    /** Get verification records */
    public function getVerificationRecords(\CommunitySDKs\Spaceship\DTO\SellerHub\Request\GetVerificationRecordsRequest $request): \CommunitySDKs\Spaceship\DTO\SellerHub\Response\GetVerificationRecordsResponse
    {
        $response = $this->apiClient->request('GET', '/v1/sellerhub/verification-records', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\SellerHub\GetVerificationRecordsException("API request failed for getVerificationRecords", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\SellerHub\Response\GetVerificationRecordsResponse::fromPsrResponse($response);
    }
}
