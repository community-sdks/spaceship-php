# DNSRecordsService

Manual request DTO construction is required.

## Methods

- `saveRecords`
	Request DTO: `CommunitySDKs\Spaceship\DTO\DNSRecords\Request\SaveRecordsRequest`
	Response DTO: `CommunitySDKs\Spaceship\DTO\DNSRecords\Response\SaveRecordsResponse`
	Method/Path: `PUT /v1/dns/records/{domain}`

- `deleteRecords`
	Request DTO: `CommunitySDKs\Spaceship\DTO\DNSRecords\Request\DeleteRecordsRequest`
	Response DTO: `CommunitySDKs\Spaceship\DTO\DNSRecords\Response\DeleteRecordsResponse`
	Method/Path: `DELETE /v1/dns/records/{domain}`

- `getResourceRecordsList`
	Request DTO: `CommunitySDKs\Spaceship\DTO\DNSRecords\Request\GetResourceRecordsListRequest`
	Response DTO: `CommunitySDKs\Spaceship\DTO\DNSRecords\Response\GetResourceRecordsListResponse`
	Method/Path: `GET /v1/dns/records/{domain}`

## Example

```php
use CommunitySDKs\Spaceship\DTO\DNSRecords\Request\GetResourceRecordsListRequest;

$request = new GetResourceRecordsListRequest('example.com', 50, 0, ['name asc']);
$response = $client->dnsRecords()->getResourceRecordsList($request);
```

