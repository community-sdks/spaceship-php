<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Hyperlift\Request;

final class BuildHyperliftApplicationRequest extends \CommunitySDKs\Spaceship\DTO\BaseRequest
{
    public function __construct(
        public readonly string $id
    ) {

    }
}
