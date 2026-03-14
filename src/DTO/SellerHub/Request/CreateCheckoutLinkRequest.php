<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Request;

use CommunitySDKs\Spaceship\DTO\BaseRequest;
use CommunitySDKs\Spaceship\DTO\SellerHub\Schema\CreateCheckoutLinkRequest as CreateCheckoutLinkRequestBody;

final class CreateCheckoutLinkRequest extends BaseRequest
{
    public function __construct(
        public readonly CreateCheckoutLinkRequestBody $body
    ) {
    }
    /**
     * @return array<string, scalar|array|null>|null
     */
    public function toBody(): ?array
    {
        return $this->body->toArray();
    }
}
