<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Enum;

enum CaaTag: string
{
    case ISSUE = 'issue';
    case ISSUEWILD = 'issuewild';
    case IODEF = 'iodef';

    public static function fromValue(string $value): self
    {
        return self::from($value);
    }

    public function toValue(): string
    {
        return $this->value;
    }
}
