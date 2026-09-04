# DomainsService

Generated from the bundled `openapi.json`. Optional request arguments default to `null` and are omitted from the wire. Response bodies are hydrated into DTOs; empty responses have `data === null`.

## `getDomainList`

Get domain list

`GET /v1/domains`

- Request: `CommunitySDKs\Spaceship\DTO\Domains\Request\GetDomainListRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Domains\Response\GetDomainListResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\Domains\Schema\GetDomainListResult`
- Exception: `CommunitySDKs\Spaceship\Exception\Domains\GetDomainListException`
- Scopes: `domains:read`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `take` | `int` | yes | Number of response items per page |
| `skip` | `int` | yes | Number of response items to skip |
| `orderBy` | `array` | no | Specifies fields and order to sort the response items |

## `checkDomainsAvailability`

Check domains availability

`POST /v1/domains/available`

- Request: `CommunitySDKs\Spaceship\DTO\Domains\Request\CheckDomainsAvailabilityRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Domains\Response\CheckDomainsAvailabilityResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsGetDomainsAvailabilityResult`
- Exception: `CommunitySDKs\Spaceship\Exception\Domains\CheckDomainsAvailabilityException`
- Scopes: `domains:read`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `body` | `CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsGetDomainsAvailabilityRequest` | yes | Typed JSON body |

## `getDomainInfo`

Get domain info

`GET /v1/domains/{domain}`

- Request: `CommunitySDKs\Spaceship\DTO\Domains\Request\GetDomainInfoRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Domains\Response\GetDomainInfoResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainInfo`
- Exception: `CommunitySDKs\Spaceship\Exception\Domains\GetDomainInfoException`
- Scopes: `domains:read`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `domain` | `string` | yes | Domain name in ASCII format (A-label) whose details are to be fetched. The domain name must be provided in a fully qualified domain format. |

## `domainDelete`

Delete the domain

`DELETE /v1/domains/{domain}`

- Request: `CommunitySDKs\Spaceship\DTO\Domains\Request\DomainDeleteRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Domains\Response\DomainDeleteResponse`
- `data`: `null`
- Exception: `CommunitySDKs\Spaceship\Exception\Domains\DomainDeleteException`
- Scopes: `domains:write`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `domain` | `string` | yes | Domain name in ASCII format (A-label) that must be deleted. The domain name must be provided in a fully qualified domain format. |

## `domainCreate`

Register the domain

`POST /v1/domains/{domain}`

- Request: `CommunitySDKs\Spaceship\DTO\Domains\Request\DomainCreateRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Domains\Response\DomainCreateResponse`
- `data`: `null`
- Exception: `CommunitySDKs\Spaceship\Exception\Domains\DomainCreateException`
- Scopes: `domains:billing`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `domain` | `string` | yes | The domain name for registration. |
| `body` | `CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainCreateRequest` | yes | Typed JSON body |

## `updateAutorenewal`

Update the domain autorenewal state

`PUT /v1/domains/{domain}/autorenew`

- Request: `CommunitySDKs\Spaceship\DTO\Domains\Request\UpdateAutorenewalRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Domains\Response\UpdateAutorenewalResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsDomainAutoRenewal`
- Exception: `CommunitySDKs\Spaceship\Exception\Domains\UpdateAutorenewalException`
- Scopes: `domains:write`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `domain` | `string` | yes | The domain whose autorenewal state is being updated. |
| `body` | `CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsDomainAutoRenewal` | yes | Typed JSON body |

## `checkSingleDomainAvailability`

Check single domain availability

`GET /v1/domains/{domain}/available`

- Request: `CommunitySDKs\Spaceship\DTO\Domains\Request\CheckSingleDomainAvailabilityRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Domains\Response\CheckSingleDomainAvailabilityResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainAvailabilityResult`
- Exception: `CommunitySDKs\Spaceship\Exception\Domains\CheckSingleDomainAvailabilityException`
- Scopes: `domains:read`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `domain` | `string` | yes | Domain name in ASCII format (A-label) whose details are to be fetched. The domain name must be provided in a fully qualified domain format. |

## `setDomainContacts`

Update domain contacts

`PUT /v1/domains/{domain}/contacts`

