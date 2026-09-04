<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Request;

final class CreateSellerHubDomainRequest extends \CommunitySDKs\Spaceship\DTO\BaseRequest
{
    public function __construct(
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\CreateSellerHubDomainRequest $body
    ) {

    }

    public function toBody(): ?array
    {
        return $this->body->toArray();
    }
}
