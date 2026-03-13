# ContactsService

## saveDetails

- Purpose: Save contact details
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\SaveDetailsRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\SaveDetailsResponse
- Method/Path: PUT /v1/contacts

Example input data:
```php
$request = SaveDetailsRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## readDetails

- Purpose: Read contact details
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\ReadDetailsRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\ReadDetailsResponse
- Method/Path: GET /v1/contacts/{contact}

Example input data:
```php
$request = ReadDetailsRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

