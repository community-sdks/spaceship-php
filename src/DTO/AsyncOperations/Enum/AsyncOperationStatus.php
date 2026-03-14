<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\AsyncOperations\Enum;

enum AsyncOperationStatus: string
{
    case PENDING = 'pending';
    case FAILED = 'failed';
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
