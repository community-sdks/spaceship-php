<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use CommunitySDKs\Spaceship\DTO\Common\Schema\Currency;

final class PriceUpdate extends BaseSchema
{
    public function __construct(
        public readonly string|null $amount,
        public readonly Currency|null $currency
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('amount', $data) && $data['amount'] !== null ? (string) $data['amount'] : null,
            array_key_exists('currency', $data) && $data['currency'] !== null ? Currency::fromValue((string) $data['currency']) : null,        );
    }

    public function toArray(): array
    {
        $data = [];
        if ($this->amount !== null) {
            $data['amount'] = $this->amount;
        }
        if ($this->currency !== null) {
            $data['currency'] = $this->currency->toValue();
        }

        return $data;
    }
}