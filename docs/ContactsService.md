# ContactsService

Generated from the bundled `openapi.json`. Optional request arguments default to `null` and are omitted from the wire. Response bodies are hydrated into DTOs; empty responses have `data === null`.

## `saveDetails`

Save contact details

`PUT /v1/contacts`

- Request: `CommunitySDKs\Spaceship\DTO\Contacts\Request\SaveDetailsRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Contacts\Response\SaveDetailsResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\Contacts\Schema\ContactsSaveResponse`
- Exception: `CommunitySDKs\Spaceship\Exception\Contacts\SaveDetailsException`
- Scopes: `contacts:write`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `body` | `CommunitySDKs\Spaceship\DTO\Contacts\Schema\ContactDetails` | yes | Typed JSON body |

## `readDetails`

Read contact details

`GET /v1/contacts/{contact}`

- Request: `CommunitySDKs\Spaceship\DTO\Contacts\Request\ReadDetailsRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Contacts\Response\ReadDetailsResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\Contacts\Schema\ContactDetails`
- Exception: `CommunitySDKs\Spaceship\Exception\Contacts\ReadDetailsException`
- Scopes: `contacts:read`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `contact` | `string` | yes |  |
