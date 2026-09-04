<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

class DomainCreateRequest
{
    public function __construct(
        public readonly bool $autoRenew,
        public readonly int $years,
        public readonly \CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainPrivacyOptions $privacyProtection,
        public readonly \CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainContacts $contacts
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('autoRenew', $data) ? $data['autoRenew'] : throw new \InvalidArgumentException("Missing required field autoRenew for DomainCreateRequest"),
            array_key_exists('years', $data) ? $data['years'] : throw new \InvalidArgumentException("Missing required field years for DomainCreateRequest"),
            array_key_exists('privacyProtection', $data) ? \CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainPrivacyOptions::fromArray($data['privacyProtection']) : throw new \InvalidArgumentException("Missing required field privacyProtection for DomainCreateRequest"),
            array_key_exists('contacts', $data) ? \CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainContacts::fromArray($data['contacts']) : throw new \InvalidArgumentException("Missing required field contacts for DomainCreateRequest")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['autoRenew'] = $this->autoRenew;
        $data['years'] = $this->years;
        $data['privacyProtection'] = $this->privacyProtection->toArray();
        $data['contacts'] = $this->contacts->toArray();
        return $data;
    }
}
