<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\ContactsAttributes\Request;

final class SaveContactAttributesRequest extends \CommunitySDKs\Spaceship\DTO\BaseRequest
{
    public function __construct(
        public readonly \CommunitySDKs\Spaceship\DTO\ContactsAttributes\Schema\AttributeDetails $body
    ) {

    }

    public function toBody(): ?array
    {
        return $this->body->toArray();
    }
}
