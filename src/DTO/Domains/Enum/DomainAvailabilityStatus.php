<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Enum;

enum DomainAvailabilityStatus: string
{
    case AVAILABLE = 'available';
    case TAKEN = 'taken';
    case INVALID_DOMAIN_NAME = 'invalidDomainName';
    case TLD_NOT_SUPPORTED = 'tldNotSupported';
    case UNEXPECTED_ERROR = 'unexpectedError';

    public static function fromValue(string $value): self
    {
        return self::from($value);
    }

    public function toValue(): string
    {
        return $this->value;
    }
}
