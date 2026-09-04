<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

class DomainContacts
{
    /**
     * @param list<\CommunitySDKs\Spaceship\DTO\Domains\Schema\ContactId>|null $attributes
     */
    public function __construct(
        public readonly \CommunitySDKs\Spaceship\DTO\Domains\Schema\ContactId $registrant,
        public readonly \CommunitySDKs\Spaceship\DTO\Domains\Schema\ContactId|null $admin = null,
        public readonly \CommunitySDKs\Spaceship\DTO\Domains\Schema\ContactId|null $tech = null,
        public readonly \CommunitySDKs\Spaceship\DTO\Domains\Schema\ContactId|null $billing = null,
        public readonly array|null $attributes = null
    ) {
        if ($attributes !== null) { foreach ($attributes as $item) { \CommunitySDKs\Spaceship\DTO\ValueValidator::check($item, 'CommunitySDKs\\Spaceship\\DTO\\Domains\\Schema\\ContactId'); } }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('registrant', $data) ? \CommunitySDKs\Spaceship\DTO\Domains\Schema\ContactId::fromValue($data['registrant']) : throw new \InvalidArgumentException("Missing required field registrant for DomainContacts"),
            array_key_exists('admin', $data) ? ($data['admin'] === null ? null : \CommunitySDKs\Spaceship\DTO\Domains\Schema\ContactId::fromValue($data['admin'])) : null,
            array_key_exists('tech', $data) ? ($data['tech'] === null ? null : \CommunitySDKs\Spaceship\DTO\Domains\Schema\ContactId::fromValue($data['tech'])) : null,
            array_key_exists('billing', $data) ? ($data['billing'] === null ? null : \CommunitySDKs\Spaceship\DTO\Domains\Schema\ContactId::fromValue($data['billing'])) : null,
            array_key_exists('attributes', $data) ? ($data['attributes'] === null ? null : array_map(static fn ($item) => \CommunitySDKs\Spaceship\DTO\Domains\Schema\ContactId::fromValue($item), $data['attributes'])) : null
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['registrant'] = $this->registrant->toValue();
        if ($this->admin !== null) { $data['admin'] = $this->admin->toValue(); }
        if ($this->tech !== null) { $data['tech'] = $this->tech->toValue(); }
        if ($this->billing !== null) { $data['billing'] = $this->billing->toValue(); }
        if ($this->attributes !== null) { $data['attributes'] = array_map(static fn ($item) => $item->toValue(), $this->attributes); }
        return $data;
    }
}
