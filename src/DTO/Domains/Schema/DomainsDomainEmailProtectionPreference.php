<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

class DomainsDomainEmailProtectionPreference
{
    public function __construct(
        public readonly bool $contactForm
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('contactForm', $data) ? $data['contactForm'] : throw new \InvalidArgumentException("Missing required field contactForm for DomainsDomainEmailProtectionPreference")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['contactForm'] = $this->contactForm;
        return $data;
    }
}
