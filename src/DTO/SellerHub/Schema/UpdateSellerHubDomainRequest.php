<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;

final class UpdateSellerHubDomainRequest extends BaseSchema
{
    public function __construct(
        public readonly DomainDescription|null $description,
        public readonly DisplayName|null $displayName,
        public readonly bool|null $binPriceEnabled,
        public readonly PriceUpdate|null $binPrice,
        public readonly bool|null $minPriceEnabled,
        public readonly PriceUpdate|null $minPrice
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('description', $data) && $data['description'] !== null ? DomainDescription::fromValue((string) $data['description']) : null,
            array_key_exists('displayName', $data) && $data['displayName'] !== null ? DisplayName::fromValue((string) $data['displayName']) : null,
            array_key_exists('binPriceEnabled', $data) && $data['binPriceEnabled'] !== null ? (bool) $data['binPriceEnabled'] : null,
            array_key_exists('binPrice', $data) && $data['binPrice'] !== null ? PriceUpdate::fromArray((array) $data['binPrice']) : null,
            array_key_exists('minPriceEnabled', $data) && $data['minPriceEnabled'] !== null ? (bool) $data['minPriceEnabled'] : null,
            array_key_exists('minPrice', $data) && $data['minPrice'] !== null ? PriceUpdate::fromArray((array) $data['minPrice']) : null,
        );
    }

    public function toArray(): array
    {
        $data = [];
        if ($this->description !== null) {
            $data['description'] = $this->description->toValue();
        }
        if ($this->displayName !== null) {
            $data['displayName'] = $this->displayName->toValue();
        }
        if ($this->binPriceEnabled !== null) {
            $data['binPriceEnabled'] = $this->binPriceEnabled;
        }
        if ($this->binPrice !== null) {
            $data['binPrice'] = $this->binPrice->toArray();
        }
        if ($this->minPriceEnabled !== null) {
            $data['minPriceEnabled'] = $this->minPriceEnabled;
        }
        if ($this->minPrice !== null) {
            $data['minPrice'] = $this->minPrice->toArray();
        }

        return $data;
    }
}