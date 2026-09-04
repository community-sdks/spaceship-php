<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Contacts\Request;

final class ReadDetailsRequest extends \CommunitySDKs\Spaceship\DTO\BaseRequest
{
    public function __construct(
        public readonly string $contact
    ) {

    }
}
