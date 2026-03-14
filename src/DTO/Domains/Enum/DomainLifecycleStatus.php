<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Enum;

enum DomainLifecycleStatus: string
{
    case CREATING = 'creating';
    case REGISTERED = 'registered';
    case GRACE1 = 'grace1';
    case GRACE2 = 'grace2';
    case REDEMPTION = 'redemption';

    public static function fromValue(string $value): self
    {
        return self::from($value);
    }

    public function toValue(): string
    {
        return $this->value;
    }
}
