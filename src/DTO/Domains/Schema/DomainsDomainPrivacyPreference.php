<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

class DomainsDomainPrivacyPreference
{
    public function __construct(
        public readonly \CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainPrivacyLevel $privacyLevel,
        public readonly bool $userConsent
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('privacyLevel', $data) ? \CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainPrivacyLevel::fromValue($data['privacyLevel']) : throw new \InvalidArgumentException("Missing required field privacyLevel for DomainsDomainPrivacyPreference"),
            array_key_exists('userConsent', $data) ? $data['userConsent'] : throw new \InvalidArgumentException("Missing required field userConsent for DomainsDomainPrivacyPreference")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['privacyLevel'] = $this->privacyLevel->toValue();
        $data['userConsent'] = $this->userConsent;
        return $data;
    }
}
