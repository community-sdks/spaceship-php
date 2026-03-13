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
    public function getDomainList(\CommunitySDKs\Spaceship\DTO\Request\GetdomainlistRequest $request): \CommunitySDKs\Spaceship\DTO\Response\GetdomainlistResponse
    {
        $response = $this->apiClient->request(
            'GET',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\GetdomainlistException(
                'API request failed for getDomainList',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\GetdomainlistResponse::fromPsrResponse($response);
    }

    /**
     * Check domains availability.
     */
    public function checkDomainsAvailability(\CommunitySDKs\Spaceship\DTO\Request\CheckdomainsavailabilityRequest $request): \CommunitySDKs\Spaceship\DTO\Response\CheckdomainsavailabilityResponse
    {
        $response = $this->apiClient->request(
            'POST',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\CheckdomainsavailabilityException(
                'API request failed for checkDomainsAvailability',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\CheckdomainsavailabilityResponse::fromPsrResponse($response);
    }

    /**
     * Get domain info.
     */
    public function getDomainInfo(\CommunitySDKs\Spaceship\DTO\Request\GetdomaininfoRequest $request): \CommunitySDKs\Spaceship\DTO\Response\GetdomaininfoResponse
    {
        $response = $this->apiClient->request(
            'GET',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\GetdomaininfoException(
                'API request failed for getDomainInfo',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\GetdomaininfoResponse::fromPsrResponse($response);
    }

    /**
     * Delete the domain.
     */
    public function domainDelete(\CommunitySDKs\Spaceship\DTO\Request\DomaindeleteRequest $request): \CommunitySDKs\Spaceship\DTO\Response\DomaindeleteResponse
    {
        $response = $this->apiClient->request(
            'DELETE',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\DomaindeleteException(
                'API request failed for domainDelete',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\DomaindeleteResponse::fromPsrResponse($response);
    }

    /**
     * Register the domain.
     */
    public function domainCreate(\CommunitySDKs\Spaceship\DTO\Request\DomaincreateRequest $request): \CommunitySDKs\Spaceship\DTO\Response\DomaincreateResponse
    {
        $response = $this->apiClient->request(
            'POST',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\DomaincreateException(
                'API request failed for domainCreate',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\DomaincreateResponse::fromPsrResponse($response);
    }

    /**
     * Update the domain autorenewal state.
     */
    public function updateAutorenewal(\CommunitySDKs\Spaceship\DTO\Request\UpdateautorenewalRequest $request): \CommunitySDKs\Spaceship\DTO\Response\UpdateautorenewalResponse
    {
        $response = $this->apiClient->request(
            'PUT',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\UpdateautorenewalException(
                'API request failed for updateAutorenewal',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\UpdateautorenewalResponse::fromPsrResponse($response);
    }

    /**
     * Check single domain availability.
     */
    public function checkSingleDomainAvailability(\CommunitySDKs\Spaceship\DTO\Request\ChecksingledomainavailabilityRequest $request): \CommunitySDKs\Spaceship\DTO\Response\ChecksingledomainavailabilityResponse
    {
        $response = $this->apiClient->request(
            'GET',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\ChecksingledomainavailabilityException(
                'API request failed for checkSingleDomainAvailability',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\ChecksingledomainavailabilityResponse::fromPsrResponse($response);
    }

    /**
     * Update domain contacts.
     */
    public function setDomainContacts(\CommunitySDKs\Spaceship\DTO\Request\SetdomaincontactsRequest $request): \CommunitySDKs\Spaceship\DTO\Response\SetdomaincontactsResponse
    {
        $response = $this->apiClient->request(
            'PUT',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\SetdomaincontactsException(
                'API request failed for setDomainContacts',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\SetdomaincontactsResponse::fromPsrResponse($response);
    }

    /**
     * Update domain nameservers.
     */
    public function setDomainNameservers(\CommunitySDKs\Spaceship\DTO\Request\SetdomainnameserversRequest $request): \CommunitySDKs\Spaceship\DTO\Response\SetdomainnameserversResponse
    {
        $response = $this->apiClient->request(
            'PUT',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\SetdomainnameserversException(
                'API request failed for setDomainNameservers',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\SetdomainnameserversResponse::fromPsrResponse($response);
    }

    /**
     * Get personal nameservers on a domain.
     */
    public function getDomainPersonalNameservers(\CommunitySDKs\Spaceship\DTO\Request\GetdomainpersonalnameserversRequest $request): \CommunitySDKs\Spaceship\DTO\Response\GetdomainpersonalnameserversResponse
    {
        $response = $this->apiClient->request(
            'GET',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\GetdomainpersonalnameserversException(
                'API request failed for getDomainPersonalNameservers',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\GetdomainpersonalnameserversResponse::fromPsrResponse($response);
    }

    /**
     * Get personal nameservers host configuration.
     */
    public function getDomainPersonalNameserverHostInfo(\CommunitySDKs\Spaceship\DTO\Request\GetdomainpersonalnameserverhostinfoRequest $request): \CommunitySDKs\Spaceship\DTO\Response\GetdomainpersonalnameserverhostinfoResponse
    {
        $response = $this->apiClient->request(
            'GET',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\GetdomainpersonalnameserverhostinfoException(
                'API request failed for getDomainPersonalNameserverHostInfo',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\GetdomainpersonalnameserverhostinfoResponse::fromPsrResponse($response);
    }

    /**
     * Update personal nameservers host configuration.
     */
    public function updateDomainPersonalNameserverHostInfo(\CommunitySDKs\Spaceship\DTO\Request\UpdatedomainpersonalnameserverhostinfoRequest $request): \CommunitySDKs\Spaceship\DTO\Response\UpdatedomainpersonalnameserverhostinfoResponse
    {
        $response = $this->apiClient->request(
            'PUT',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\UpdatedomainpersonalnameserverhostinfoException(
                'API request failed for updateDomainPersonalNameserverHostInfo',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\UpdatedomainpersonalnameserverhostinfoResponse::fromPsrResponse($response);
    }

    /**
     * Delete personal nameservers host configuration.
     */
    public function deleteDomainPersonalNameserverHostInfo(\CommunitySDKs\Spaceship\DTO\Request\DeletedomainpersonalnameserverhostinfoRequest $request): \CommunitySDKs\Spaceship\DTO\Response\DeletedomainpersonalnameserverhostinfoResponse
    {
        $response = $this->apiClient->request(
            'DELETE',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\DeletedomainpersonalnameserverhostinfoException(
                'API request failed for deleteDomainPersonalNameserverHostInfo',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\DeletedomainpersonalnameserverhostinfoResponse::fromPsrResponse($response);
    }

    /**
     * Update domain email protection preference.
     */
    public function updateDomainEmailProtectionPreference(\CommunitySDKs\Spaceship\DTO\Request\UpdatedomainemailprotectionpreferenceRequest $request): \CommunitySDKs\Spaceship\DTO\Response\UpdatedomainemailprotectionpreferenceResponse
    {
        $response = $this->apiClient->request(
            'PUT',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\UpdatedomainemailprotectionpreferenceException(
                'API request failed for updateDomainEmailProtectionPreference',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\UpdatedomainemailprotectionpreferenceResponse::fromPsrResponse($response);
    }

    /**
     * Update domain privacy preference.
     */
    public function updateDomainPrivacyPreference(\CommunitySDKs\Spaceship\DTO\Request\UpdatedomainprivacypreferenceRequest $request): \CommunitySDKs\Spaceship\DTO\Response\UpdatedomainprivacypreferenceResponse
    {
        $response = $this->apiClient->request(
            'PUT',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\UpdatedomainprivacypreferenceException(
                'API request failed for updateDomainPrivacyPreference',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\UpdatedomainprivacypreferenceResponse::fromPsrResponse($response);
    }

    /**
     * Requests domain renewal.
     */
    public function domainRenew(\CommunitySDKs\Spaceship\DTO\Request\DomainrenewRequest $request): \CommunitySDKs\Spaceship\DTO\Response\DomainrenewResponse
    {
        $response = $this->apiClient->request(
            'POST',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\DomainrenewException(
                'API request failed for domainRenew',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\DomainrenewResponse::fromPsrResponse($response);
    }

    /**
     * Requests domain restoration.
     */
    public function domainRestore(\CommunitySDKs\Spaceship\DTO\Request\DomainrestoreRequest $request): \CommunitySDKs\Spaceship\DTO\Response\DomainrestoreResponse
    {
        $response = $this->apiClient->request(
            'POST',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\DomainrestoreException(
                'API request failed for domainRestore',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\DomainrestoreResponse::fromPsrResponse($response);
    }

    /**
     * Requests domain transfer.
     */
    public function transferRequest(\CommunitySDKs\Spaceship\DTO\Request\TransferrequestRequest $request): \CommunitySDKs\Spaceship\DTO\Response\TransferrequestResponse
    {
        $response = $this->apiClient->request(
            'POST',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\TransferrequestException(
                'API request failed for transferRequest',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\TransferrequestResponse::fromPsrResponse($response);
    }

    /**
     * Get the details of the domain transfer.
     */
    public function getTransferInfo(\CommunitySDKs\Spaceship\DTO\Request\GettransferinfoRequest $request): \CommunitySDKs\Spaceship\DTO\Response\GettransferinfoResponse
    {
        $response = $this->apiClient->request(
            'GET',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\GettransferinfoException(
                'API request failed for getTransferInfo',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\GettransferinfoResponse::fromPsrResponse($response);
    }

    /**
     * Get domain auth code.
     */
    public function getAuthCode(\CommunitySDKs\Spaceship\DTO\Request\GetauthcodeRequest $request): \CommunitySDKs\Spaceship\DTO\Response\GetauthcodeResponse
    {
        $response = $this->apiClient->request(
            'GET',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\GetauthcodeException(
                'API request failed for getAuthCode',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\GetauthcodeResponse::fromPsrResponse($response);
    }

    /**
     * Update domain transfer lock.
     */
    public function updateTransferLock(\CommunitySDKs\Spaceship\DTO\Request\UpdatetransferlockRequest $request): \CommunitySDKs\Spaceship\DTO\Response\UpdatetransferlockResponse
    {
        $response = $this->apiClient->request(
            'PUT',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\UpdatetransferlockException(
                'API request failed for updateTransferLock',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\UpdatetransferlockResponse::fromPsrResponse($response);
    }

}
