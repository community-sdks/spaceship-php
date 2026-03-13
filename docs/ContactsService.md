# ContactsService

## saveDetails

- Purpose: Save contact details
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\SavedetailsRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\SavedetailsResponse
- Method/Path: PUT /v1/contacts

Example input data:
```php
$request = SavedetailsRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## readDetails

- Purpose: Read contact details
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\ReaddetailsRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\ReaddetailsResponse
- Method/Path: GET /v1/contacts/{contact}

Example input data:
```php
$request = ReaddetailsRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

