<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Schema;

class SafePayLtoSettings
{
    public function __construct(
        public readonly int $downPaymentPercentage,
        public readonly int $installmentPeriods
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('downPaymentPercentage', $data) ? $data['downPaymentPercentage'] : throw new \InvalidArgumentException("Missing required field downPaymentPercentage for SafePayLtoSettings"),
            array_key_exists('installmentPeriods', $data) ? $data['installmentPeriods'] : throw new \InvalidArgumentException("Missing required field installmentPeriods for SafePayLtoSettings")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['downPaymentPercentage'] = $this->downPaymentPercentage;
        $data['installmentPeriods'] = $this->installmentPeriods;
        return $data;
    }
}
