<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use CommunitySDKs\Spaceship\DTO\Common\Schema\Currency;
use InvalidArgumentException;

final class DomainPriceDetails extends BaseSchema
{
    public function __construct(
        public readonly string $operation,
        public readonly float $price,
        public readonly Currency $currency
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('operation', $data) ? ($data['operation'] === null ? throw new InvalidArgumentException('Field operation cannot be null in DomainPriceDetails.') : (string) $data['operation']) : throw new InvalidArgumentException('Missing required field operation for DomainPriceDetails.'),
            array_key_exists('price', $data) ? ($data['price'] === null ? throw new InvalidArgumentException('Field price cannot be null in DomainPriceDetails.') : (float) $data['price']) : throw new InvalidArgumentException('Missing required field price for DomainPriceDetails.'),
            array_key_exists('currency', $data) ? ($data['currency'] === null ? throw new InvalidArgumentException('Field currency cannot be null in DomainPriceDetails.') : Currency::fromValue((string) $data['currency'])) : throw new InvalidArgumentException('Missing required field currency for DomainPriceDetails.'),        );
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