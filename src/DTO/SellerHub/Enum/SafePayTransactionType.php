<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Enum;

enum SafePayTransactionType: string
{
    case BUY_NOW = "buyNow";
    case LEASE_TO_OWN = "leaseToOwn";

    public static function fromValue(string $value): self
    {
        return self::from($value);
    }

    public function toValue(): string
    {
        return $this->value;
    }
}
