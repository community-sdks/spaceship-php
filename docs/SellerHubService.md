# SellerHubService

Manual request DTO construction is required.

## Methods

- `createCheckoutLink` -> `CommunitySDKs\Spaceship\DTO\SellerHub\Request\CreateCheckoutLinkRequest` -> `CommunitySDKs\Spaceship\DTO\SellerHub\Response\CreateCheckoutLinkResponse` -> `POST /v1/sellerhub/checkout-links`
- `getSellerHubDomainList` -> `CommunitySDKs\Spaceship\DTO\SellerHub\Request\GetSellerHubDomainListRequest` -> `CommunitySDKs\Spaceship\DTO\SellerHub\Response\GetSellerHubDomainListResponse` -> `GET /v1/sellerhub/domains`
- `createSellerHubDomain` -> `CommunitySDKs\Spaceship\DTO\SellerHub\Request\CreateSellerHubDomainRequest` -> `CommunitySDKs\Spaceship\DTO\SellerHub\Response\CreateSellerHubDomainResponse` -> `POST /v1/sellerhub/domains`
- `getSellerHubDomain` -> `CommunitySDKs\Spaceship\DTO\SellerHub\Request\GetSellerHubDomainRequest` -> `CommunitySDKs\Spaceship\DTO\SellerHub\Response\GetSellerHubDomainResponse` -> `GET /v1/sellerhub/domains/{domain}`
- `updateSellerHubDomain` -> `CommunitySDKs\Spaceship\DTO\SellerHub\Request\UpdateSellerHubDomainRequest` -> `CommunitySDKs\Spaceship\DTO\SellerHub\Response\UpdateSellerHubDomainResponse` -> `PATCH /v1/sellerhub/domains/{domain}`
- `deleteSellerHubDomain` -> `CommunitySDKs\Spaceship\DTO\SellerHub\Request\DeleteSellerHubDomainRequest` -> `CommunitySDKs\Spaceship\DTO\SellerHub\Response\DeleteSellerHubDomainResponse` -> `DELETE /v1/sellerhub/domains/{domain}`
- `getVerificationRecords` -> `CommunitySDKs\Spaceship\DTO\SellerHub\Request\GetVerificationRecordsRequest` -> `CommunitySDKs\Spaceship\DTO\SellerHub\Response\GetVerificationRecordsResponse` -> `GET /v1/sellerhub/verification-records`

## Example

```php
use CommunitySDKs\Spaceship\DTO\Common\Schema\Currency;
use CommunitySDKs\Spaceship\DTO\SellerHub\Request\CreateCheckoutLinkRequest;
use CommunitySDKs\Spaceship\DTO\SellerHub\Request\GetSellerHubDomainListRequest;
use CommunitySDKs\Spaceship\DTO\SellerHub\Enum\CheckoutLinkType;
use CommunitySDKs\Spaceship\DTO\SellerHub\Schema\CreateCheckoutLinkRequest as CreateCheckoutLinkBody;
use CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Price;
use CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerhubDomainName;

$client->sellerhub()->getSellerHubDomainList(new GetSellerHubDomainListRequest(20, 0));
$client->sellerhub()->createCheckoutLink(
	new CreateCheckoutLinkRequest(
		new CreateCheckoutLinkBody(
			CheckoutLinkType::fromValue('buyNow'),
			new Price('12.99', Currency::fromValue('USD')),
			SellerhubDomainName::fromValue('example.com'),
		)
	)
);
```

