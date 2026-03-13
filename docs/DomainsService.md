# DomainsService

## getDomainList

- Purpose: Get domain list
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\GetdomainlistRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\GetdomainlistResponse
- Method/Path: GET /v1/domains

Example input data:
```php
$request = GetdomainlistRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## checkDomainsAvailability

- Purpose: Check domains availability
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\CheckdomainsavailabilityRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\CheckdomainsavailabilityResponse
- Method/Path: POST /v1/domains/available

Example input data:
```php
$request = CheckdomainsavailabilityRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## getDomainInfo

- Purpose: Get domain info
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\GetdomaininfoRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\GetdomaininfoResponse
- Method/Path: GET /v1/domains/{domain}

Example input data:
```php
$request = GetdomaininfoRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## domainDelete

- Purpose: Delete the domain
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\DomaindeleteRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\DomaindeleteResponse
- Method/Path: DELETE /v1/domains/{domain}

Example input data:
```php
$request = DomaindeleteRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## domainCreate

- Purpose: Register the domain
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\DomaincreateRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\DomaincreateResponse
- Method/Path: POST /v1/domains/{domain}

Example input data:
```php
$request = DomaincreateRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## updateAutorenewal

- Purpose: Update the domain autorenewal state
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\UpdateautorenewalRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\UpdateautorenewalResponse
- Method/Path: PUT /v1/domains/{domain}/autorenew

Example input data:
```php
$request = UpdateautorenewalRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## checkSingleDomainAvailability

- Purpose: Check single domain availability
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\ChecksingledomainavailabilityRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\ChecksingledomainavailabilityResponse
- Method/Path: GET /v1/domains/{domain}/available

Example input data:
```php
$request = ChecksingledomainavailabilityRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## setDomainContacts

- Purpose: Update domain contacts
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\SetdomaincontactsRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\SetdomaincontactsResponse
- Method/Path: PUT /v1/domains/{domain}/contacts

Example input data:
```php
$request = SetdomaincontactsRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## setDomainNameservers

- Purpose: Update domain nameservers
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\SetdomainnameserversRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\SetdomainnameserversResponse
- Method/Path: PUT /v1/domains/{domain}/nameservers

Example input data:
```php
$request = SetdomainnameserversRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## getDomainPersonalNameservers

- Purpose: Get personal nameservers on a domain
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\GetdomainpersonalnameserversRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\GetdomainpersonalnameserversResponse
- Method/Path: GET /v1/domains/{domain}/personal-nameservers

Example input data:
```php
$request = GetdomainpersonalnameserversRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## getDomainPersonalNameserverHostInfo

- Purpose: Get personal nameservers host configuration
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\GetdomainpersonalnameserverhostinfoRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\GetdomainpersonalnameserverhostinfoResponse
- Method/Path: GET /v1/domains/{domain}/personal-nameservers/{currentHost}

Example input data:
```php
$request = GetdomainpersonalnameserverhostinfoRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## updateDomainPersonalNameserverHostInfo

- Purpose: Update personal nameservers host configuration
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\UpdatedomainpersonalnameserverhostinfoRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\UpdatedomainpersonalnameserverhostinfoResponse
- Method/Path: PUT /v1/domains/{domain}/personal-nameservers/{currentHost}

Example input data:
```php
$request = UpdatedomainpersonalnameserverhostinfoRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## deleteDomainPersonalNameserverHostInfo

- Purpose: Delete personal nameservers host configuration
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\DeletedomainpersonalnameserverhostinfoRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\DeletedomainpersonalnameserverhostinfoResponse
- Method/Path: DELETE /v1/domains/{domain}/personal-nameservers/{currentHost}

Example input data:
```php
$request = DeletedomainpersonalnameserverhostinfoRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## updateDomainEmailProtectionPreference

- Purpose: Update domain email protection preference
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\UpdatedomainemailprotectionpreferenceRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\UpdatedomainemailprotectionpreferenceResponse
- Method/Path: PUT /v1/domains/{domain}/privacy/email-protection-preference

Example input data:
```php
$request = UpdatedomainemailprotectionpreferenceRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## updateDomainPrivacyPreference

- Purpose: Update domain privacy preference
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\UpdatedomainprivacypreferenceRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\UpdatedomainprivacypreferenceResponse
- Method/Path: PUT /v1/domains/{domain}/privacy/preference

Example input data:
```php
$request = UpdatedomainprivacypreferenceRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## domainRenew

- Purpose: Requests domain renewal
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\DomainrenewRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\DomainrenewResponse
- Method/Path: POST /v1/domains/{domain}/renew

Example input data:
```php
$request = DomainrenewRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## domainRestore

- Purpose: Requests domain restoration
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\DomainrestoreRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\DomainrestoreResponse
- Method/Path: POST /v1/domains/{domain}/restore

Example input data:
```php
$request = DomainrestoreRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## transferRequest

- Purpose: Requests domain transfer
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\TransferrequestRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\TransferrequestResponse
- Method/Path: POST /v1/domains/{domain}/transfer

Example input data:
```php
$request = TransferrequestRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## getTransferInfo

- Purpose: Get the details of the domain transfer
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\GettransferinfoRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\GettransferinfoResponse
- Method/Path: GET /v1/domains/{domain}/transfer

Example input data:
```php
$request = GettransferinfoRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## getAuthCode

- Purpose: Get domain auth code
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\GetauthcodeRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\GetauthcodeResponse
- Method/Path: GET /v1/domains/{domain}/transfer/auth-code

Example input data:
```php
$request = GetauthcodeRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## updateTransferLock

- Purpose: Update domain transfer lock
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\UpdatetransferlockRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\UpdatetransferlockResponse
- Method/Path: PUT /v1/domains/{domain}/transfer/lock

Example input data:
```php
$request = UpdatetransferlockRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

