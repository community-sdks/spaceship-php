<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

class DomainTransferRequest
{
    public function __construct(
        public readonly bool $autoRenew,
        public readonly \CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainPrivacyOptions $privacyProtection,
        public readonly \CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainContacts $contacts,
        public readonly \CommunitySDKs\Spaceship\DTO\Domains\Schema\AuthCode|null $authCode = null
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('autoRenew', $data) ? $data['autoRenew'] : throw new \InvalidArgumentException("Missing required field autoRenew for DomainTransferRequest"),
            array_key_exists('privacyProtection', $data) ? \CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainPrivacyOptions::fromArray($data['privacyProtection']) : throw new \InvalidArgumentException("Missing required field privacyProtection for DomainTransferRequest"),
            array_key_exists('contacts', $data) ? \CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainContacts::fromArray($data['contacts']) : throw new \InvalidArgumentException("Missing required field contacts for DomainTransferRequest"),
            array_key_exists('authCode', $data) ? ($data['authCode'] === null ? null : \CommunitySDKs\Spaceship\DTO\Domains\Schema\AuthCode::fromValue($data['authCode'])) : null
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['autoRenew'] = $this->autoRenew;
        $data['privacyProtection'] = $this->privacyProtection->toArray();
        $data['contacts'] = $this->contacts->toArray();
        if ($this->authCode !== null) { $data['authCode'] = $this->authCode->toValue(); }
        return $data;
    }
}