- Request: `CommunitySDKs\Spaceship\DTO\Domains\Request\SetDomainContactsRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Domains\Response\SetDomainContactsResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsPutContactsResponse`
- Exception: `CommunitySDKs\Spaceship\Exception\Domains\SetDomainContactsException`
- Scopes: `domains:write`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `domain` | `string` | yes | The domain whose contacts are being updated. |
| `body` | `CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainContacts` | yes | Typed JSON body |

## `setDomainNameservers`

Update domain nameservers

`PUT /v1/domains/{domain}/nameservers`

- Request: `CommunitySDKs\Spaceship\DTO\Domains\Request\SetDomainNameserversRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Domains\Response\SetDomainNameserversResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainNameServersConfigurationResponse`
- Exception: `CommunitySDKs\Spaceship\Exception\Domains\SetDomainNameserversException`
- Scopes: `domains:write`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `domain` | `string` | yes | The domain whose nameservers should be updated. The domain name must be provided in a fully qualified domain format. |
| `body` | `CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainNameServersConfigurationRequest` | yes | Typed JSON body |

## `getDomainPersonalNameservers`

Get personal nameservers on a domain

`GET /v1/domains/{domain}/personal-nameservers`

- Request: `CommunitySDKs\Spaceship\DTO\Domains\Request\GetDomainPersonalNameserversRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Domains\Response\GetDomainPersonalNameserversResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\Domains\Schema\PersonalNameservers`
- Exception: `CommunitySDKs\Spaceship\Exception\Domains\GetDomainPersonalNameserversException`
- Scopes: `domains:read`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `domain` | `string` | yes | A domain name whose details should be fetched. The domain name must be provided in a fully qualified domain format. |

## `getDomainPersonalNameserverHostInfo`

Get personal nameservers host configuration

`GET /v1/domains/{domain}/personal-nameservers/{currentHost}`

- Request: `CommunitySDKs\Spaceship\DTO\Domains\Request\GetDomainPersonalNameserverHostInfoRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Domains\Response\GetDomainPersonalNameserverHostInfoResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\Domains\Schema\HostNameServers`
- Exception: `CommunitySDKs\Spaceship\Exception\Domains\GetDomainPersonalNameserverHostInfoException`
- Scopes: `domains:read`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `domain` | `string` | yes | Domain name whose details should be fetched. The domain name must be provided in a fully qualified domain format. |
| `currentHost` | `string` | yes | The host name part of the nameserver. For example, for `spaceship.dev` domain and `ns1.spaceship.dev` fully qualified name, the host is `ns1`. |

## `updateDomainPersonalNameserverHostInfo`

Update personal nameservers host configuration

`PUT /v1/domains/{domain}/personal-nameservers/{currentHost}`

- Request: `CommunitySDKs\Spaceship\DTO\Domains\Request\UpdateDomainPersonalNameserverHostInfoRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Domains\Response\UpdateDomainPersonalNameserverHostInfoResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\Domains\Schema\PersonalNameserverRecord`
- Exception: `CommunitySDKs\Spaceship\Exception\Domains\UpdateDomainPersonalNameserverHostInfoException`
- Scopes: `domains:write`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `domain` | `string` | yes | The domain name in fully qualified format whose nameserver configuration should be updated |
| `currentHost` | `string` | yes | The host name part of the nameserver. For example, for `spaceship.dev` domain and `ns1.spaceship.dev` fully qualified name, the host is `ns1`. |
| `body` | `CommunitySDKs\Spaceship\DTO\Domains\Schema\PersonalNameserverRecord` | yes | Typed JSON body |

## `deleteDomainPersonalNameserverHostInfo`

Delete personal nameservers host configuration

`DELETE /v1/domains/{domain}/personal-nameservers/{currentHost}`

- Request: `CommunitySDKs\Spaceship\DTO\Domains\Request\DeleteDomainPersonalNameserverHostInfoRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Domains\Response\DeleteDomainPersonalNameserverHostInfoResponse`
- `data`: `null`
- Exception: `CommunitySDKs\Spaceship\Exception\Domains\DeleteDomainPersonalNameserverHostInfoException`
- Scopes: `domains:write`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `domain` | `string` | yes | Domain name in a fully qualified format whose personal nameservers host should be deleted |
| `currentHost` | `string` | yes | The host name part of the nameserver. For example, for `spaceship.dev` domain and `ns1.spaceship.dev` fully qualified name, the host is `ns1`. |

## `updateDomainEmailProtectionPreference`

Update domain email protection preference

