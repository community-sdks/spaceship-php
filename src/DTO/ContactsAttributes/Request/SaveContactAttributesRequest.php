<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\ContactsAttributes\Request;

use CommunitySDKs\Spaceship\DTO\BaseRequest;
use CommunitySDKs\Spaceship\DTO\ContactsAttributes\Schema\AttributeDetails;

final class SaveContactAttributesRequest extends BaseRequest
{
    public function __construct(
        public readonly AttributeDetails $body
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
