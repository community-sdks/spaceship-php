# AsyncOperationsService

## getAsyncOperationDetails

- Purpose: Obtain async operation details
- Request DTO: CommunitySDKs\Spaceship\DTO\Request\GetasyncoperationdetailsRequest
- Response DTO: CommunitySDKs\Spaceship\DTO\Response\GetasyncoperationdetailsResponse
- Method/Path: GET /v1/async-operations/{operationId}

Example input data:
```php
$request = GetasyncoperationdetailsRequest::sample();
```

Example output JSON:
```json
{"ok": true}
```

