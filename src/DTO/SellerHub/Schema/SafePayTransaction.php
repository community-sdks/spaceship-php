<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Schema;

class SafePayTransaction
{
    public function __construct(
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Uuid $transactionId,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Enum\SafePayTransactionStatus $status,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Enum\SafePaySaleStatus|null $saleStatus,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerhubDomainName $domainName,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Enum\SafePayInitiatedBy $initiatedBy,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Price $basePrice,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Enum\SafePayTransactionType $type,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SafePayLtoSettings|null $ltoSettings,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\FeePercentageShare $feePercentageShare,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Email|null $buyerEmail,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Email|null $sellerEmail,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SafePayConfirmedBy $confirmedBy,
        public readonly \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SafePayTransactionUrls $url
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('transactionId', $data) ? \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Uuid::fromValue($data['transactionId']) : throw new \InvalidArgumentException("Missing required field transactionId for SafePayTransaction"),
            array_key_exists('status', $data) ? \CommunitySDKs\Spaceship\DTO\SellerHub\Enum\SafePayTransactionStatus::fromValue($data['status']) : throw new \InvalidArgumentException("Missing required field status for SafePayTransaction"),
            array_key_exists('saleStatus', $data) ? ($data['saleStatus'] === null ? null : \CommunitySDKs\Spaceship\DTO\SellerHub\Enum\SafePaySaleStatus::fromValue($data['saleStatus'])) : null,
            array_key_exists('domainName', $data) ? \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerhubDomainName::fromValue($data['domainName']) : throw new \InvalidArgumentException("Missing required field domainName for SafePayTransaction"),
            array_key_exists('initiatedBy', $data) ? \CommunitySDKs\Spaceship\DTO\SellerHub\Enum\SafePayInitiatedBy::fromValue($data['initiatedBy']) : throw new \InvalidArgumentException("Missing required field initiatedBy for SafePayTransaction"),
            array_key_exists('basePrice', $data) ? \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Price::fromArray($data['basePrice']) : throw new \InvalidArgumentException("Missing required field basePrice for SafePayTransaction"),
            array_key_exists('type', $data) ? \CommunitySDKs\Spaceship\DTO\SellerHub\Enum\SafePayTransactionType::fromValue($data['type']) : throw new \InvalidArgumentException("Missing required field type for SafePayTransaction"),
            array_key_exists('ltoSettings', $data) ? ($data['ltoSettings'] === null ? null : \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SafePayLtoSettings::fromArray($data['ltoSettings'])) : null,
            array_key_exists('feePercentageShare', $data) ? \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\FeePercentageShare::fromArray($data['feePercentageShare']) : throw new \InvalidArgumentException("Missing required field feePercentageShare for SafePayTransaction"),
            array_key_exists('buyerEmail', $data) ? ($data['buyerEmail'] === null ? null : \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Email::fromValue($data['buyerEmail'])) : null,
            array_key_exists('sellerEmail', $data) ? ($data['sellerEmail'] === null ? null : \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Email::fromValue($data['sellerEmail'])) : null,
            array_key_exists('confirmedBy', $data) ? \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SafePayConfirmedBy::fromArray($data['confirmedBy']) : throw new \InvalidArgumentException("Missing required field confirmedBy for SafePayTransaction"),
            array_key_exists('url', $data) ? \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SafePayTransactionUrls::fromArray($data['url']) : throw new \InvalidArgumentException("Missing required field url for SafePayTransaction")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['transactionId'] = $this->transactionId->toValue();
        $data['status'] = $this->status->toValue();
        if ($this->saleStatus !== null) { $data['saleStatus'] = $this->saleStatus->toValue(); }
        $data['domainName'] = $this->domainName->toValue();
        $data['initiatedBy'] = $this->initiatedBy->toValue();
        $data['basePrice'] = $this->basePrice->toArray();
        $data['type'] = $this->type->toValue();
        if ($this->ltoSettings !== null) { $data['ltoSettings'] = $this->ltoSettings->toArray(); }
        $data['feePercentageShare'] = $this->feePercentageShare->toArray();
        if ($this->buyerEmail !== null) { $data['buyerEmail'] = $this->buyerEmail->toValue(); }
        if ($this->sellerEmail !== null) { $data['sellerEmail'] = $this->sellerEmail->toValue(); }
        $data['confirmedBy'] = $this->confirmedBy->toArray();
        $data['url'] = $this->url->toArray();
        return $data;
    }
}
