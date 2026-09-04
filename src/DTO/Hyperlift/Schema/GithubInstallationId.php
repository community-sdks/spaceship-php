<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Hyperlift\Schema;

final class GithubInstallationId
{
    public function __construct(public readonly int $value) {}

    public static function fromValue(int $value): self
    {
        return new self($value);
    }

    public function toValue(): int
    {
        return $this->value;
    }
}
