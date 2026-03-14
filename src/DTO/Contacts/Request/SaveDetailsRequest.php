<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Contacts\Request;

use CommunitySDKs\Spaceship\DTO\BaseRequest;
use CommunitySDKs\Spaceship\DTO\Contacts\Schema\ContactDetails;

final class SaveDetailsRequest extends BaseRequest
{
    public function __construct(
        public readonly ContactDetails $body
    ) {}

    /**
     * @return array<string, scalar|array|null>|null
     */
    public function toBody(): ?array
    {
        return $this->body->toArray();
    }
}
