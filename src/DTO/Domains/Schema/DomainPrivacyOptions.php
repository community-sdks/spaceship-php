<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

class DomainPrivacyOptions
{
    public function __construct(
        public readonly \CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainPrivacyLevel $level,
        public readonly bool $userConsent
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('level', $data) ? \CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainPrivacyLevel::fromValue($data['level']) : throw new \InvalidArgumentException("Missing required field level for DomainPrivacyOptions"),
            array_key_exists('userConsent', $data) ? $data['userConsent'] : throw new \InvalidArgumentException("Missing required field userConsent for DomainPrivacyOptions")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['level'] = $this->level->toValue();
        $data['userConsent'] = $this->userConsent;
        return $data;
    }
}
