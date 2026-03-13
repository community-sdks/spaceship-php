# SellerhubService

## createCheckoutLink

- Purpose: Create a checkout link
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\CreatecheckoutlinkRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\CreatecheckoutlinkResponse
- Method/Path: POST /v1/sellerhub/checkout-links

Example input data:
```php
$request = CreatecheckoutlinkRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## getSellerHubDomainList

- Purpose: Get SellerHub domains list
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\GetsellerhubdomainlistRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\GetsellerhubdomainlistResponse
- Method/Path: GET /v1/sellerhub/domains

Example input data:
```php
$request = GetsellerhubdomainlistRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## createSellerHubDomain

- Purpose: Create a SellerHub domain
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\CreatesellerhubdomainRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\CreatesellerhubdomainResponse
- Method/Path: POST /v1/sellerhub/domains

Example input data:
```php
$request = CreatesellerhubdomainRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## getSellerHubDomain

- Purpose: Get a specific SellerHub domain
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\GetsellerhubdomainRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\GetsellerhubdomainResponse
- Method/Path: GET /v1/sellerhub/domains/{domain}

Example input data:
```php
$request = GetsellerhubdomainRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## updateSellerHubDomain

- Purpose: Update a SellerHub domain
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\UpdatesellerhubdomainRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\UpdatesellerhubdomainResponse
- Method/Path: PATCH /v1/sellerhub/domains/{domain}

Example input data:
```php
$request = UpdatesellerhubdomainRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## deleteSellerHubDomain

- Purpose: Delete a SellerHub domain
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\DeletesellerhubdomainRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\DeletesellerhubdomainResponse
- Method/Path: DELETE /v1/sellerhub/domains/{domain}

Example input data:
```php
$request = DeletesellerhubdomainRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## getVerificationRecords

- Purpose: Get verification records
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\GetverificationrecordsRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\GetverificationrecordsResponse
- Method/Path: GET /v1/sellerhub/verification-records

Example input data:
```php
$request = GetverificationrecordsRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

