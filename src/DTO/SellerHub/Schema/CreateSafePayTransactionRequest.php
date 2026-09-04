<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Schema;

class CreateSafePayTransactionRequest
{
    public function __construct(
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerhubDomainName $domainName,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Enum\SafePayInitiatedBy $initiatedBy,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Price $basePrice,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Enum\SafePayTransactionType $type,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SafePayLtoSettings|null $ltoSettings,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\FeePercentageShare $feePercentageShare,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Email|null $buyerEmail = null,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Username|null $buyerUsername = null,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Email|null $sellerEmail = null,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Username|null $sellerUsername = null,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SafePayConfirmedBy|null $confirmedBy = null,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Enum\SafePayPaymentMethod|null $paymentMethod = null
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('domainName', $data) ? \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerhubDomainName::fromValue($data['domainName']) : throw new \InvalidArgumentException("Missing required field domainName for CreateSafePayTransactionRequest"),
            array_key_exists('initiatedBy', $data) ? \CommunitySDKs\Spaceship\DTO\SellerHub\Enum\SafePayInitiatedBy::fromValue($data['initiatedBy']) : throw new \InvalidArgumentException("Missing required field initiatedBy for CreateSafePayTransactionRequest"),
            array_key_exists('basePrice', $data) ? \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Price::fromArray($data['basePrice']) : throw new \InvalidArgumentException("Missing required field basePrice for CreateSafePayTransactionRequest"),
            array_key_exists('type', $data) ? \CommunitySDKs\Spaceship\DTO\SellerHub\Enum\SafePayTransactionType::fromValue($data['type']) : throw new \InvalidArgumentException("Missing required field type for CreateSafePayTransactionRequest"),
            array_key_exists('ltoSettings', $data) ? ($data['ltoSettings'] === null ? null : \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SafePayLtoSettings::fromArray($data['ltoSettings'])) : null,
            array_key_exists('feePercentageShare', $data) ? \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\FeePercentageShare::fromArray($data['feePercentageShare']) : throw new \InvalidArgumentException("Missing required field feePercentageShare for CreateSafePayTransactionRequest"),
            array_key_exists('buyerEmail', $data) ? ($data['buyerEmail'] === null ? null : \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Email::fromValue($data['buyerEmail'])) : null,
            array_key_exists('buyerUsername', $data) ? ($data['buyerUsername'] === null ? null : \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Username::fromValue($data['buyerUsername'])) : null,
            array_key_exists('sellerEmail', $data) ? ($data['sellerEmail'] === null ? null : \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Email::fromValue($data['sellerEmail'])) : null,
            array_key_exists('sellerUsername', $data) ? ($data['sellerUsername'] === null ? null : \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Username::fromValue($data['sellerUsername'])) : null,
            array_key_exists('confirmedBy', $data) ? ($data['confirmedBy'] === null ? null : \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SafePayConfirmedBy::fromArray($data['confirmedBy'])) : null,
            array_key_exists('paymentMethod', $data) ? ($data['paymentMethod'] === null ? null : \CommunitySDKs\Spaceship\DTO\SellerHub\Enum\SafePayPaymentMethod::fromValue($data['paymentMethod'])) : null
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['domainName'] = $this->domainName->toValue();
        $data['initiatedBy'] = $this->initiatedBy->toValue();
        $data['basePrice'] = $this->basePrice->toArray();
        $data['type'] = $this->type->toValue();
        if ($this->ltoSettings !== null) { $data['ltoSettings'] = $this->ltoSettings->toArray(); }
        $data['feePercentageShare'] = $this->feePercentageShare->toArray();
        if ($this->buyerEmail !== null) { $data['buyerEmail'] = $this->buyerEmail->toValue(); }
        if ($this->buyerUsername !== null) { $data['buyerUsername'] = $this->buyerUsername->toValue(); }
        if ($this->sellerEmail !== null) { $data['sellerEmail'] = $this->sellerEmail->toValue(); }
        if ($this->sellerUsername !== null) { $data['sellerUsername'] = $this->sellerUsername->toValue(); }
        if ($this->confirmedBy !== null) { $data['confirmedBy'] = $this->confirmedBy->toArray(); }
        if ($this->paymentMethod !== null) { $data['paymentMethod'] = $this->paymentMethod->toValue(); }
        return $data;
    }
}
