# AsyncOperationsService

## getAsyncOperationDetails

- Purpose: Obtain async operation details
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\GetAsyncOperationDetailsRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\GetAsyncOperationDetailsResponse
- Method/Path: GET /v1/async-operations/{operationId}

Example input data:
```php
$request = GetAsyncOperationDetailsRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

