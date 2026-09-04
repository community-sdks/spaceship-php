<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\AsyncOperations\Schema;

final class AsyncOperationDetails
{
    /** @param array<string, mixed> $items */
    public function __construct(public readonly array $items = []) {}

    public static function fromArray(array $data): self
    {
        return new self($data);
    }

    public function toArray(): array
    {
        return $this->items;
    }
}
