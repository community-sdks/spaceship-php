<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Enum;

enum DomainClientEPPStatus: string
{
    case CLIENT_DELETE_PROHIBITED = 'clientDeleteProhibited';
    case CLIENT_HOLD = 'clientHold';
    case CLIENT_RENEW_PROHIBITED = 'clientRenewProhibited';
    case CLIENT_TRANSFER_PROHIBITED = 'clientTransferProhibited';
    case CLIENT_UPDATE_PROHIBITED = 'clientUpdateProhibited';

    public static function fromValue(string $value): self
    {
        return self::from($value);
    }

    public function toValue(): string
    {
        return $this->value;
    }
}
