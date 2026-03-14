<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use CommunitySDKs\Spaceship\DTO\SellerHub\Enum\CheckoutLinkType;
use InvalidArgumentException;
final class CreateCheckoutLinkRequest extends BaseSchema
{
    public function __construct(
        public readonly CheckoutLinkType $type,
        public readonly Price|null $basePrice,
        public readonly SellerhubDomainName $domainName
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in CreateCheckoutLinkRequest.') : CheckoutLinkType::fromValue((string) $data['type'])) : throw new InvalidArgumentException('Missing required field type for CreateCheckoutLinkRequest.'),
            array_key_exists('basePrice', $data) && $data['basePrice'] !== null ? Price::fromArray((array) $data['basePrice']) : null,
            array_key_exists('domainName', $data) ? ($data['domainName'] === null ? throw new InvalidArgumentException('Field domainName cannot be null in CreateCheckoutLinkRequest.') : SellerhubDomainName::fromValue((string) $data['domainName'])) : throw new InvalidArgumentException('Missing required field domainName for CreateCheckoutLinkRequest.'),        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['type'] = $this->type->toValue();
        if ($this->basePrice !== null) {
            $data['basePrice'] = $this->basePrice->toArray();
        }
        $data['domainName'] = $this->domainName->toValue();

        return $data;
    }
}