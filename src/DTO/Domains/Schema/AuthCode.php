<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

final class AuthCode
{
    public function __construct(public readonly string $value) {}

    public static function fromValue(string $value): self
    {
        return new self($value);
    }

    public function toValue(): string
    {
        return $this->value;
    }
}
