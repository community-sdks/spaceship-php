<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainPrivacyLevel as DomainPrivacyLevelEnum;
use InvalidArgumentException;

final class DomainsDomainPrivacyPreference extends BaseSchema
{
    public function __construct(
        public readonly DomainPrivacyLevelEnum $privacyLevel,
        public readonly bool $userConsent
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('privacyLevel', $data) ? ($data['privacyLevel'] === null ? throw new InvalidArgumentException('Field privacyLevel cannot be null in DomainsDomainPrivacyPreference.') : DomainPrivacyLevelEnum::fromValue((string) $data['privacyLevel'])) : throw new InvalidArgumentException('Missing required field privacyLevel for DomainsDomainPrivacyPreference.'),
            array_key_exists('userConsent', $data) ? ($data['userConsent'] === null ? throw new InvalidArgumentException('Field userConsent cannot be null in DomainsDomainPrivacyPreference.') : (bool) $data['userConsent']) : throw new InvalidArgumentException('Missing required field userConsent for DomainsDomainPrivacyPreference.'),
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