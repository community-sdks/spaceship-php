# ContactsAttributesService

Manual request DTO construction is required.

## Methods

- `saveContactAttributes`
	Request DTO: `CommunitySDKs\Spaceship\DTO\ContactsAttributes\Request\SaveContactAttributesRequest`
	Response DTO: `CommunitySDKs\Spaceship\DTO\ContactsAttributes\Response\SaveContactAttributesResponse`
	Method/Path: `PUT /v1/contacts/attributes`

- `readAttributeDetails`
	Request DTO: `CommunitySDKs\Spaceship\DTO\ContactsAttributes\Request\ReadAttributeDetailsRequest`
	Response DTO: `CommunitySDKs\Spaceship\DTO\ContactsAttributes\Response\ReadAttributeDetailsResponse`
	Method/Path: `GET /v1/contacts/attributes/{contact}`

## Example

```php
use CommunitySDKs\Spaceship\DTO\ContactsAttributes\Request\ReadAttributeDetailsRequest;
use CommunitySDKs\Spaceship\DTO\ContactsAttributes\Request\SaveContactAttributesRequest;
use CommunitySDKs\Spaceship\DTO\ContactsAttributes\Schema\UsAttributeDetails;

$attributes = new UsAttributeDetails('us', 'P3', 'C11');

$client->contactsAttributes()->saveContactAttributes(new SaveContactAttributesRequest($attributes));
$client->contactsAttributes()->readAttributeDetails(new ReadAttributeDetailsRequest('contact-handle'));
```

