<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use CommunitySDKs\Spaceship\DTO\SellerHub\Enum\SellerHubDomainStatus;
use CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainNameULabel;
use InvalidArgumentException;

final class SellerHubDomainResponse extends BaseSchema
{
    public function __construct(
        public readonly SellerhubDomainName $name,
        public readonly DomainNameULabel $unicodeName,
        public readonly DisplayName|null $displayName,
        public readonly DomainDescription|null $description,
        public readonly SellerHubDomainStatus $status,
        public readonly Price|null $minPrice,
        public readonly Price|null $binPrice,
        public readonly bool|null $binPriceEnabled,
        public readonly bool|null $minPriceEnabled
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('name', $data) ? ($data['name'] === null ? throw new InvalidArgumentException('Field name cannot be null in SellerHubDomainResponse.') : SellerhubDomainName::fromValue((string) $data['name'])) : throw new InvalidArgumentException('Missing required field name for SellerHubDomainResponse.'),
            array_key_exists('unicodeName', $data) ? ($data['unicodeName'] === null ? throw new InvalidArgumentException('Field unicodeName cannot be null in SellerHubDomainResponse.') : DomainNameULabel::fromValue((string) $data['unicodeName'])) : throw new InvalidArgumentException('Missing required field unicodeName for SellerHubDomainResponse.'),
            array_key_exists('displayName', $data) && $data['displayName'] !== null ? DisplayName::fromValue((string) $data['displayName']) : null,
            array_key_exists('description', $data) && $data['description'] !== null ? DomainDescription::fromValue((string) $data['description']) : null,
            array_key_exists('status', $data) ? ($data['status'] === null ? throw new InvalidArgumentException('Field status cannot be null in SellerHubDomainResponse.') : SellerHubDomainStatus::fromValue((string) $data['status'])) : throw new InvalidArgumentException('Missing required field status for SellerHubDomainResponse.'),
            array_key_exists('minPrice', $data) && $data['minPrice'] !== null ? Price::fromArray((array) $data['minPrice']) : null,
            array_key_exists('binPrice', $data) && $data['binPrice'] !== null ? Price::fromArray((array) $data['binPrice']) : null,
            array_key_exists('binPriceEnabled', $data) && $data['binPriceEnabled'] !== null ? (bool) $data['binPriceEnabled'] : null,
            array_key_exists('minPriceEnabled', $data) && $data['minPriceEnabled'] !== null ? (bool) $data['minPriceEnabled'] : null,        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['name'] = $this->name->toValue();
        $data['unicodeName'] = $this->unicodeName->toValue();
        if ($this->displayName !== null) {
            $data['displayName'] = $this->displayName->toValue();
        }
        if ($this->description !== null) {
            $data['description'] = $this->description->toValue();
        }
        $data['status'] = $this->status->toValue();
        if ($this->minPrice !== null) {
            $data['minPrice'] = $this->minPrice->toArray();
        }
        if ($this->binPrice !== null) {
            $data['binPrice'] = $this->binPrice->toArray();
        }
        if ($this->binPriceEnabled !== null) {
            $data['binPriceEnabled'] = $this->binPriceEnabled;
        }
        if ($this->minPriceEnabled !== null) {
            $data['minPriceEnabled'] = $this->minPriceEnabled;
        }

        return $data;
    }
}