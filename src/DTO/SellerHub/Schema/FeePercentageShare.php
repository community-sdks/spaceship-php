<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Schema;

class FeePercentageShare
{
    public function __construct(
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Enum\FeePercentage $seller,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Enum\FeePercentage $buyer
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('seller', $data) ? \CommunitySDKs\Spaceship\DTO\SellerHub\Enum\FeePercentage::fromValue($data['seller']) : throw new \InvalidArgumentException("Missing required field seller for FeePercentageShare"),
            array_key_exists('buyer', $data) ? \CommunitySDKs\Spaceship\DTO\SellerHub\Enum\FeePercentage::fromValue($data['buyer']) : throw new \InvalidArgumentException("Missing required field buyer for FeePercentageShare")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['seller'] = $this->seller->toValue();
        $data['buyer'] = $this->buyer->toValue();
        return $data;
    }
}
