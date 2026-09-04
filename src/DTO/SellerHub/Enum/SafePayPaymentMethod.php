<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Enum;

enum SafePayPaymentMethod: string
{
    case BTC_PAY = "btcPay";
    case WIRE_TRANSFER = "wireTransfer";
    case CREDIT_CARD = "creditCard";
    case PAY_PAL = "payPal";
    case ALIPAY = "alipay";

    public static function fromValue(string $value): self
    {
        return self::from($value);
    }

    public function toValue(): string
    {
        return $this->value;
    }
}
