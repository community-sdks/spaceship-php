# ContactsService

Manual request DTO construction is required.

## Methods

- `saveDetails`
	Request DTO: `CommunitySDKs\Spaceship\DTO\Contacts\Request\SaveDetailsRequest`
	Response DTO: `CommunitySDKs\Spaceship\DTO\Contacts\Response\SaveDetailsResponse`
	Method/Path: `PUT /v1/contacts`

- `readDetails`
	Request DTO: `CommunitySDKs\Spaceship\DTO\Contacts\Request\ReadDetailsRequest`
	Response DTO: `CommunitySDKs\Spaceship\DTO\Contacts\Response\ReadDetailsResponse`
	Method/Path: `GET /v1/contacts/{contact}`

## Example

```php
use CommunitySDKs\Spaceship\DTO\Contacts\Request\ReadDetailsRequest;
use CommunitySDKs\Spaceship\DTO\Contacts\Request\SaveDetailsRequest;
use CommunitySDKs\Spaceship\DTO\Contacts\Schema\ContactDetails;
use CommunitySDKs\Spaceship\DTO\Contacts\Schema\CountryCode;
use CommunitySDKs\Spaceship\DTO\Contacts\Schema\Phone;

$details = new ContactDetails(
		'Jane',
		'Doe',
		'Example LLC',
		'jane@example.com',
		'123 Example Street',
		null,
		'Phoenix',
		CountryCode::fromValue('US'),
		'AZ',
		'85001',
		Phone::fromValue('+14805550100'),
		null,
		null,
		null,
		null,
);

$client->contacts()->saveDetails(new SaveDetailsRequest($details));
$client->contacts()->readDetails(new ReadDetailsRequest('contact-handle')); 
```

