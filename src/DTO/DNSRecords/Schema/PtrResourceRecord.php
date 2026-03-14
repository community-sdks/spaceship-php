<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

use CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue;
use InvalidArgumentException;

class PtrResourceRecord extends ResourceRecord
{
    public function __construct(
        string $type,
        HostNameValue $name,
        int|null $ttl,
        ResourceRecordsGroup $group,
        public readonly HostNameValue $pointer
    ) {
        parent::__construct($type, $name, $ttl, $group);
        if ($type !== 'PTR') {
            throw new InvalidArgumentException('Expected type to be ' . 'PTR' . ' in PtrResourceRecord.');
        }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in PtrResourceRecord.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for PtrResourceRecord.'),
            array_key_exists('name', $data) ? ($data['name'] === null ? throw new InvalidArgumentException('Field name cannot be null in PtrResourceRecord.') : HostNameValue::fromValue((string) $data['name'])) : throw new InvalidArgumentException('Missing required field name for PtrResourceRecord.'),
            array_key_exists('ttl', $data) && $data['ttl'] !== null ? (int) $data['ttl'] : null,
            array_key_exists('group', $data) ? ($data['group'] === null ? throw new InvalidArgumentException('Field group cannot be null in PtrResourceRecord.') : ResourceRecordsGroup::fromArray((array) $data['group'])) : throw new InvalidArgumentException('Missing required field group for PtrResourceRecord.'),
            array_key_exists('pointer', $data) ? ($data['pointer'] === null ? throw new InvalidArgumentException('Field pointer cannot be null in PtrResourceRecord.') : HostNameValue::fromValue((string) $data['pointer'])) : throw new InvalidArgumentException('Missing required field pointer for PtrResourceRecord.'),        );
    }

    public function toArray(): array
    {
        $data = parent::toArray();
        $data['pointer'] = $this->pointer->toValue();

        return $data;
    }
}