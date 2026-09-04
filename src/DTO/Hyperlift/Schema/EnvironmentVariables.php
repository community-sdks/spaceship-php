<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Hyperlift\Schema;

class EnvironmentVariables
{
    public function __construct(
        public readonly \CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\EnvironmentVariableItems $items
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('items', $data) ? \CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\EnvironmentVariableItems::fromArray($data['items']) : throw new \InvalidArgumentException("Missing required field items for EnvironmentVariables")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['items'] = (object) $this->items->toArray();
        return $data;
    }
}
