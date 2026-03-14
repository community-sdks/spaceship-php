<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Request;

use CommunitySDKs\Spaceship\DTO\BaseRequest;
use CommunitySDKs\Spaceship\DTO\SellerHub\Schema\UpdateSellerHubDomainRequest as UpdateSellerHubDomainRequestBody;

final class UpdateSellerHubDomainRequest extends BaseRequest
{
    public function __construct(
        public readonly string $domain,
        public readonly UpdateSellerHubDomainRequestBody $body
    ) {}

    /**
     * @return array<string, scalar|array|null>|null
     */
    public function toBody(): ?array
    {
        return $this->body->toArray();
    }
}
