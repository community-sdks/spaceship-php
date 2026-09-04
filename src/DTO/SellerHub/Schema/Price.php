<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Schema;

class Price
{
    public function __construct(
        public readonly string $amount,
        public readonly \CommunitySDKs\Spaceship\DTO\Common\Schema\Currency $currency
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('amount', $data) ? $data['amount'] : throw new \InvalidArgumentException("Missing required field amount for Price"),
            array_key_exists('currency', $data) ? \CommunitySDKs\Spaceship\DTO\Common\Schema\Currency::fromValue($data['currency']) : throw new \InvalidArgumentException("Missing required field currency for Price")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['amount'] = $this->amount;
        $data['currency'] = $this->currency->toValue();
        return $data;
    }
}
