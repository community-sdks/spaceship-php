# SellerHubService

## createCheckoutLink

- Purpose: Create a checkout link
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\CreateCheckoutLinkRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\CreateCheckoutLinkResponse
- Method/Path: POST /v1/sellerhub/checkout-links

Example input data:
```php
$request = CreateCheckoutLinkRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## getSellerHubDomainList

- Purpose: Get SellerHub domains list
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\GetSellerHubDomainListRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\GetSellerHubDomainListResponse
- Method/Path: GET /v1/sellerhub/domains

Example input data:
```php
$request = GetSellerHubDomainListRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## createSellerHubDomain

- Purpose: Create a SellerHub domain
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\CreateSellerHubDomainRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\CreateSellerHubDomainResponse
- Method/Path: POST /v1/sellerhub/domains

Example input data:
```php
$request = CreateSellerHubDomainRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## getSellerHubDomain

- Purpose: Get a specific SellerHub domain
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\GetSellerHubDomainRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\GetSellerHubDomainResponse
- Method/Path: GET /v1/sellerhub/domains/{domain}

Example input data:
```php
$request = GetSellerHubDomainRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## updateSellerHubDomain

- Purpose: Update a SellerHub domain
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\UpdateSellerHubDomainRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\UpdateSellerHubDomainResponse
- Method/Path: PATCH /v1/sellerhub/domains/{domain}

Example input data:
```php
$request = UpdateSellerHubDomainRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## deleteSellerHubDomain

- Purpose: Delete a SellerHub domain
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\DeleteSellerHubDomainRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\DeleteSellerHubDomainResponse
- Method/Path: DELETE /v1/sellerhub/domains/{domain}

Example input data:
```php
$request = DeleteSellerHubDomainRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## getVerificationRecords

- Purpose: Get verification records
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\GetVerificationRecordsRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\GetVerificationRecordsResponse
- Method/Path: GET /v1/sellerhub/verification-records

Example input data:
```php
$request = GetVerificationRecordsRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

