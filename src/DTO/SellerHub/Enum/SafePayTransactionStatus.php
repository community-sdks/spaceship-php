<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Enum;

enum SafePayTransactionStatus: string
{
    case ACTIVE = "active";
    case PENDING_SELLER_CONFIRM = "pendingSellerConfirm";
    case PENDING_BUYER_CONFIRM = "pendingBuyerConfirm";
    case PROCESSING = "processing";
    case VERIFICATION = "verification";
    case DEACTIVATED = "deactivated";
    case PURCHASED = "purchased";
    case EXPIRED = "expired";

    public static function fromValue(string $value): self
    {
        return self::from($value);
    }

    public function toValue(): string
    {
        return $this->value;
    }
}
