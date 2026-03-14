<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

use InvalidArgumentException;
use CommunitySDKs\Spaceship\DTO\BaseSchema;
final class DomainContacts extends BaseSchema
{
    /**
     * @var list<ContactId>
     */
    /**
     * @param list<ContactId> $attributes
     */
    public function __construct(
        public readonly ContactId $registrant,
        public readonly ContactId|null $admin,
        public readonly ContactId|null $tech,
        public readonly ContactId|null $billing,
        public readonly array|null $attributes
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('registrant', $data) ? ($data['registrant'] === null ? throw new InvalidArgumentException('Field registrant cannot be null in DomainContacts.') : ContactId::fromValue((string) $data['registrant'])) : throw new InvalidArgumentException('Missing required field registrant for DomainContacts.'),
            array_key_exists('admin', $data) && $data['admin'] !== null ? ContactId::fromValue((string) $data['admin']) : null,
            array_key_exists('tech', $data) && $data['tech'] !== null ? ContactId::fromValue((string) $data['tech']) : null,
            array_key_exists('billing', $data) && $data['billing'] !== null ? ContactId::fromValue((string) $data['billing']) : null,
            array_key_exists('attributes', $data) && $data['attributes'] !== null ? array_map(static fn (mixed $item): ContactId => ContactId::fromValue((string) $item), (array) $data['attributes']) : null,        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['registrant'] = $this->registrant->toValue();
        if ($this->admin !== null) {
            $data['admin'] = $this->admin->toValue();
        }
        if ($this->tech !== null) {
            $data['tech'] = $this->tech->toValue();
        }
        if ($this->billing !== null) {
            $data['billing'] = $this->billing->toValue();
        }
        if ($this->attributes !== null) {
            $data['attributes'] = array_map(static fn (mixed $item): mixed => $item->toValue(), $this->attributes);
        }

        return $data;
    }
}