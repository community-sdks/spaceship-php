# SellerHubService

Generated from the bundled `openapi.json`. Optional request arguments default to `null` and are omitted from the wire. Response bodies are hydrated into DTOs; empty responses have `data === null`.

## `createCheckoutLink`

Create a checkout link

`POST /v1/sellerhub/checkout-links`

- Request: `CommunitySDKs\Spaceship\DTO\SellerHub\Request\CreateCheckoutLinkRequest`
- Response: `CommunitySDKs\Spaceship\DTO\SellerHub\Response\CreateCheckoutLinkResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\CreateCheckoutLinkResponse`
- Exception: `CommunitySDKs\Spaceship\Exception\SellerHub\CreateCheckoutLinkException`
- Scopes: `sellerhub:write`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `body` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\CreateCheckoutLinkRequest` | yes | Typed JSON body |

## `getSellerHubDomainList`

Get SellerHub domains list

`GET /v1/sellerhub/domains`

- Request: `CommunitySDKs\Spaceship\DTO\SellerHub\Request\GetSellerHubDomainListRequest`
- Response: `CommunitySDKs\Spaceship\DTO\SellerHub\Response\GetSellerHubDomainListResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\GetSellerHubDomainListResult`
- Exception: `CommunitySDKs\Spaceship\Exception\SellerHub\GetSellerHubDomainListException`
- Scopes: `sellerhub:read`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `take` | `int` | yes | Number of response items per page |
| `skip` | `int` | yes | Number of response items to skip |

## `createSellerHubDomain`

Create a SellerHub domain

`POST /v1/sellerhub/domains`

- Request: `CommunitySDKs\Spaceship\DTO\SellerHub\Request\CreateSellerHubDomainRequest`
- Response: `CommunitySDKs\Spaceship\DTO\SellerHub\Response\CreateSellerHubDomainResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerHubDomainResponse`
- Exception: `CommunitySDKs\Spaceship\Exception\SellerHub\CreateSellerHubDomainException`
- Scopes: `sellerhub:write`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `body` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\CreateSellerHubDomainRequest` | yes | Typed JSON body |

## `getSoldDomains`

Get sold domains

`GET /v1/sellerhub/domains/reports/sold`

- Request: `CommunitySDKs\Spaceship\DTO\SellerHub\Request\GetSoldDomainsRequest`
- Response: `CommunitySDKs\Spaceship\DTO\SellerHub\Response\GetSoldDomainsResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\GetSoldDomainsResult`
- Exception: `CommunitySDKs\Spaceship\Exception\SellerHub\GetSoldDomainsException`
- Scopes: `sellerhub:read`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `take` | `int` | yes | Number of response items per page. Required; integer between 1 and the operation-specific upper bound. |
| `cursor` | `string` | no | Opaque pagination cursor for fetching the next page of results. Obtained from the `cursor` field in a previous response. Omit on the first request. |
| `saleDateTimeFrom` | `string` | no | Inclusive lower bound for the sale time filter as a full ISO-8601 UTC datetime (e.g., `2024-01-15T00:00:00.000Z`). When specified without `saleDateTimeTo`, returns all records from this date onwards. Must be earlier than `saleDateTimeTo` when both are provided. |
| `saleDateTimeTo` | `string` | no | Exclusive upper bound for the sale time filter as a full ISO-8601 UTC datetime (e.g., `2024-01-16T00:00:00.000Z`). When specified without `saleDateTimeFrom`, returns all records before this date. Must be later than `saleDateTimeFrom` when both are provided. |

## `getSellerHubDomain`

Get a specific SellerHub domain

`GET /v1/sellerhub/domains/{domain}`

- Request: `CommunitySDKs\Spaceship\DTO\SellerHub\Request\GetSellerHubDomainRequest`
- Response: `CommunitySDKs\Spaceship\DTO\SellerHub\Response\GetSellerHubDomainResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerHubDomainResponse`
- Exception: `CommunitySDKs\Spaceship\Exception\SellerHub\GetSellerHubDomainException`
- Scopes: `sellerhub:read`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `domain` | `string` | yes | Domain name |

