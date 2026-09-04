<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Request;

final class CreateSafePayTransactionRequest extends \CommunitySDKs\Spaceship\DTO\BaseRequest
{
    public function __construct(
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\CreateSafePayTransactionRequest $body
    ) {

    }

    public function toBody(): ?array
    {
        return $this->body->toArray();
    }
}
