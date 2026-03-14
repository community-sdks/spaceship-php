<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Enum;

enum DomainTransferStatus: string
{
    case PENDING = 'pending';
    case COMPLETED = 'completed';
    case CANCELLED = 'cancelled';

    public static function fromValue(string $value): self
    {
        return self::from($value);
    }

    public function toValue(): string
    {
        return $this->value;
    }
}
