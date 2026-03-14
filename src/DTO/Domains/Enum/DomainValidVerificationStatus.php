<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Enum;

enum DomainValidVerificationStatus: string
{
    case VERIFICATION = 'verification';
    case SUCCESS = 'success';

    public static function fromValue(string $value): self
    {
        return self::from($value);
    }

    public function toValue(): string
    {
        return $this->value;
    }
}
