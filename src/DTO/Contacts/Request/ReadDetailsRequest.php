<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Contacts\Request;

use CommunitySDKs\Spaceship\DTO\BaseRequest;

final class ReadDetailsRequest extends BaseRequest
{
    public function __construct(
        public readonly string $contact
    ) {}
}
