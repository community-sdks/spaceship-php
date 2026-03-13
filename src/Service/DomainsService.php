<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Service;

use CommunitySDKs\Spaceship\Http\ApiClient;

final class DomainsService
{
    public function __construct(private readonly ApiClient $apiClient)
    {
    }

    /**
     * Get domain list.
     */
    public function getDomainList(\CommunitySDKs\Spaceship\DTO\Request\GetDomainListRequest $request): \CommunitySDKs\Spaceship\DTO\Response\GetDomainListResponse
    {
        $response = $this->apiClient->request(
            'GET',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\GetDomainListException(
                'API request failed for getDomainList',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\GetDomainListResponse::fromPsrResponse($response);
    }

    /**
     * Check domains availability.
     */
    public function checkDomainsAvailability(\CommunitySDKs\Spaceship\DTO\Request\CheckDomainsAvailabilityRequest $request): \CommunitySDKs\Spaceship\DTO\Response\CheckDomainsAvailabilityResponse
    {
        $response = $this->apiClient->request(
            'POST',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\CheckDomainsAvailabilityException(
                'API request failed for checkDomainsAvailability',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\CheckDomainsAvailabilityResponse::fromPsrResponse($response);
    }

    /**
     * Get domain info.
     */
    public function getDomainInfo(\CommunitySDKs\Spaceship\DTO\Request\GetDomainInfoRequest $request): \CommunitySDKs\Spaceship\DTO\Response\GetDomainInfoResponse
    {
        $response = $this->apiClient->request(
            'GET',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\GetDomainInfoException(
                'API request failed for getDomainInfo',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\GetDomainInfoResponse::fromPsrResponse($response);
    }

    /**
     * Delete the domain.
     */
    public function domainDelete(\CommunitySDKs\Spaceship\DTO\Request\DomainDeleteRequest $request): \CommunitySDKs\Spaceship\DTO\Response\DomainDeleteResponse
    {
        $response = $this->apiClient->request(
            'DELETE',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\DomainDeleteException(
                'API request failed for domainDelete',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\DomainDeleteResponse::fromPsrResponse($response);
    }

    /**
     * Register the domain.
     */
    public function domainCreate(\CommunitySDKs\Spaceship\DTO\Request\DomainCreateRequest $request): \CommunitySDKs\Spaceship\DTO\Response\DomainCreateResponse
    {
        $response = $this->apiClient->request(
            'POST',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\DomainCreateException(
                'API request failed for domainCreate',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\DomainCreateResponse::fromPsrResponse($response);
    }

    /**
     * Update the domain autorenewal state.
     */
    public function updateAutorenewal(\CommunitySDKs\Spaceship\DTO\Request\UpdateAutorenewalRequest $request): \CommunitySDKs\Spaceship\DTO\Response\UpdateAutorenewalResponse
    {
        $response = $this->apiClient->request(
            'PUT',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\UpdateAutorenewalException(
                'API request failed for updateAutorenewal',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\UpdateAutorenewalResponse::fromPsrResponse($response);
    }

    /**
     * Check single domain availability.
     */
    public function checkSingleDomainAvailability(\CommunitySDKs\Spaceship\DTO\Request\CheckSingleDomainAvailabilityRequest $request): \CommunitySDKs\Spaceship\DTO\Response\CheckSingleDomainAvailabilityResponse
    {
        $response = $this->apiClient->request(
            'GET',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\CheckSingleDomainAvailabilityException(
                'API request failed for checkSingleDomainAvailability',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\CheckSingleDomainAvailabilityResponse::fromPsrResponse($response);
    }

    /**
     * Update domain contacts.
     */
    public function setDomainContacts(\CommunitySDKs\Spaceship\DTO\Request\SetDomainContactsRequest $request): \CommunitySDKs\Spaceship\DTO\Response\SetDomainContactsResponse
    {
        $response = $this->apiClient->request(
            'PUT',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\SetDomainContactsException(
                'API request failed for setDomainContacts',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\SetDomainContactsResponse::fromPsrResponse($response);
    }

    /**
     * Update domain nameservers.
     */
    public function setDomainNameservers(\CommunitySDKs\Spaceship\DTO\Request\SetDomainNameserversRequest $request): \CommunitySDKs\Spaceship\DTO\Response\SetDomainNameserversResponse
    {
        $response = $this->apiClient->request(
            'PUT',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\SetDomainNameserversException(
                'API request failed for setDomainNameservers',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\SetDomainNameserversResponse::fromPsrResponse($response);
    }

    /**
     * Get personal nameservers on a domain.
     */
    public function getDomainPersonalNameservers(\CommunitySDKs\Spaceship\DTO\Request\GetDomainPersonalNameserversRequest $request): \CommunitySDKs\Spaceship\DTO\Response\GetDomainPersonalNameserversResponse
    {
        $response = $this->apiClient->request(
            'GET',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\GetDomainPersonalNameserversException(
                'API request failed for getDomainPersonalNameservers',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\GetDomainPersonalNameserversResponse::fromPsrResponse($response);
    }

    /**
     * Get personal nameservers host configuration.
     */
    public function getDomainPersonalNameserverHostInfo(\CommunitySDKs\Spaceship\DTO\Request\GetDomainPersonalNameserverHostInfoRequest $request): \CommunitySDKs\Spaceship\DTO\Response\GetDomainPersonalNameserverHostInfoResponse
    {
        $response = $this->apiClient->request(
            'GET',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\GetDomainPersonalNameserverHostInfoException(
                'API request failed for getDomainPersonalNameserverHostInfo',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\GetDomainPersonalNameserverHostInfoResponse::fromPsrResponse($response);
    }

    /**
     * Update personal nameservers host configuration.
     */
    public function updateDomainPersonalNameserverHostInfo(\CommunitySDKs\Spaceship\DTO\Request\UpdateDomainPersonalNameserverHostInfoRequest $request): \CommunitySDKs\Spaceship\DTO\Response\UpdateDomainPersonalNameserverHostInfoResponse
    {
        $response = $this->apiClient->request(
            'PUT',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\UpdateDomainPersonalNameserverHostInfoException(
                'API request failed for updateDomainPersonalNameserverHostInfo',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\UpdateDomainPersonalNameserverHostInfoResponse::fromPsrResponse($response);
    }

    /**
     * Delete personal nameservers host configuration.
     */
    public function deleteDomainPersonalNameserverHostInfo(\CommunitySDKs\Spaceship\DTO\Request\DeleteDomainPersonalNameserverHostInfoRequest $request): \CommunitySDKs\Spaceship\DTO\Response\DeleteDomainPersonalNameserverHostInfoResponse
    {
        $response = $this->apiClient->request(
            'DELETE',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\DeleteDomainPersonalNameserverHostInfoException(
                'API request failed for deleteDomainPersonalNameserverHostInfo',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\DeleteDomainPersonalNameserverHostInfoResponse::fromPsrResponse($response);
    }

    /**
     * Update domain email protection preference.
     */
    public function updateDomainEmailProtectionPreference(\CommunitySDKs\Spaceship\DTO\Request\UpdateDomainEmailProtectionPreferenceRequest $request): \CommunitySDKs\Spaceship\DTO\Response\UpdateDomainEmailProtectionPreferenceResponse
    {
        $response = $this->apiClient->request(
            'PUT',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\UpdateDomainEmailProtectionPreferenceException(
                'API request failed for updateDomainEmailProtectionPreference',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\UpdateDomainEmailProtectionPreferenceResponse::fromPsrResponse($response);
    }

    /**
     * Update domain privacy preference.
     */
    public function updateDomainPrivacyPreference(\CommunitySDKs\Spaceship\DTO\Request\UpdateDomainPrivacyPreferenceRequest $request): \CommunitySDKs\Spaceship\DTO\Response\UpdateDomainPrivacyPreferenceResponse
    {
        $response = $this->apiClient->request(
            'PUT',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\UpdateDomainPrivacyPreferenceException(
                'API request failed for updateDomainPrivacyPreference',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\UpdateDomainPrivacyPreferenceResponse::fromPsrResponse($response);
    }

    /**
     * Requests domain renewal.
     */
    public function domainRenew(\CommunitySDKs\Spaceship\DTO\Request\DomainRenewRequest $request): \CommunitySDKs\Spaceship\DTO\Response\DomainRenewResponse
    {
        $response = $this->apiClient->request(
            'POST',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\DomainRenewException(
                'API request failed for domainRenew',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\DomainRenewResponse::fromPsrResponse($response);
    }

    /**
     * Requests domain restoration.
     */
    public function domainRestore(\CommunitySDKs\Spaceship\DTO\Request\DomainRestoreRequest $request): \CommunitySDKs\Spaceship\DTO\Response\DomainRestoreResponse
    {
        $response = $this->apiClient->request(
            'POST',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\DomainRestoreException(
                'API request failed for domainRestore',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\DomainRestoreResponse::fromPsrResponse($response);
    }

    /**
     * Requests domain transfer.
     */
    public function transferRequest(\CommunitySDKs\Spaceship\DTO\Request\TransferRequestRequest $request): \CommunitySDKs\Spaceship\DTO\Response\TransferRequestResponse
    {
        $response = $this->apiClient->request(
            'POST',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\TransferRequestException(
                'API request failed for transferRequest',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\TransferRequestResponse::fromPsrResponse($response);
    }

    /**
     * Get the details of the domain transfer.
     */
    public function getTransferInfo(\CommunitySDKs\Spaceship\DTO\Request\GetTransferInfoRequest $request): \CommunitySDKs\Spaceship\DTO\Response\GetTransferInfoResponse
    {
        $response = $this->apiClient->request(
            'GET',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\GetTransferInfoException(
                'API request failed for getTransferInfo',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\GetTransferInfoResponse::fromPsrResponse($response);
    }

    /**
     * Get domain auth code.
     */
    public function getAuthCode(\CommunitySDKs\Spaceship\DTO\Request\GetAuthCodeRequest $request): \CommunitySDKs\Spaceship\DTO\Response\GetAuthCodeResponse
    {
        $response = $this->apiClient->request(
            'GET',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\GetAuthCodeException(
                'API request failed for getAuthCode',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\GetAuthCodeResponse::fromPsrResponse($response);
    }

    /**
     * Update domain transfer lock.
     */
    public function updateTransferLock(\CommunitySDKs\Spaceship\DTO\Request\UpdateTransferLockRequest $request): \CommunitySDKs\Spaceship\DTO\Response\UpdateTransferLockResponse
    {
        $response = $this->apiClient->request(
            'PUT',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\UpdateTransferLockException(
                'API request failed for updateTransferLock',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\UpdateTransferLockResponse::fromPsrResponse($response);
    }

}
