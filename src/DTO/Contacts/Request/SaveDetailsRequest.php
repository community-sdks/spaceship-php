<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Contacts\Request;

final class SaveDetailsRequest extends \CommunitySDKs\Spaceship\DTO\BaseRequest
{
    public function __construct(
        public readonly \CommunitySDKs\Spaceship\DTO\Contacts\Schema\ContactDetails $body
    ) {

    }

    public function toBody(): ?array
    {
        return $this->body->toArray();
    }
}
