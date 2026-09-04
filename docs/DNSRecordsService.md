# DNSRecordsService

Generated from the bundled `openapi.json`. Optional request arguments default to `null` and are omitted from the wire. Response bodies are hydrated into DTOs; empty responses have `data === null`.

## `saveRecords`

Save resource records

`PUT /v1/dns/records/{domain}`

- Request: `CommunitySDKs\Spaceship\DTO\DNSRecords\Request\SaveRecordsRequest`
- Response: `CommunitySDKs\Spaceship\DTO\DNSRecords\Response\SaveRecordsResponse`
- `data`: `null`
- Exception: `CommunitySDKs\Spaceship\Exception\DNSRecords\SaveRecordsException`
- Scopes: `dnsrecords:write`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `domain` | `string` | yes | The domain whose resource records are being updated. |
| `body` | `CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\RecordsRecordsUpdateModel` | yes | Typed JSON body |

## `deleteRecords`

Delete resource records

`DELETE /v1/dns/records/{domain}`

- Request: `CommunitySDKs\Spaceship\DTO\DNSRecords\Request\DeleteRecordsRequest`
- Response: `CommunitySDKs\Spaceship\DTO\DNSRecords\Response\DeleteRecordsResponse`
- `data`: `null`
- Exception: `CommunitySDKs\Spaceship\Exception\DNSRecords\DeleteRecordsException`
- Scopes: `dnsrecords:write`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `domain` | `string` | yes | The domain whose resource records are being deleted. |
| `body` | `CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsListDeleteItem` | yes | Typed JSON body |

## `getResourceRecordsList`

Get domain resource records list

`GET /v1/dns/records/{domain}`

- Request: `CommunitySDKs\Spaceship\DTO\DNSRecords\Request\GetResourceRecordsListRequest`
- Response: `CommunitySDKs\Spaceship\DTO\DNSRecords\Response\GetResourceRecordsListResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\GetResourceRecordsListResult`
- Exception: `CommunitySDKs\Spaceship\Exception\DNSRecords\GetResourceRecordsListException`
- Scopes: `dnsrecords:read`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `domain` | `string` | yes | The domain whose resource records are being fetched. |
| `take` | `int` | yes | Number of response items per page |
| `skip` | `int` | yes | Number of response items to skip |
| `orderBy` | `array` | no | Specifies fields and order to sort the response items |
