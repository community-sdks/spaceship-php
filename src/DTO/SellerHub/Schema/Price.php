<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use CommunitySDKs\Spaceship\DTO\Common\Schema\Currency;
use InvalidArgumentException;

final class Price extends BaseSchema
{
    public function __construct(
        public readonly string $amount,
        public readonly Currency $currency
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('amount', $data) ? ($data['amount'] === null ? throw new InvalidArgumentException('Field amount cannot be null in Price.') : (string) $data['amount']) : throw new InvalidArgumentException('Missing required field amount for Price.'),
            array_key_exists('currency', $data) ? ($data['currency'] === null ? throw new InvalidArgumentException('Field currency cannot be null in Price.') : Currency::fromValue((string) $data['currency'])) : throw new InvalidArgumentException('Missing required field currency for Price.'),        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['amount'] = $this->amount;
        $data['currency'] = $this->currency->toValue();

        return $data;
    }
}