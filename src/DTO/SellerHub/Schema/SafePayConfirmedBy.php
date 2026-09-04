<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Schema;

class SafePayConfirmedBy
{
    public function __construct(
        public readonly bool $seller,
        public readonly bool $buyer
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('seller', $data) ? $data['seller'] : throw new \InvalidArgumentException("Missing required field seller for SafePayConfirmedBy"),
            array_key_exists('buyer', $data) ? $data['buyer'] : throw new \InvalidArgumentException("Missing required field buyer for SafePayConfirmedBy")
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
