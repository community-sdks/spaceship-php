# ContactsAttributesService

## saveContactAttributes

- Purpose: Save contact attributes
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\SavecontactattributesRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\SavecontactattributesResponse
- Method/Path: PUT /v1/contacts/attributes

Example input data:
```php
$request = SavecontactattributesRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

## readAttributeDetails

- Purpose: Read attribute details
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\ReadattributedetailsRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\ReadattributedetailsResponse
- Method/Path: GET /v1/contacts/attributes/{contact}

Example input data:
```php
$request = ReadattributedetailsRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

