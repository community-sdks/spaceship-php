# DNSRecordsService

## saveRecords

- Purpose: Save resource records
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\SaveRecordsRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\SaveRecordsResponse
- Method/Path: PUT /v1/dns/records/{domain}

Example input data:
```php
$request = SaveRecordsRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## deleteRecords

- Purpose: Delete resource records
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\DeleteRecordsRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\DeleteRecordsResponse
- Method/Path: DELETE /v1/dns/records/{domain}

Example input data:
```php
$request = DeleteRecordsRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## getResourceRecordsList

- Purpose: Get domain resource records list
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\GetResourceRecordsListRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\GetResourceRecordsListResponse
- Method/Path: GET /v1/dns/records/{domain}

Example input data:
```php
$request = GetResourceRecordsListRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