`PUT /v1/domains/{domain}/privacy/email-protection-preference`

- Request: `CommunitySDKs\Spaceship\DTO\Domains\Request\UpdateDomainEmailProtectionPreferenceRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Domains\Response\UpdateDomainEmailProtectionPreferenceResponse`
- `data`: `null`
- Exception: `CommunitySDKs\Spaceship\Exception\Domains\UpdateDomainEmailProtectionPreferenceException`
- Scopes: `domains:write`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `domain` | `string` | yes | The domain whose email protection preference is being updated. |
| `body` | `CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsDomainEmailProtectionPreference` | yes | Typed JSON body |

## `updateDomainPrivacyPreference`

Update domain privacy preference

`PUT /v1/domains/{domain}/privacy/preference`

- Request: `CommunitySDKs\Spaceship\DTO\Domains\Request\UpdateDomainPrivacyPreferenceRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Domains\Response\UpdateDomainPrivacyPreferenceResponse`
- `data`: `null`
- Exception: `CommunitySDKs\Spaceship\Exception\Domains\UpdateDomainPrivacyPreferenceException`
- Scopes: `domains:write`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `domain` | `string` | yes | The domain whose privacy preference is being updated. |
| `body` | `CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsDomainPrivacyPreference` | yes | Typed JSON body |

## `domainRenew`

Requests domain renewal

`POST /v1/domains/{domain}/renew`

- Request: `CommunitySDKs\Spaceship\DTO\Domains\Request\DomainRenewRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Domains\Response\DomainRenewResponse`
- `data`: `null`
- Exception: `CommunitySDKs\Spaceship\Exception\Domains\DomainRenewException`
- Scopes: `domains:billing`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `domain` | `string` | yes | The domain name to be renewed. |
| `body` | `CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsDomainRenewalRequestInfo` | yes | Typed JSON body |

## `domainRestore`

Requests domain restoration

`POST /v1/domains/{domain}/restore`

- Request: `CommunitySDKs\Spaceship\DTO\Domains\Request\DomainRestoreRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Domains\Response\DomainRestoreResponse`
- `data`: `null`
- Exception: `CommunitySDKs\Spaceship\Exception\Domains\DomainRestoreException`
- Scopes: `domains:billing`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `domain` | `string` | yes | The domain name to be restored. |

## `transferRequest`

Requests domain transfer

`POST /v1/domains/{domain}/transfer`

- Request: `CommunitySDKs\Spaceship\DTO\Domains\Request\TransferRequestRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Domains\Response\TransferRequestResponse`
- `data`: `null`
- Exception: `CommunitySDKs\Spaceship\Exception\Domains\TransferRequestException`
- Scopes: `domains:billing`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `domain` | `string` | yes | The domain name for transfer. |
| `body` | `CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainTransferRequest` | yes | Typed JSON body |

## `getTransferInfo`

Get the details of the domain transfer

`GET /v1/domains/{domain}/transfer`

- Request: `CommunitySDKs\Spaceship\DTO\Domains\Request\GetTransferInfoRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Domains\Response\GetTransferInfoResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsDomainTransferDetailsResponse`
- Exception: `CommunitySDKs\Spaceship\Exception\Domains\GetTransferInfoException`
- Scopes: `domains:transfer`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `domain` | `string` | yes | The domain whose transfer details are to be returned. |

## `getAuthCode`

Get domain auth code

`GET /v1/domains/{domain}/transfer/auth-code`

- Request: `CommunitySDKs\Spaceship\DTO\Domains\Request\GetAuthCodeRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Domains\Response\GetAuthCodeResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsDomainAuthCodeResponse`
- Exception: `CommunitySDKs\Spaceship\Exception\Domains\GetAuthCodeException`
- Scopes: `domains:transfer`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `domain` | `string` | yes | The domain whose auth code is to be returned. |

## `updateTransferLock`

Update domain transfer lock

`PUT /v1/domains/{domain}/transfer/lock`

- Request: `CommunitySDKs\Spaceship\DTO\Domains\Request\UpdateTransferLockRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Domains\Response\UpdateTransferLockResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsDomainTransferLock`
- Exception: `CommunitySDKs\Spaceship\Exception\Domains\UpdateTransferLockException`
- Scopes: `domains:transfer`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `domain` | `string` | yes | The domain whose transfer lock is being updated. |
| `body` | `CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsDomainTransferLock` | yes | Typed JSON body |