## `updateSellerHubDomain`

Update a SellerHub domain

`PATCH /v1/sellerhub/domains/{domain}`

- Request: `CommunitySDKs\Spaceship\DTO\SellerHub\Request\UpdateSellerHubDomainRequest`
- Response: `CommunitySDKs\Spaceship\DTO\SellerHub\Response\UpdateSellerHubDomainResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerHubDomainResponse`
- Exception: `CommunitySDKs\Spaceship\Exception\SellerHub\UpdateSellerHubDomainException`
- Scopes: `sellerhub:write`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `domain` | `string` | yes | Update request payload |
| `body` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\UpdateSellerHubDomainRequest` | yes | Typed JSON body |

## `deleteSellerHubDomain`

Delete a SellerHub domain

`DELETE /v1/sellerhub/domains/{domain}`

- Request: `CommunitySDKs\Spaceship\DTO\SellerHub\Request\DeleteSellerHubDomainRequest`
- Response: `CommunitySDKs\Spaceship\DTO\SellerHub\Response\DeleteSellerHubDomainResponse`
- `data`: `null`
- Exception: `CommunitySDKs\Spaceship\Exception\SellerHub\DeleteSellerHubDomainException`
- Scopes: `sellerhub:write`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `domain` | `string` | yes | Domain name |

## `getSafePayTransactionList`

List SafePay transactions

`GET /v1/sellerhub/safepay-transactions`

- Request: `CommunitySDKs\Spaceship\DTO\SellerHub\Request\GetSafePayTransactionListRequest`
- Response: `CommunitySDKs\Spaceship\DTO\SellerHub\Response\GetSafePayTransactionListResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\GetSafePayTransactionListResult`
- Exception: `CommunitySDKs\Spaceship\Exception\SellerHub\GetSafePayTransactionListException`
- Scopes: `sellerhub:read`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `take` | `int` | yes | Number of response items per page |
| `skip` | `int` | yes | Number of response items to skip |

## `createSafePayTransaction`

Create a SafePay transaction

`POST /v1/sellerhub/safepay-transactions`

- Request: `CommunitySDKs\Spaceship\DTO\SellerHub\Request\CreateSafePayTransactionRequest`
- Response: `CommunitySDKs\Spaceship\DTO\SellerHub\Response\CreateSafePayTransactionResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SafePayTransaction`
- Exception: `CommunitySDKs\Spaceship\Exception\SellerHub\CreateSafePayTransactionException`
- Scopes: `sellerhub:write`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `body` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\CreateSafePayTransactionRequest` | yes | Typed JSON body |

## `getSafePayTransaction`

Get a SafePay transaction

`GET /v1/sellerhub/safepay-transactions/{transactionId}`

- Request: `CommunitySDKs\Spaceship\DTO\SellerHub\Request\GetSafePayTransactionRequest`
- Response: `CommunitySDKs\Spaceship\DTO\SellerHub\Response\GetSafePayTransactionResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SafePayTransaction`
- Exception: `CommunitySDKs\Spaceship\Exception\SellerHub\GetSafePayTransactionException`
- Scopes: `sellerhub:read`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `transactionId` | `string` | yes | Unique SafePay transaction identifier (UUID), as returned by create or list. |

## `getVerificationRecords`

Get verification records

`GET /v1/sellerhub/verification-records`

- Request: `CommunitySDKs\Spaceship\DTO\SellerHub\Request\GetVerificationRecordsRequest`
- Response: `CommunitySDKs\Spaceship\DTO\SellerHub\Response\GetVerificationRecordsResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerHubVerificationResponse`
- Exception: `CommunitySDKs\Spaceship\Exception\SellerHub\GetVerificationRecordsException`
- Scopes: `sellerhub:read`

