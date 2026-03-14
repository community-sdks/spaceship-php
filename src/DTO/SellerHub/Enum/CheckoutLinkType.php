<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Enum;

enum CheckoutLinkType: string
{
    case BUY_NOW = 'buyNow';

    public static function fromValue(string $value): self
    {
        return self::from($value);
    }

    public function toValue(): string
    {
        return $this->value;
    }
}
