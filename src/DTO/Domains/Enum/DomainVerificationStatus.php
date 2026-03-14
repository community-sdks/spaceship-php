<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Enum;

enum DomainVerificationStatus: string
{
    case VERIFICATION = 'verification';
    case SUCCESS = 'success';
    case FAILED = 'failed';

    public static function fromValue(string $value): self
    {
        return self::from($value);
    }

    public function toValue(): string
    {
        return $this->value;
    }
}
