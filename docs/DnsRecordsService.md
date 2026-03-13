# DnsRecordsService

## saveRecords

- Purpose: Save resource records
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\SaverecordsRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\SaverecordsResponse
- Method/Path: PUT /v1/dns/records/{domain}

Example input data:
```php
$request = SaverecordsRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## deleteRecords

- Purpose: Delete resource records
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\DeleterecordsRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\DeleterecordsResponse
- Method/Path: DELETE /v1/dns/records/{domain}

Example input data:
```php
$request = DeleterecordsRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## getResourceRecordsList

- Purpose: Get domain resource records list
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\GetresourcerecordslistRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\GetresourcerecordslistResponse
- Method/Path: GET /v1/dns/records/{domain}

Example input data:
```php
$request = GetresourcerecordslistRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

