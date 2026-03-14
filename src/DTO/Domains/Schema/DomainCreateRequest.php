<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

use InvalidArgumentException;
use CommunitySDKs\Spaceship\DTO\BaseSchema;
final class DomainCreateRequest extends BaseSchema
{
    public function __construct(
        public readonly bool $autoRenew,
        public readonly int $years,
        public readonly DomainPrivacyOptions $privacyProtection,
        public readonly DomainContacts $contacts
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('autoRenew', $data) ? ($data['autoRenew'] === null ? throw new InvalidArgumentException('Field autoRenew cannot be null in DomainCreateRequest.') : (bool) $data['autoRenew']) : throw new InvalidArgumentException('Missing required field autoRenew for DomainCreateRequest.'),
            array_key_exists('years', $data) ? ($data['years'] === null ? throw new InvalidArgumentException('Field years cannot be null in DomainCreateRequest.') : (int) $data['years']) : throw new InvalidArgumentException('Missing required field years for DomainCreateRequest.'),
            array_key_exists('privacyProtection', $data) ? ($data['privacyProtection'] === null ? throw new InvalidArgumentException('Field privacyProtection cannot be null in DomainCreateRequest.') : DomainPrivacyOptions::fromArray((array) $data['privacyProtection'])) : throw new InvalidArgumentException('Missing required field privacyProtection for DomainCreateRequest.'),
            array_key_exists('contacts', $data) ? ($data['contacts'] === null ? throw new InvalidArgumentException('Field contacts cannot be null in DomainCreateRequest.') : DomainContacts::fromArray((array) $data['contacts'])) : throw new InvalidArgumentException('Missing required field contacts for DomainCreateRequest.'),        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['autoRenew'] = $this->autoRenew;
        $data['years'] = $this->years;
        $data['privacyProtection'] = $this->privacyProtection->toArray();
        $data['contacts'] = $this->contacts->toArray();

        return $data;
    }
}