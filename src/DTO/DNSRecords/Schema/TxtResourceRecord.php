<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

use CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue;
use InvalidArgumentException;

class TxtResourceRecord extends ResourceRecord
{
    public function __construct(
        string $type,
        HostNameValue $name,
        int|null $ttl,
        ResourceRecordsGroup $group,
        public readonly string $value
    ) {
        parent::__construct($type, $name, $ttl, $group);
        if ($type !== 'TXT') {
            throw new InvalidArgumentException('Expected type to be ' . 'TXT' . ' in TxtResourceRecord.');
        }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in TxtResourceRecord.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for TxtResourceRecord.'),
            array_key_exists('name', $data) ? ($data['name'] === null ? throw new InvalidArgumentException('Field name cannot be null in TxtResourceRecord.') : HostNameValue::fromValue((string) $data['name'])) : throw new InvalidArgumentException('Missing required field name for TxtResourceRecord.'),
            array_key_exists('ttl', $data) && $data['ttl'] !== null ? (int) $data['ttl'] : null,
            array_key_exists('group', $data) ? ($data['group'] === null ? throw new InvalidArgumentException('Field group cannot be null in TxtResourceRecord.') : ResourceRecordsGroup::fromArray((array) $data['group'])) : throw new InvalidArgumentException('Missing required field group for TxtResourceRecord.'),
            array_key_exists('value', $data) ? ($data['value'] === null ? throw new InvalidArgumentException('Field value cannot be null in TxtResourceRecord.') : (string) $data['value']) : throw new InvalidArgumentException('Missing required field value for TxtResourceRecord.'),        );
    }

    public function toArray(): array
    {
        $data = parent::toArray();
        $data['value'] = $this->value;

        return $data;
    }
}