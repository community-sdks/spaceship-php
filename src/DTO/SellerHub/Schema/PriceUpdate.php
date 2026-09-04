<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Schema;

class PriceUpdate
{
    public function __construct(
        public readonly string|null $amount = null,
        public readonly \CommunitySDKs\Spaceship\DTO\Common\Schema\Currency|null $currency = null
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('amount', $data) ? ($data['amount'] === null ? null : $data['amount']) : null,
            array_key_exists('currency', $data) ? ($data['currency'] === null ? null : \CommunitySDKs\Spaceship\DTO\Common\Schema\Currency::fromValue($data['currency'])) : null
        );
    }

    public function toArray(): array
    {
        $data = [];
        if ($this->amount !== null) { $data['amount'] = $this->amount; }
        if ($this->currency !== null) { $data['currency'] = $this->currency->toValue(); }
        return $data;
    }
}
