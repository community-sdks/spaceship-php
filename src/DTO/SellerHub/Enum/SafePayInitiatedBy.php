<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Enum;

enum SafePayInitiatedBy: string
{
    case SELLER = "seller";
    case BUYER = "buyer";
    case BROKER = "broker";

    public static function fromValue(string $value): self
    {
        return self::from($value);
    }

    public function toValue(): string
    {
        return $this->value;
    }
}
