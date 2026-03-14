# DomainsService

Manual request DTO construction is required.

## Methods

- `getDomainList` -> `CommunitySDKs\Spaceship\DTO\Domains\Request\GetDomainListRequest` -> `CommunitySDKs\Spaceship\DTO\Domains\Response\GetDomainListResponse` -> `GET /v1/domains`
- `checkDomainsAvailability` -> `CommunitySDKs\Spaceship\DTO\Domains\Request\CheckDomainsAvailabilityRequest` -> `CommunitySDKs\Spaceship\DTO\Domains\Response\CheckDomainsAvailabilityResponse` -> `POST /v1/domains/available`
- `getDomainInfo` -> `CommunitySDKs\Spaceship\DTO\Domains\Request\GetDomainInfoRequest` -> `CommunitySDKs\Spaceship\DTO\Domains\Response\GetDomainInfoResponse` -> `GET /v1/domains/{domain}`
- `domainDelete` -> `CommunitySDKs\Spaceship\DTO\Domains\Request\DomainDeleteRequest` -> `CommunitySDKs\Spaceship\DTO\Domains\Response\DomainDeleteResponse` -> `DELETE /v1/domains/{domain}`
- `domainCreate` -> `CommunitySDKs\Spaceship\DTO\Domains\Request\DomainCreateRequest` -> `CommunitySDKs\Spaceship\DTO\Domains\Response\DomainCreateResponse` -> `POST /v1/domains/{domain}`
- `updateAutorenewal` -> `CommunitySDKs\Spaceship\DTO\Domains\Request\UpdateAutorenewalRequest` -> `CommunitySDKs\Spaceship\DTO\Domains\Response\UpdateAutorenewalResponse` -> `PUT /v1/domains/{domain}/autorenew`
- `checkSingleDomainAvailability` -> `CommunitySDKs\Spaceship\DTO\Domains\Request\CheckSingleDomainAvailabilityRequest` -> `CommunitySDKs\Spaceship\DTO\Domains\Response\CheckSingleDomainAvailabilityResponse` -> `GET /v1/domains/{domain}/available`
- `setDomainContacts` -> `CommunitySDKs\Spaceship\DTO\Domains\Request\SetDomainContactsRequest` -> `CommunitySDKs\Spaceship\DTO\Domains\Response\SetDomainContactsResponse` -> `PUT /v1/domains/{domain}/contacts`
- `setDomainNameservers` -> `CommunitySDKs\Spaceship\DTO\Domains\Request\SetDomainNameserversRequest` -> `CommunitySDKs\Spaceship\DTO\Domains\Response\SetDomainNameserversResponse` -> `PUT /v1/domains/{domain}/nameservers`
- `getDomainPersonalNameservers` -> `CommunitySDKs\Spaceship\DTO\Domains\Request\GetDomainPersonalNameserversRequest` -> `CommunitySDKs\Spaceship\DTO\Domains\Response\GetDomainPersonalNameserversResponse` -> `GET /v1/domains/{domain}/personal-nameservers`
- `getDomainPersonalNameserverHostInfo` -> `CommunitySDKs\Spaceship\DTO\Domains\Request\GetDomainPersonalNameserverHostInfoRequest` -> `CommunitySDKs\Spaceship\DTO\Domains\Response\GetDomainPersonalNameserverHostInfoResponse` -> `GET /v1/domains/{domain}/personal-nameservers/{currentHost}`
- `updateDomainPersonalNameserverHostInfo` -> `CommunitySDKs\Spaceship\DTO\Domains\Request\UpdateDomainPersonalNameserverHostInfoRequest` -> `CommunitySDKs\Spaceship\DTO\Domains\Response\UpdateDomainPersonalNameserverHostInfoResponse` -> `PUT /v1/domains/{domain}/personal-nameservers/{currentHost}`
- `deleteDomainPersonalNameserverHostInfo` -> `CommunitySDKs\Spaceship\DTO\Domains\Request\DeleteDomainPersonalNameserverHostInfoRequest` -> `CommunitySDKs\Spaceship\DTO\Domains\Response\DeleteDomainPersonalNameserverHostInfoResponse` -> `DELETE /v1/domains/{domain}/personal-nameservers/{currentHost}`
- `updateDomainEmailProtectionPreference` -> `CommunitySDKs\Spaceship\DTO\Domains\Request\UpdateDomainEmailProtectionPreferenceRequest` -> `CommunitySDKs\Spaceship\DTO\Domains\Response\UpdateDomainEmailProtectionPreferenceResponse` -> `PUT /v1/domains/{domain}/privacy/email-protection-preference`
- `updateDomainPrivacyPreference` -> `CommunitySDKs\Spaceship\DTO\Domains\Request\UpdateDomainPrivacyPreferenceRequest` -> `CommunitySDKs\Spaceship\DTO\Domains\Response\UpdateDomainPrivacyPreferenceResponse` -> `PUT /v1/domains/{domain}/privacy/preference`
- `domainRenew` -> `CommunitySDKs\Spaceship\DTO\Domains\Request\DomainRenewRequest` -> `CommunitySDKs\Spaceship\DTO\Domains\Response\DomainRenewResponse` -> `POST /v1/domains/{domain}/renew`
- `domainRestore` -> `CommunitySDKs\Spaceship\DTO\Domains\Request\DomainRestoreRequest` -> `CommunitySDKs\Spaceship\DTO\Domains\Response\DomainRestoreResponse` -> `POST /v1/domains/{domain}/restore`
- `transferRequest` -> `CommunitySDKs\Spaceship\DTO\Domains\Request\TransferRequestRequest` -> `CommunitySDKs\Spaceship\DTO\Domains\Response\TransferRequestResponse` -> `POST /v1/domains/{domain}/transfer`
- `getTransferInfo` -> `CommunitySDKs\Spaceship\DTO\Domains\Request\GetTransferInfoRequest` -> `CommunitySDKs\Spaceship\DTO\Domains\Response\GetTransferInfoResponse` -> `GET /v1/domains/{domain}/transfer`
- `getAuthCode` -> `CommunitySDKs\Spaceship\DTO\Domains\Request\GetAuthCodeRequest` -> `CommunitySDKs\Spaceship\DTO\Domains\Response\GetAuthCodeResponse` -> `GET /v1/domains/{domain}/transfer/auth-code`
- `updateTransferLock` -> `CommunitySDKs\Spaceship\DTO\Domains\Request\UpdateTransferLockRequest` -> `CommunitySDKs\Spaceship\DTO\Domains\Response\UpdateTransferLockResponse` -> `PUT /v1/domains/{domain}/transfer/lock`

## Example

```php
use CommunitySDKs\Spaceship\DTO\Domains\Request\CheckDomainsAvailabilityRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\GetDomainInfoRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\GetDomainListRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainName;
use CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsGetDomainsAvailabilityRequest;

$client->domains()->getDomainList(new GetDomainListRequest(20, 0, ['createdAt desc']));
$client->domains()->checkDomainsAvailability(
	new CheckDomainsAvailabilityRequest(
		new DomainsGetDomainsAvailabilityRequest([
			DomainName::fromValue('example.com'),
			DomainName::fromValue('example.net'),
		])
	)
);
$client->domains()->getDomainInfo(new GetDomainInfoRequest('example.com'));
```

