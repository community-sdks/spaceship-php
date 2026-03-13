<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Schema;

final class Domainsuspensiondetails
{
    /**
     * @param array<string, scalar|array|null> $data
     */
    public function __construct(public readonly array $data)
    {
    }

    /**
     * @param array<string, scalar|array|null> $data
     */
    public static function fromArray(array $data): self
    {
        return new self($data);
    }

    /**
     * @return array<string, scalar|array|null>
     */
    public function toArray(): array
    {
        return $this->data;
    }

    public static function sample(): self
    {
        return new self([]);
    }
}
