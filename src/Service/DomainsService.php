<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Service;

use CommunitySDKs\Spaceship\DTO\Domains\Request\CheckDomainsAvailabilityRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\CheckSingleDomainAvailabilityRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\DeleteDomainPersonalNameserverHostInfoRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\DomainCreateRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\DomainDeleteRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\DomainRenewRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\DomainRestoreRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\GetAuthCodeRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\GetDomainInfoRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\GetDomainListRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\GetDomainPersonalNameserverHostInfoRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\GetDomainPersonalNameserversRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\GetTransferInfoRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\SetDomainContactsRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\SetDomainNameserversRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\TransferRequestRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\UpdateAutorenewalRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\UpdateDomainEmailProtectionPreferenceRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\UpdateDomainPersonalNameserverHostInfoRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\UpdateDomainPrivacyPreferenceRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\UpdateTransferLockRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Response\CheckDomainsAvailabilityResponse;
use CommunitySDKs\Spaceship\DTO\Domains\Response\CheckSingleDomainAvailabilityResponse;
use CommunitySDKs\Spaceship\DTO\Domains\Response\DeleteDomainPersonalNameserverHostInfoResponse;
use CommunitySDKs\Spaceship\DTO\Domains\Response\DomainCreateResponse;
use CommunitySDKs\Spaceship\DTO\Domains\Response\DomainDeleteResponse;
use CommunitySDKs\Spaceship\DTO\Domains\Response\DomainRenewResponse;
use CommunitySDKs\Spaceship\DTO\Domains\Response\DomainRestoreResponse;
use CommunitySDKs\Spaceship\DTO\Domains\Response\GetAuthCodeResponse;
use CommunitySDKs\Spaceship\DTO\Domains\Response\GetDomainInfoResponse;
use CommunitySDKs\Spaceship\DTO\Domains\Response\GetDomainListResponse;
use CommunitySDKs\Spaceship\DTO\Domains\Response\GetDomainPersonalNameserverHostInfoResponse;
use CommunitySDKs\Spaceship\DTO\Domains\Response\GetDomainPersonalNameserversResponse;
use CommunitySDKs\Spaceship\DTO\Domains\Response\GetTransferInfoResponse;
use CommunitySDKs\Spaceship\DTO\Domains\Response\SetDomainContactsResponse;
use CommunitySDKs\Spaceship\DTO\Domains\Response\SetDomainNameserversResponse;
use CommunitySDKs\Spaceship\DTO\Domains\Response\TransferRequestResponse;
use CommunitySDKs\Spaceship\DTO\Domains\Response\UpdateAutorenewalResponse;
use CommunitySDKs\Spaceship\DTO\Domains\Response\UpdateDomainEmailProtectionPreferenceResponse;
use CommunitySDKs\Spaceship\DTO\Domains\Response\UpdateDomainPersonalNameserverHostInfoResponse;
use CommunitySDKs\Spaceship\DTO\Domains\Response\UpdateDomainPrivacyPreferenceResponse;
use CommunitySDKs\Spaceship\DTO\Domains\Response\UpdateTransferLockResponse;
use CommunitySDKs\Spaceship\Exception\Domains\CheckDomainsAvailabilityException;
use CommunitySDKs\Spaceship\Exception\Domains\CheckSingleDomainAvailabilityException;
use CommunitySDKs\Spaceship\Exception\Domains\DeleteDomainPersonalNameserverHostInfoException;
use CommunitySDKs\Spaceship\Exception\Domains\DomainCreateException;
use CommunitySDKs\Spaceship\Exception\Domains\DomainDeleteException;
use CommunitySDKs\Spaceship\Exception\Domains\DomainRenewException;
use CommunitySDKs\Spaceship\Exception\Domains\DomainRestoreException;
use CommunitySDKs\Spaceship\Exception\Domains\GetAuthCodeException;
use CommunitySDKs\Spaceship\Exception\Domains\GetDomainInfoException;
use CommunitySDKs\Spaceship\Exception\Domains\GetDomainListException;
use CommunitySDKs\Spaceship\Exception\Domains\GetDomainPersonalNameserverHostInfoException;
use CommunitySDKs\Spaceship\Exception\Domains\GetDomainPersonalNameserversException;
use CommunitySDKs\Spaceship\Exception\Domains\GetTransferInfoException;
use CommunitySDKs\Spaceship\Exception\Domains\SetDomainContactsException;
use CommunitySDKs\Spaceship\Exception\Domains\SetDomainNameserversException;
use CommunitySDKs\Spaceship\Exception\Domains\TransferRequestException;
use CommunitySDKs\Spaceship\Exception\Domains\UpdateAutorenewalException;
use CommunitySDKs\Spaceship\Exception\Domains\UpdateDomainEmailProtectionPreferenceException;
use CommunitySDKs\Spaceship\Exception\Domains\UpdateDomainPersonalNameserverHostInfoException;
use CommunitySDKs\Spaceship\Exception\Domains\UpdateDomainPrivacyPreferenceException;
use CommunitySDKs\Spaceship\Exception\Domains\UpdateTransferLockException;
use CommunitySDKs\Spaceship\Http\ApiClient;

