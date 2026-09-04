<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

class DomainPriceDetails
{
    public function __construct(
        public readonly string $operation,
        public readonly float $price,
        public readonly \CommunitySDKs\Spaceship\DTO\Common\Schema\Currency $currency
    ) {
        if ($operation !== null && !in_array($operation, ["register", "transfer", "renew", "restore"], true)) { throw new \InvalidArgumentException("Invalid operation"); }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('operation', $data) ? $data['operation'] : throw new \InvalidArgumentException("Missing required field operation for DomainPriceDetails"),
            array_key_exists('price', $data) ? $data['price'] : throw new \InvalidArgumentException("Missing required field price for DomainPriceDetails"),
            array_key_exists('currency', $data) ? \CommunitySDKs\Spaceship\DTO\Common\Schema\Currency::fromValue($data['currency']) : throw new \InvalidArgumentException("Missing required field currency for DomainPriceDetails")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['operation'] = $this->operation;
        $data['price'] = $this->price;
        $data['currency'] = $this->currency->toValue();
        return $data;
    }
}
