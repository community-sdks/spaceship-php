<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

use CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue;
use InvalidArgumentException;

class MxResourceRecord extends ResourceRecord
{
    public function __construct(
        string $type,
        HostNameValue $name,
        int|null $ttl,
        ResourceRecordsGroup $group,
        public readonly HostNameValue $exchange,
        public readonly int $preference
    ) {
        parent::__construct($type, $name, $ttl, $group);
        if ($type !== 'MX') {
            throw new InvalidArgumentException('Expected type to be ' . 'MX' . ' in MxResourceRecord.');
        }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in MxResourceRecord.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for MxResourceRecord.'),
            array_key_exists('name', $data) ? ($data['name'] === null ? throw new InvalidArgumentException('Field name cannot be null in MxResourceRecord.') : HostNameValue::fromValue((string) $data['name'])) : throw new InvalidArgumentException('Missing required field name for MxResourceRecord.'),
            array_key_exists('ttl', $data) && $data['ttl'] !== null ? (int) $data['ttl'] : null,
            array_key_exists('group', $data) ? ($data['group'] === null ? throw new InvalidArgumentException('Field group cannot be null in MxResourceRecord.') : ResourceRecordsGroup::fromArray((array) $data['group'])) : throw new InvalidArgumentException('Missing required field group for MxResourceRecord.'),
            array_key_exists('exchange', $data) ? ($data['exchange'] === null ? throw new InvalidArgumentException('Field exchange cannot be null in MxResourceRecord.') : HostNameValue::fromValue((string) $data['exchange'])) : throw new InvalidArgumentException('Missing required field exchange for MxResourceRecord.'),
            array_key_exists('preference', $data) ? ($data['preference'] === null ? throw new InvalidArgumentException('Field preference cannot be null in MxResourceRecord.') : (int) $data['preference']) : throw new InvalidArgumentException('Missing required field preference for MxResourceRecord.'),        );
    }

    public function toArray(): array
    {
        $data = parent::toArray();
        $data['exchange'] = $this->exchange->toValue();
        $data['preference'] = $this->preference;

        return $data;
    }
}