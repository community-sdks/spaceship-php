<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\ContactsAttributes\Request;

use CommunitySDKs\Spaceship\DTO\BaseRequest;

final class ReadAttributeDetailsRequest extends BaseRequest
{
    public function __construct(
        public readonly string $contact
    ) {}
}
