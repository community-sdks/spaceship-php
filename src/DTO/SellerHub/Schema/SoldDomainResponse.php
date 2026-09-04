<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Schema;

class SoldDomainResponse
{
    public function __construct(
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerhubDomainName $name,
        public readonly \CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainNameULabel $unicodeName,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\DisplayName|null $displayName,
        public readonly \CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate|null $saleDateTime,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Price $salePrice,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Price $payout,
        public readonly string $source
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('name', $data) ? \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerhubDomainName::fromValue($data['name']) : throw new \InvalidArgumentException("Missing required field name for SoldDomainResponse"),
            array_key_exists('unicodeName', $data) ? \CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainNameULabel::fromValue($data['unicodeName']) : throw new \InvalidArgumentException("Missing required field unicodeName for SoldDomainResponse"),
            array_key_exists('displayName', $data) ? ($data['displayName'] === null ? null : \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\DisplayName::fromValue($data['displayName'])) : null,
            array_key_exists('saleDateTime', $data) ? ($data['saleDateTime'] === null ? null : \CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate::fromValue($data['saleDateTime'])) : throw new \InvalidArgumentException("Missing required field saleDateTime for SoldDomainResponse"),
            array_key_exists('salePrice', $data) ? \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Price::fromArray($data['salePrice']) : throw new \InvalidArgumentException("Missing required field salePrice for SoldDomainResponse"),
            array_key_exists('payout', $data) ? \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Price::fromArray($data['payout']) : throw new \InvalidArgumentException("Missing required field payout for SoldDomainResponse"),
            array_key_exists('source', $data) ? $data['source'] : throw new \InvalidArgumentException("Missing required field source for SoldDomainResponse")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['name'] = $this->name->toValue();
        $data['unicodeName'] = $this->unicodeName->toValue();
        if ($this->displayName !== null) { $data['displayName'] = $this->displayName->toValue(); }
        if ($this->saleDateTime !== null) { $data['saleDateTime'] = $this->saleDateTime->toValue(); } else { $data['saleDateTime'] = null; }
        $data['salePrice'] = $this->salePrice->toArray();
        $data['payout'] = $this->payout->toArray();
        $data['source'] = $this->source;
        return $data;
    }
}
