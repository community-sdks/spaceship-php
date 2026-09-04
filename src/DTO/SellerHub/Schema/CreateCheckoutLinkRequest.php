<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Schema;

class CreateCheckoutLinkRequest
{
    public function __construct(
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Enum\CheckoutLinkType $type,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Price|null $basePrice,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerhubDomainName $domainName,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\FeePercentageShare|null $feePercentageShare = null
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? \CommunitySDKs\Spaceship\DTO\SellerHub\Enum\CheckoutLinkType::fromValue($data['type']) : throw new \InvalidArgumentException("Missing required field type for CreateCheckoutLinkRequest"),
            array_key_exists('basePrice', $data) ? ($data['basePrice'] === null ? null : \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Price::fromArray($data['basePrice'])) : null,
            array_key_exists('domainName', $data) ? \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerhubDomainName::fromValue($data['domainName']) : throw new \InvalidArgumentException("Missing required field domainName for CreateCheckoutLinkRequest"),
            array_key_exists('feePercentageShare', $data) ? ($data['feePercentageShare'] === null ? null : \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\FeePercentageShare::fromArray($data['feePercentageShare'])) : null
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['type'] = $this->type->toValue();
        if ($this->basePrice !== null) { $data['basePrice'] = $this->basePrice->toArray(); }
        $data['domainName'] = $this->domainName->toValue();
        if ($this->feePercentageShare !== null) { $data['feePercentageShare'] = $this->feePercentageShare->toArray(); }
        return $data;
    }
}
