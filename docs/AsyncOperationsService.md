# AsyncOperationsService

Manual request DTO construction is required. The SDK no longer provides generated sample helpers.

## Method

- `getAsyncOperationDetails`
	Request DTO: `CommunitySDKs\Spaceship\DTO\AsyncOperations\Request\GetAsyncOperationDetailsRequest`
	Response DTO: `CommunitySDKs\Spaceship\DTO\AsyncOperations\Response\GetAsyncOperationDetailsResponse`
	Method/Path: `GET /v1/async-operations/{operationId}`

## Example

```php
use CommunitySDKs\Spaceship\DTO\AsyncOperations\Request\GetAsyncOperationDetailsRequest;

$request = new GetAsyncOperationDetailsRequest('operation_123');
$response = $client->asyncOperations()->getAsyncOperationDetails($request);
```

