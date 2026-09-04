# AsyncOperationsService

Generated from the bundled `openapi.json`. Optional request arguments default to `null` and are omitted from the wire. Response bodies are hydrated into DTOs; empty responses have `data === null`.

## `getAsyncOperationDetails`

Obtain async operation details

`GET /v1/async-operations/{operationId}`

- Request: `CommunitySDKs\Spaceship\DTO\AsyncOperations\Request\GetAsyncOperationDetailsRequest`
- Response: `CommunitySDKs\Spaceship\DTO\AsyncOperations\Response\GetAsyncOperationDetailsResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\AsyncOperations\Schema\AsyncOperationData`
- Exception: `CommunitySDKs\Spaceship\Exception\AsyncOperations\GetAsyncOperationDetailsException`
- Scopes: `asyncoperations:read`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `operationId` | `string` | yes | Unique ID of async operation |