final class DomainsService
{
    public function __construct(private readonly ApiClient $apiClient)
    {
    }

    /**
     * Get domain list.
     */
    public function getDomainList(GetDomainListRequest $request): GetDomainListResponse
    {
        $path = '/v1/domains';

        $response = $this->apiClient->request(
            'GET',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new GetDomainListException(
                'API request failed for getDomainList',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return GetDomainListResponse::fromPsrResponse($response);
    }

    /**
     * Check domains availability.
     */
    public function checkDomainsAvailability(CheckDomainsAvailabilityRequest $request): CheckDomainsAvailabilityResponse
    {
        $path = '/v1/domains/available';

        $response = $this->apiClient->request(
            'POST',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new CheckDomainsAvailabilityException(
                'API request failed for checkDomainsAvailability',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return CheckDomainsAvailabilityResponse::fromPsrResponse($response);
    }

    /**
     * Get domain info.
     */
    public function getDomainInfo(GetDomainInfoRequest $request): GetDomainInfoResponse
    {
        $path = '/v1/domains/' . $request->domain;

        $response = $this->apiClient->request(
            'GET',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new GetDomainInfoException(
                'API request failed for getDomainInfo',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return GetDomainInfoResponse::fromPsrResponse($response);
    }

    /**
     * Delete the domain.
     */
    public function domainDelete(DomainDeleteRequest $request): DomainDeleteResponse
    {
        $path = '/v1/domains/' . $request->domain;

        $response = $this->apiClient->request(
            'DELETE',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new DomainDeleteException(
                'API request failed for domainDelete',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return DomainDeleteResponse::fromPsrResponse($response);
    }

    /**
     * Register the domain.
     */
    public function domainCreate(DomainCreateRequest $request): DomainCreateResponse
    {
        $path = '/v1/domains/' . $request->domain;

        $response = $this->apiClient->request(
            'POST',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new DomainCreateException(
                'API request failed for domainCreate',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return DomainCreateResponse::fromPsrResponse($response);
    }

    /**
     * Update the domain autorenewal state.
     */
    public function updateAutorenewal(UpdateAutorenewalRequest $request): UpdateAutorenewalResponse
    {
        $path = '/v1/domains/' . $request->domain . '/autorenew';

        $response = $this->apiClient->request(
            'PUT',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new UpdateAutorenewalException(
                'API request failed for updateAutorenewal',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return UpdateAutorenewalResponse::fromPsrResponse($response);
    }

    /**
     * Check single domain availability.
     */
    public function checkSingleDomainAvailability(CheckSingleDomainAvailabilityRequest $request): CheckSingleDomainAvailabilityResponse
    {
        $path = '/v1/domains/' . $request->domain . '/available';

        $response = $this->apiClient->request(
            'GET',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new CheckSingleDomainAvailabilityException(
                'API request failed for checkSingleDomainAvailability',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return CheckSingleDomainAvailabilityResponse::fromPsrResponse($response);
    }

    /**
     * Update domain contacts.
     */
    public function setDomainContacts(SetDomainContactsRequest $request): SetDomainContactsResponse
    {
        $path = '/v1/domains/' . $request->domain . '/contacts';

        $response = $this->apiClient->request(
            'PUT',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new SetDomainContactsException(
                'API request failed for setDomainContacts',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return SetDomainContactsResponse::fromPsrResponse($response);
    }

    /**
     * Update domain nameservers.
     */
    public function setDomainNameservers(SetDomainNameserversRequest $request): SetDomainNameserversResponse
    {
        $path = '/v1/domains/' . $request->domain . '/nameservers';

        $response = $this->apiClient->request(
            'PUT',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new SetDomainNameserversException(
                'API request failed for setDomainNameservers',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return SetDomainNameserversResponse::fromPsrResponse($response);
    }

    /**
     * Get personal nameservers on a domain.
     */
    public function getDomainPersonalNameservers(GetDomainPersonalNameserversRequest $request): GetDomainPersonalNameserversResponse
    {
        $path = '/v1/domains/' . $request->domain . '/personal-nameservers';

        $response = $this->apiClient->request(
            'GET',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new GetDomainPersonalNameserversException(
                'API request failed for getDomainPersonalNameservers',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return GetDomainPersonalNameserversResponse::fromPsrResponse($response);
    }

    /**
     * Get personal nameservers host configuration.
     */
    public function getDomainPersonalNameserverHostInfo(GetDomainPersonalNameserverHostInfoRequest $request): GetDomainPersonalNameserverHostInfoResponse
    {
        $path = '/v1/domains/' . $request->domain . '/personal-nameservers/' . $request->currentHost;

        $response = $this->apiClient->request(
            'GET',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new GetDomainPersonalNameserverHostInfoException(
                'API request failed for getDomainPersonalNameserverHostInfo',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return GetDomainPersonalNameserverHostInfoResponse::fromPsrResponse($response);
    }

    /**
     * Update personal nameservers host configuration.
     */
    public function updateDomainPersonalNameserverHostInfo(UpdateDomainPersonalNameserverHostInfoRequest $request): UpdateDomainPersonalNameserverHostInfoResponse
    {
        $path = '/v1/domains/' . $request->domain . '/personal-nameservers/' . $request->currentHost;

        $response = $this->apiClient->request(
            'PUT',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new UpdateDomainPersonalNameserverHostInfoException(
                'API request failed for updateDomainPersonalNameserverHostInfo',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return UpdateDomainPersonalNameserverHostInfoResponse::fromPsrResponse($response);
    }

    /**
     * Delete personal nameservers host configuration.
     */
    public function deleteDomainPersonalNameserverHostInfo(DeleteDomainPersonalNameserverHostInfoRequest $request): DeleteDomainPersonalNameserverHostInfoResponse
    {
        $path = '/v1/domains/' . $request->domain . '/personal-nameservers/' . $request->currentHost;

        $response = $this->apiClient->request(
            'DELETE',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new DeleteDomainPersonalNameserverHostInfoException(
                'API request failed for deleteDomainPersonalNameserverHostInfo',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return DeleteDomainPersonalNameserverHostInfoResponse::fromPsrResponse($response);
    }

    /**
     * Update domain email protection preference.
     */
    public function updateDomainEmailProtectionPreference(UpdateDomainEmailProtectionPreferenceRequest $request): UpdateDomainEmailProtectionPreferenceResponse
    {
        $path = '/v1/domains/' . $request->domain . '/privacy/email-protection-preference';

        $response = $this->apiClient->request(
            'PUT',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new UpdateDomainEmailProtectionPreferenceException(
                'API request failed for updateDomainEmailProtectionPreference',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return UpdateDomainEmailProtectionPreferenceResponse::fromPsrResponse($response);
    }

    /**
     * Update domain privacy preference.
     */
    public function updateDomainPrivacyPreference(UpdateDomainPrivacyPreferenceRequest $request): UpdateDomainPrivacyPreferenceResponse
    {
        $path = '/v1/domains/' . $request->domain . '/privacy/preference';

        $response = $this->apiClient->request(
            'PUT',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new UpdateDomainPrivacyPreferenceException(
                'API request failed for updateDomainPrivacyPreference',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return UpdateDomainPrivacyPreferenceResponse::fromPsrResponse($response);
    }

    /**
     * Requests domain renewal.
     */
    public function domainRenew(DomainRenewRequest $request): DomainRenewResponse
    {
        $path = '/v1/domains/' . $request->domain . '/renew';

        $response = $this->apiClient->request(
            'POST',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new DomainRenewException(
                'API request failed for domainRenew',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return DomainRenewResponse::fromPsrResponse($response);
    }

    /**
     * Requests domain restoration.
     */
    public function domainRestore(DomainRestoreRequest $request): DomainRestoreResponse
    {
        $path = '/v1/domains/' . $request->domain . '/restore';

        $response = $this->apiClient->request(
            'POST',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new DomainRestoreException(
                'API request failed for domainRestore',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return DomainRestoreResponse::fromPsrResponse($response);
    }

    /**
     * Requests domain transfer.
     */
    public function transferRequest(TransferRequestRequest $request): TransferRequestResponse
    {
        $path = '/v1/domains/' . $request->domain . '/transfer';

        $response = $this->apiClient->request(
            'POST',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new TransferRequestException(
                'API request failed for transferRequest',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return TransferRequestResponse::fromPsrResponse($response);
    }

    /**
     * Get the details of the domain transfer.
     */
    public function getTransferInfo(GetTransferInfoRequest $request): GetTransferInfoResponse
    {
        $path = '/v1/domains/' . $request->domain . '/transfer';

        $response = $this->apiClient->request(
            'GET',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new GetTransferInfoException(
                'API request failed for getTransferInfo',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return GetTransferInfoResponse::fromPsrResponse($response);
    }

    /**
     * Get domain auth code.
     */
    public function getAuthCode(GetAuthCodeRequest $request): GetAuthCodeResponse
    {
        $path = '/v1/domains/' . $request->domain . '/transfer/auth-code';

        $response = $this->apiClient->request(
            'GET',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new GetAuthCodeException(
                'API request failed for getAuthCode',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return GetAuthCodeResponse::fromPsrResponse($response);
    }

    /**
     * Update domain transfer lock.
     */
    public function updateTransferLock(UpdateTransferLockRequest $request): UpdateTransferLockResponse
    {
        $path = '/v1/domains/' . $request->domain . '/transfer/lock';

        $response = $this->apiClient->request(
            'PUT',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new UpdateTransferLockException(
                'API request failed for updateTransferLock',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return UpdateTransferLockResponse::fromPsrResponse($response);
    }
}
