<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Request;

use CommunitySDKs\Spaceship\DTO\BaseRequest;
use CommunitySDKs\Spaceship\DTO\SellerHub\Schema\CreateSellerHubDomainRequest as CreateSellerHubDomainRequestBody;

final class CreateSellerHubDomainRequest extends BaseRequest
{
    public function __construct(
        public readonly CreateSellerHubDomainRequestBody $body
    ) {}

    /**
     * @return array<string, scalar|array|null>|null
     */
    public function toBody(): ?array
    {
        return $this->body->toArray();
    }
}
