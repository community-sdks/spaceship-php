<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use InvalidArgumentException;
final class DomainTransferRequest extends BaseSchema
{
    public function __construct(
        public readonly bool $autoRenew,
        public readonly DomainPrivacyOptions $privacyProtection,
        public readonly DomainContacts $contacts,
        public readonly AuthCode|null $authCode
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('autoRenew', $data) ? ($data['autoRenew'] === null ? throw new InvalidArgumentException('Field autoRenew cannot be null in DomainTransferRequest.') : (bool) $data['autoRenew']) : throw new InvalidArgumentException('Missing required field autoRenew for DomainTransferRequest.'),
            array_key_exists('privacyProtection', $data) ? ($data['privacyProtection'] === null ? throw new InvalidArgumentException('Field privacyProtection cannot be null in DomainTransferRequest.') : DomainPrivacyOptions::fromArray((array) $data['privacyProtection'])) : throw new InvalidArgumentException('Missing required field privacyProtection for DomainTransferRequest.'),
            array_key_exists('contacts', $data) ? ($data['contacts'] === null ? throw new InvalidArgumentException('Field contacts cannot be null in DomainTransferRequest.') : DomainContacts::fromArray((array) $data['contacts'])) : throw new InvalidArgumentException('Missing required field contacts for DomainTransferRequest.'),
            array_key_exists('authCode', $data) && $data['authCode'] !== null ? AuthCode::fromValue((string) $data['authCode']) : null,        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['autoRenew'] = $this->autoRenew;
        $data['privacyProtection'] = $this->privacyProtection->toArray();
        $data['contacts'] = $this->contacts->toArray();
        if ($this->authCode !== null) {
            $data['authCode'] = $this->authCode->toValue();
        }

        return $data;
    }
}