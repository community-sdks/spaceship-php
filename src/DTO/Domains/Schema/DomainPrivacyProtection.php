<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

use CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainPrivacyLevel as DomainPrivacyLevelEnum;
use InvalidArgumentException;
use CommunitySDKs\Spaceship\DTO\BaseSchema;
final class DomainPrivacyProtection extends BaseSchema
{
    public function __construct(
        public readonly bool $contactForm,
        public readonly DomainPrivacyLevelEnum $level
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('contactForm', $data) ? ($data['contactForm'] === null ? throw new InvalidArgumentException('Field contactForm cannot be null in DomainPrivacyProtection.') : (bool) $data['contactForm']) : throw new InvalidArgumentException('Missing required field contactForm for DomainPrivacyProtection.'),
            array_key_exists('level', $data) ? ($data['level'] === null ? throw new InvalidArgumentException('Field level cannot be null in DomainPrivacyProtection.') : DomainPrivacyLevelEnum::fromValue((string) $data['level'])) : throw new InvalidArgumentException('Missing required field level for DomainPrivacyProtection.'),        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['contactForm'] = $this->contactForm;
        $data['level'] = $this->level->toValue();

        return $data;
    }
}