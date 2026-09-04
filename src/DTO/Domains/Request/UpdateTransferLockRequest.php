<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Request;

final class UpdateTransferLockRequest extends \CommunitySDKs\Spaceship\DTO\BaseRequest
{
    public function __construct(
        public readonly string $domain,
        public readonly \CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsDomainTransferLock $body
    ) {

    }

    public function toBody(): ?array
    {
        return $this->body->toArray();
    }
}
