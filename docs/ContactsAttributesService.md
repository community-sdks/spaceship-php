# ContactsAttributesService

## saveContactAttributes

- Purpose: Save contact attributes
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\SaveContactAttributesRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\SaveContactAttributesResponse
- Method/Path: PUT /v1/contacts/attributes

Example input data:
```php
$request = SaveContactAttributesRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## readAttributeDetails

- Purpose: Read attribute details
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\ReadAttributeDetailsRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\ReadAttributeDetailsResponse
- Method/Path: GET /v1/contacts/attributes/{contact}

Example input data:
```php
$request = ReadAttributeDetailsRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

