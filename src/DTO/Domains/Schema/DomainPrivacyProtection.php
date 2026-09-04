<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

class DomainPrivacyProtection
{
    public function __construct(
        public readonly bool $contactForm,
        public readonly \CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainPrivacyLevel $level
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('contactForm', $data) ? $data['contactForm'] : throw new \InvalidArgumentException("Missing required field contactForm for DomainPrivacyProtection"),
            array_key_exists('level', $data) ? \CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainPrivacyLevel::fromValue($data['level']) : throw new \InvalidArgumentException("Missing required field level for DomainPrivacyProtection")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['contactForm'] = $this->contactForm;
        $data['level'] = $this->level->toValue();
        return $data;
    }
}
