<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Enum;

enum SafePaySaleStatus: string
{
    case SALE_PROCESSING = "saleProcessing";
    case LEASE_ACTIVE = "leaseActive";
    case SOLD = "sold";
    case CANCELLED_PAYMENT_DENIED = "cancelledPaymentDenied";
    case CANCELLED_DOMAIN_NOT_DELIVERED = "cancelledDomainNotDelivered";
    case LEASE_CANCELLED_NO_PAYMENT = "leaseCancelledNoPayment";
    case LEASE_CANCELLED_BY_BUYER = "leaseCancelledByBuyer";

    public static function fromValue(string $value): self
    {
        return self::from($value);
    }

    public function toValue(): string
    {
        return $this->value;
    }
}
