<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

use CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainPrivacyLevel as DomainPrivacyLevelEnum;
use InvalidArgumentException;
use CommunitySDKs\Spaceship\DTO\BaseSchema;
final class DomainPrivacyOptions extends BaseSchema
{
    public function __construct(
        public readonly DomainPrivacyLevelEnum $level,
        public readonly bool $userConsent
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('level', $data) ? ($data['level'] === null ? throw new InvalidArgumentException('Field level cannot be null in DomainPrivacyOptions.') : DomainPrivacyLevelEnum::fromValue((string) $data['level'])) : throw new InvalidArgumentException('Missing required field level for DomainPrivacyOptions.'),
            array_key_exists('userConsent', $data) ? ($data['userConsent'] === null ? throw new InvalidArgumentException('Field userConsent cannot be null in DomainPrivacyOptions.') : (bool) $data['userConsent']) : throw new InvalidArgumentException('Missing required field userConsent for DomainPrivacyOptions.'),        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['level'] = $this->level->toValue();
        $data['userConsent'] = $this->userConsent;

        return $data;
    }
}