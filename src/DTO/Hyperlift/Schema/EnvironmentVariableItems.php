<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Hyperlift\Schema;

final class EnvironmentVariableItems
{
    /** @param array<string, \CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\EnvironmentVariableValue> $items */
    public function __construct(public readonly array $items = []) { foreach ($items as $item) { \CommunitySDKs\Spaceship\DTO\ValueValidator::check($item, 'CommunitySDKs\\Spaceship\\DTO\\Hyperlift\\Schema\\EnvironmentVariableValue'); } }

    public static function fromArray(array $data): self
    {
        return new self(array_map(static fn ($item) => \CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\EnvironmentVariableValue::fromValue($item), $data));
    }

    public function toArray(): array
    {
        return array_map(static fn ($item) => $item->toValue(), $this->items);
    }
}
