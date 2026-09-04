<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Schema;

class SafePayTransactionUrls
{
    public function __construct(
        public readonly string $seller,
        public readonly string $buyer
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('seller', $data) ? $data['seller'] : throw new \InvalidArgumentException("Missing required field seller for SafePayTransactionUrls"),
            array_key_exists('buyer', $data) ? $data['buyer'] : throw new \InvalidArgumentException("Missing required field buyer for SafePayTransactionUrls")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['seller'] = $this->seller;
        $data['buyer'] = $this->buyer;
        return $data;
    }
}
