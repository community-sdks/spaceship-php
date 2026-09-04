<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Enum;

enum FeePercentage: int
{
    case VALUE_0 = 0;
    case VALUE_25 = 25;
    case VALUE_50 = 50;
    case VALUE_75 = 75;
    case VALUE_100 = 100;

    public static function fromValue(int $value): self
    {
        return self::from($value);
    }

    public function toValue(): int
    {
        return $this->value;
    }
}
