<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Enum;

enum SellerHubDomainStatus: string
{
    case FAILED = 'failed';
    case VERIFYING = 'verifying';
    case ON_SALE = 'onSale';
    case ON_SALE_STOPPED = 'onSaleStopped';
    case SALE_PROCESSING = 'saleProcessing';
    case LEASE_ACTIVE = 'leaseActive';
    case SOLD = 'sold';

    public static function fromValue(string $value): self
    {
        return self::from($value);
    }

    public function toValue(): string
    {
        return $this->value;
    }
}
