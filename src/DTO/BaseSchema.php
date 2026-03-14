<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO;

abstract class BaseSchema
{
    public function __construct(public readonly string $value)
    {
    }

    public static function fromValue(string $value): static
    {
        return new static($value);
    }

    public function toValue(): string
    {
        return $this->value;
    }
}