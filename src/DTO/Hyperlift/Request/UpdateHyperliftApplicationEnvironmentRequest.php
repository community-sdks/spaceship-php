<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Hyperlift\Request;

final class UpdateHyperliftApplicationEnvironmentRequest extends \CommunitySDKs\Spaceship\DTO\BaseRequest
{
    public function __construct(
        public readonly string $id,
        public readonly \CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\EnvironmentVariables $body
    ) {

    }

    public function toBody(): ?array
    {
        return $this->body->toArray();
    }
}
