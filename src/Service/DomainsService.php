<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Service;

final class DomainsService
{
    public function __construct(private readonly \CommunitySDKs\Spaceship\Http\ApiClient $apiClient) {}

    /** Get domain list */
    public function getDomainList(\CommunitySDKs\Spaceship\DTO\Domains\Request\GetDomainListRequest $request): \CommunitySDKs\Spaceship\DTO\Domains\Response\GetDomainListResponse
    {
        $response = $this->apiClient->request('GET', '/v1/domains', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Domains\GetDomainListException("API request failed for getDomainList", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Domains\Response\GetDomainListResponse::fromPsrResponse($response);
    }

    /** Check domains availability */
    public function checkDomainsAvailability(\CommunitySDKs\Spaceship\DTO\Domains\Request\CheckDomainsAvailabilityRequest $request): \CommunitySDKs\Spaceship\DTO\Domains\Response\CheckDomainsAvailabilityResponse
    {
        $response = $this->apiClient->request('POST', '/v1/domains/available', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Domains\CheckDomainsAvailabilityException("API request failed for checkDomainsAvailability", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Domains\Response\CheckDomainsAvailabilityResponse::fromPsrResponse($response);
    }

    /** Get domain info */
    public function getDomainInfo(\CommunitySDKs\Spaceship\DTO\Domains\Request\GetDomainInfoRequest $request): \CommunitySDKs\Spaceship\DTO\Domains\Response\GetDomainInfoResponse
    {
        $response = $this->apiClient->request('GET', '/v1/domains/' . rawurlencode($request->domain) . '', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Domains\GetDomainInfoException("API request failed for getDomainInfo", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Domains\Response\GetDomainInfoResponse::fromPsrResponse($response);
    }

    /** Delete the domain */
    public function domainDelete(\CommunitySDKs\Spaceship\DTO\Domains\Request\DomainDeleteRequest $request): \CommunitySDKs\Spaceship\DTO\Domains\Response\DomainDeleteResponse
    {
        $response = $this->apiClient->request('DELETE', '/v1/domains/' . rawurlencode($request->domain) . '', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Domains\DomainDeleteException("API request failed for domainDelete", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Domains\Response\DomainDeleteResponse::fromPsrResponse($response);
    }

    /** Register the domain */
    public function domainCreate(\CommunitySDKs\Spaceship\DTO\Domains\Request\DomainCreateRequest $request): \CommunitySDKs\Spaceship\DTO\Domains\Response\DomainCreateResponse
    {
        $response = $this->apiClient->request('POST', '/v1/domains/' . rawurlencode($request->domain) . '', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Domains\DomainCreateException("API request failed for domainCreate", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Domains\Response\DomainCreateResponse::fromPsrResponse($response);
    }

    /** Update the domain autorenewal state */
    public function updateAutorenewal(\CommunitySDKs\Spaceship\DTO\Domains\Request\UpdateAutorenewalRequest $request): \CommunitySDKs\Spaceship\DTO\Domains\Response\UpdateAutorenewalResponse
    {
        $response = $this->apiClient->request('PUT', '/v1/domains/' . rawurlencode($request->domain) . '/autorenew', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Domains\UpdateAutorenewalException("API request failed for updateAutorenewal", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Domains\Response\UpdateAutorenewalResponse::fromPsrResponse($response);
    }

    /** Check single domain availability */
    public function checkSingleDomainAvailability(\CommunitySDKs\Spaceship\DTO\Domains\Request\CheckSingleDomainAvailabilityRequest $request): \CommunitySDKs\Spaceship\DTO\Domains\Response\CheckSingleDomainAvailabilityResponse
    {
        $response = $this->apiClient->request('GET', '/v1/domains/' . rawurlencode($request->domain) . '/available', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Domains\CheckSingleDomainAvailabilityException("API request failed for checkSingleDomainAvailability", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Domains\Response\CheckSingleDomainAvailabilityResponse::fromPsrResponse($response);
    }

    /** Update domain contacts */
    public function setDomainContacts(\CommunitySDKs\Spaceship\DTO\Domains\Request\SetDomainContactsRequest $request): \CommunitySDKs\Spaceship\DTO\Domains\Response\SetDomainContactsResponse
    {
        $response = $this->apiClient->request('PUT', '/v1/domains/' . rawurlencode($request->domain) . '/contacts', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Domains\SetDomainContactsException("API request failed for setDomainContacts", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Domains\Response\SetDomainContactsResponse::fromPsrResponse($response);
    }

    /** Update domain nameservers */
    public function setDomainNameservers(\CommunitySDKs\Spaceship\DTO\Domains\Request\SetDomainNameserversRequest $request): \CommunitySDKs\Spaceship\DTO\Domains\Response\SetDomainNameserversResponse
    {
        $response = $this->apiClient->request('PUT', '/v1/domains/' . rawurlencode($request->domain) . '/nameservers', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Domains\SetDomainNameserversException("API request failed for setDomainNameservers", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Domains\Response\SetDomainNameserversResponse::fromPsrResponse($response);
    }

    /** Get personal nameservers on a domain */
    public function getDomainPersonalNameservers(\CommunitySDKs\Spaceship\DTO\Domains\Request\GetDomainPersonalNameserversRequest $request): \CommunitySDKs\Spaceship\DTO\Domains\Response\GetDomainPersonalNameserversResponse
    {
        $response = $this->apiClient->request('GET', '/v1/domains/' . rawurlencode($request->domain) . '/personal-nameservers', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Domains\GetDomainPersonalNameserversException("API request failed for getDomainPersonalNameservers", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Domains\Response\GetDomainPersonalNameserversResponse::fromPsrResponse($response);
    }

    /** Get personal nameservers host configuration */
    public function getDomainPersonalNameserverHostInfo(\CommunitySDKs\Spaceship\DTO\Domains\Request\GetDomainPersonalNameserverHostInfoRequest $request): \CommunitySDKs\Spaceship\DTO\Domains\Response\GetDomainPersonalNameserverHostInfoResponse
    {
        $response = $this->apiClient->request('GET', '/v1/domains/' . rawurlencode($request->domain) . '/personal-nameservers/' . rawurlencode($request->currentHost) . '', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Domains\GetDomainPersonalNameserverHostInfoException("API request failed for getDomainPersonalNameserverHostInfo", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Domains\Response\GetDomainPersonalNameserverHostInfoResponse::fromPsrResponse($response);
    }

    /** Update personal nameservers host configuration */
    public function updateDomainPersonalNameserverHostInfo(\CommunitySDKs\Spaceship\DTO\Domains\Request\UpdateDomainPersonalNameserverHostInfoRequest $request): \CommunitySDKs\Spaceship\DTO\Domains\Response\UpdateDomainPersonalNameserverHostInfoResponse
    {
        $response = $this->apiClient->request('PUT', '/v1/domains/' . rawurlencode($request->domain) . '/personal-nameservers/' . rawurlencode($request->currentHost) . '', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Domains\UpdateDomainPersonalNameserverHostInfoException("API request failed for updateDomainPersonalNameserverHostInfo", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Domains\Response\UpdateDomainPersonalNameserverHostInfoResponse::fromPsrResponse($response);
    }

    /** Delete personal nameservers host configuration */
    public function deleteDomainPersonalNameserverHostInfo(\CommunitySDKs\Spaceship\DTO\Domains\Request\DeleteDomainPersonalNameserverHostInfoRequest $request): \CommunitySDKs\Spaceship\DTO\Domains\Response\DeleteDomainPersonalNameserverHostInfoResponse
    {
        $response = $this->apiClient->request('DELETE', '/v1/domains/' . rawurlencode($request->domain) . '/personal-nameservers/' . rawurlencode($request->currentHost) . '', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Domains\DeleteDomainPersonalNameserverHostInfoException("API request failed for deleteDomainPersonalNameserverHostInfo", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Domains\Response\DeleteDomainPersonalNameserverHostInfoResponse::fromPsrResponse($response);
    }

    /** Update domain email protection preference */
    public function updateDomainEmailProtectionPreference(\CommunitySDKs\Spaceship\DTO\Domains\Request\UpdateDomainEmailProtectionPreferenceRequest $request): \CommunitySDKs\Spaceship\DTO\Domains\Response\UpdateDomainEmailProtectionPreferenceResponse
    {
        $response = $this->apiClient->request('PUT', '/v1/domains/' . rawurlencode($request->domain) . '/privacy/email-protection-preference', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Domains\UpdateDomainEmailProtectionPreferenceException("API request failed for updateDomainEmailProtectionPreference", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Domains\Response\UpdateDomainEmailProtectionPreferenceResponse::fromPsrResponse($response);
    }

    /** Update domain privacy preference */
    public function updateDomainPrivacyPreference(\CommunitySDKs\Spaceship\DTO\Domains\Request\UpdateDomainPrivacyPreferenceRequest $request): \CommunitySDKs\Spaceship\DTO\Domains\Response\UpdateDomainPrivacyPreferenceResponse
    {
        $response = $this->apiClient->request('PUT', '/v1/domains/' . rawurlencode($request->domain) . '/privacy/preference', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Domains\UpdateDomainPrivacyPreferenceException("API request failed for updateDomainPrivacyPreference", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Domains\Response\UpdateDomainPrivacyPreferenceResponse::fromPsrResponse($response);
    }

    /** Requests domain renewal */
    public function domainRenew(\CommunitySDKs\Spaceship\DTO\Domains\Request\DomainRenewRequest $request): \CommunitySDKs\Spaceship\DTO\Domains\Response\DomainRenewResponse
    {
        $response = $this->apiClient->request('POST', '/v1/domains/' . rawurlencode($request->domain) . '/renew', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Domains\DomainRenewException("API request failed for domainRenew", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Domains\Response\DomainRenewResponse::fromPsrResponse($response);
    }

    /** Requests domain restoration */
    public function domainRestore(\CommunitySDKs\Spaceship\DTO\Domains\Request\DomainRestoreRequest $request): \CommunitySDKs\Spaceship\DTO\Domains\Response\DomainRestoreResponse
    {
        $response = $this->apiClient->request('POST', '/v1/domains/' . rawurlencode($request->domain) . '/restore', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Domains\DomainRestoreException("API request failed for domainRestore", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Domains\Response\DomainRestoreResponse::fromPsrResponse($response);
    }

    /** Requests domain transfer */
    public function transferRequest(\CommunitySDKs\Spaceship\DTO\Domains\Request\TransferRequestRequest $request): \CommunitySDKs\Spaceship\DTO\Domains\Response\TransferRequestResponse
    {
        $response = $this->apiClient->request('POST', '/v1/domains/' . rawurlencode($request->domain) . '/transfer', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Domains\TransferRequestException("API request failed for transferRequest", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Domains\Response\TransferRequestResponse::fromPsrResponse($response);
    }

    /** Get the details of the domain transfer */
    public function getTransferInfo(\CommunitySDKs\Spaceship\DTO\Domains\Request\GetTransferInfoRequest $request): \CommunitySDKs\Spaceship\DTO\Domains\Response\GetTransferInfoResponse
    {
        $response = $this->apiClient->request('GET', '/v1/domains/' . rawurlencode($request->domain) . '/transfer', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Domains\GetTransferInfoException("API request failed for getTransferInfo", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Domains\Response\GetTransferInfoResponse::fromPsrResponse($response);
    }

    /** Get domain auth code */
    public function getAuthCode(\CommunitySDKs\Spaceship\DTO\Domains\Request\GetAuthCodeRequest $request): \CommunitySDKs\Spaceship\DTO\Domains\Response\GetAuthCodeResponse
    {
        $response = $this->apiClient->request('GET', '/v1/domains/' . rawurlencode($request->domain) . '/transfer/auth-code', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Domains\GetAuthCodeException("API request failed for getAuthCode", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Domains\Response\GetAuthCodeResponse::fromPsrResponse($response);
    }

    /** Update domain transfer lock */
    public function updateTransferLock(\CommunitySDKs\Spaceship\DTO\Domains\Request\UpdateTransferLockRequest $request): \CommunitySDKs\Spaceship\DTO\Domains\Response\UpdateTransferLockResponse
    {
        $response = $this->apiClient->request('PUT', '/v1/domains/' . rawurlencode($request->domain) . '/transfer/lock', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Domains\UpdateTransferLockException("API request failed for updateTransferLock", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Domains\Response\UpdateTransferLockResponse::fromPsrResponse($response);
    }
}
