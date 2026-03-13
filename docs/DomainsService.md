# DomainsService

## getDomainList

- Purpose: Get domain list
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\GetDomainListRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\GetDomainListResponse
- Method/Path: GET /v1/domains

Example input data:
```php
$request = GetDomainListRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## checkDomainsAvailability

- Purpose: Check domains availability
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\CheckDomainsAvailabilityRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\CheckDomainsAvailabilityResponse
- Method/Path: POST /v1/domains/available

Example input data:
```php
$request = CheckDomainsAvailabilityRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## getDomainInfo

- Purpose: Get domain info
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\GetDomainInfoRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\GetDomainInfoResponse
- Method/Path: GET /v1/domains/{domain}

Example input data:
```php
$request = GetDomainInfoRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## domainDelete

- Purpose: Delete the domain
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\DomainDeleteRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\DomainDeleteResponse
- Method/Path: DELETE /v1/domains/{domain}

Example input data:
```php
$request = DomainDeleteRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## domainCreate

- Purpose: Register the domain
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\DomainCreateRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\DomainCreateResponse
- Method/Path: POST /v1/domains/{domain}

Example input data:
```php
$request = DomainCreateRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## updateAutorenewal

- Purpose: Update the domain autorenewal state
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\UpdateAutorenewalRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\UpdateAutorenewalResponse
- Method/Path: PUT /v1/domains/{domain}/autorenew

Example input data:
```php
$request = UpdateAutorenewalRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## checkSingleDomainAvailability

- Purpose: Check single domain availability
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\CheckSingleDomainAvailabilityRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\CheckSingleDomainAvailabilityResponse
- Method/Path: GET /v1/domains/{domain}/available

Example input data:
```php
$request = CheckSingleDomainAvailabilityRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## setDomainContacts

- Purpose: Update domain contacts
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\SetDomainContactsRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\SetDomainContactsResponse
- Method/Path: PUT /v1/domains/{domain}/contacts

Example input data:
```php
$request = SetDomainContactsRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## setDomainNameservers

- Purpose: Update domain nameservers
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\SetDomainNameserversRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\SetDomainNameserversResponse
- Method/Path: PUT /v1/domains/{domain}/nameservers

Example input data:
```php
$request = SetDomainNameserversRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## getDomainPersonalNameservers

- Purpose: Get personal nameservers on a domain
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\GetDomainPersonalNameserversRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\GetDomainPersonalNameserversResponse
- Method/Path: GET /v1/domains/{domain}/personal-nameservers

Example input data:
```php
$request = GetDomainPersonalNameserversRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## getDomainPersonalNameserverHostInfo

- Purpose: Get personal nameservers host configuration
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\GetDomainPersonalNameserverHostInfoRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\GetDomainPersonalNameserverHostInfoResponse
- Method/Path: GET /v1/domains/{domain}/personal-nameservers/{currentHost}

Example input data:
```php
$request = GetDomainPersonalNameserverHostInfoRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## updateDomainPersonalNameserverHostInfo

- Purpose: Update personal nameservers host configuration
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\UpdateDomainPersonalNameserverHostInfoRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\UpdateDomainPersonalNameserverHostInfoResponse
- Method/Path: PUT /v1/domains/{domain}/personal-nameservers/{currentHost}

Example input data:
```php
$request = UpdateDomainPersonalNameserverHostInfoRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## deleteDomainPersonalNameserverHostInfo

- Purpose: Delete personal nameservers host configuration
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\DeleteDomainPersonalNameserverHostInfoRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\DeleteDomainPersonalNameserverHostInfoResponse
- Method/Path: DELETE /v1/domains/{domain}/personal-nameservers/{currentHost}

Example input data:
```php
$request = DeleteDomainPersonalNameserverHostInfoRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## updateDomainEmailProtectionPreference

- Purpose: Update domain email protection preference
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\UpdateDomainEmailProtectionPreferenceRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\UpdateDomainEmailProtectionPreferenceResponse
- Method/Path: PUT /v1/domains/{domain}/privacy/email-protection-preference

Example input data:
```php
$request = UpdateDomainEmailProtectionPreferenceRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## updateDomainPrivacyPreference

- Purpose: Update domain privacy preference
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\UpdateDomainPrivacyPreferenceRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\UpdateDomainPrivacyPreferenceResponse
- Method/Path: PUT /v1/domains/{domain}/privacy/preference

Example input data:
```php
$request = UpdateDomainPrivacyPreferenceRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## domainRenew

- Purpose: Requests domain renewal
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\DomainRenewRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\DomainRenewResponse
- Method/Path: POST /v1/domains/{domain}/renew

Example input data:
```php
$request = DomainRenewRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## domainRestore

- Purpose: Requests domain restoration
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\DomainRestoreRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\DomainRestoreResponse
- Method/Path: POST /v1/domains/{domain}/restore

Example input data:
```php
$request = DomainRestoreRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## transferRequest

- Purpose: Requests domain transfer
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\TransferRequestRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\TransferRequestResponse
- Method/Path: POST /v1/domains/{domain}/transfer

Example input data:
```php
$request = TransferRequestRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## getTransferInfo

- Purpose: Get the details of the domain transfer
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\GetTransferInfoRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\GetTransferInfoResponse
- Method/Path: GET /v1/domains/{domain}/transfer

Example input data:
```php
$request = GetTransferInfoRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## getAuthCode

- Purpose: Get domain auth code
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\GetAuthCodeRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\GetAuthCodeResponse
- Method/Path: GET /v1/domains/{domain}/transfer/auth-code

Example input data:
```php
$request = GetAuthCodeRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## updateTransferLock

- Purpose: Update domain transfer lock
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\UpdateTransferLockRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\UpdateTransferLockResponse
- Method/Path: PUT /v1/domains/{domain}/transfer/lock

Example input data:
```php
$request = UpdateTransferLockRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

