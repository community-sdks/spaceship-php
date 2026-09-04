# ContactsAttributesService

Generated from the bundled `openapi.json`. Optional request arguments default to `null` and are omitted from the wire. Response bodies are hydrated into DTOs; empty responses have `data === null`.

## `saveContactAttributes`

Save contact attributes

`PUT /v1/contacts/attributes`

- Request: `CommunitySDKs\Spaceship\DTO\ContactsAttributes\Request\SaveContactAttributesRequest`
- Response: `CommunitySDKs\Spaceship\DTO\ContactsAttributes\Response\SaveContactAttributesResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\ContactsAttributes\Schema\AttributesContactsAttributesResponse`
- Exception: `CommunitySDKs\Spaceship\Exception\ContactsAttributes\SaveContactAttributesException`
- Scopes: `contacts:write`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `body` | `CommunitySDKs\Spaceship\DTO\ContactsAttributes\Schema\AttributeDetails` | yes | Typed JSON body |

## `readAttributeDetails`

Read attribute details

`GET /v1/contacts/attributes/{contact}`

- Request: `CommunitySDKs\Spaceship\DTO\ContactsAttributes\Request\ReadAttributeDetailsRequest`
- Response: `CommunitySDKs\Spaceship\DTO\ContactsAttributes\Response\ReadAttributeDetailsResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\ContactsAttributes\Schema\AttributeDetails`
- Exception: `CommunitySDKs\Spaceship\Exception\ContactsAttributes\ReadAttributeDetailsException`
- Scopes: `contacts:read`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `contact` | `string` | yes |  |
