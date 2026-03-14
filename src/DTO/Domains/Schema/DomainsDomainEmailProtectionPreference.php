<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use InvalidArgumentException;
final class DomainsDomainEmailProtectionPreference extends BaseSchema
{
    public function __construct(
        public readonly bool $contactForm
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('contactForm', $data) ? ($data['contactForm'] === null ? throw new InvalidArgumentException('Field contactForm cannot be null in DomainsDomainEmailProtectionPreference.') : (bool) $data['contactForm']) : throw new InvalidArgumentException('Missing required field contactForm for DomainsDomainEmailProtectionPreference.'),        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['contactForm'] = $this->contactForm;

        return $data;
    }
}