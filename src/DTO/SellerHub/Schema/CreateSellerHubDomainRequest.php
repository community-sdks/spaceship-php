<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Schema;

class CreateSellerHubDomainRequest
{
    public function __construct(
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\DomainDescription|null $description,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\DisplayName|null $displayName,
        public readonly bool|null $binPriceEnabled,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Price|null $binPrice,
        public readonly bool|null $minPriceEnabled,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Price|null $minPrice,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerhubDomainName $name
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('description', $data) ? ($data['description'] === null ? null : \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\DomainDescription::fromValue($data['description'])) : null,
            array_key_exists('displayName', $data) ? ($data['displayName'] === null ? null : \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\DisplayName::fromValue($data['displayName'])) : null,
            array_key_exists('binPriceEnabled', $data) ? ($data['binPriceEnabled'] === null ? null : $data['binPriceEnabled']) : null,
            array_key_exists('binPrice', $data) ? ($data['binPrice'] === null ? null : \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Price::fromArray($data['binPrice'])) : null,
            array_key_exists('minPriceEnabled', $data) ? ($data['minPriceEnabled'] === null ? null : $data['minPriceEnabled']) : null,
            array_key_exists('minPrice', $data) ? ($data['minPrice'] === null ? null : \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Price::fromArray($data['minPrice'])) : null,
            array_key_exists('name', $data) ? \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerhubDomainName::fromValue($data['name']) : throw new \InvalidArgumentException("Missing required field name for CreateSellerHubDomainRequest")
        );
    }

    public function toArray(): array
    {
        $data = [];
        if ($this->description !== null) { $data['description'] = $this->description->toValue(); }
        if ($this->displayName !== null) { $data['displayName'] = $this->displayName->toValue(); }
        if ($this->binPriceEnabled !== null) { $data['binPriceEnabled'] = $this->binPriceEnabled; }
        if ($this->binPrice !== null) { $data['binPrice'] = $this->binPrice->toArray(); }
        if ($this->minPriceEnabled !== null) { $data['minPriceEnabled'] = $this->minPriceEnabled; }
        if ($this->minPrice !== null) { $data['minPrice'] = $this->minPrice->toArray(); }
        $data['name'] = $this->name->toValue();
        return $data;
    }
}
