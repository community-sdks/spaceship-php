<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

use CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue;
use InvalidArgumentException;

class CNameResourceRecord extends ResourceRecord
{
    public function __construct(
        string $type,
        HostNameValue $name,
        int|null $ttl,
        ResourceRecordsGroup $group,
        public readonly HostNameValue $cname
    ) {
        parent::__construct($type, $name, $ttl, $group);
        if ($type !== 'CNAME') {
            throw new InvalidArgumentException('Expected type to be ' . 'CNAME' . ' in CNameResourceRecord.');
        }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in CNameResourceRecord.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for CNameResourceRecord.'),
            array_key_exists('name', $data) ? ($data['name'] === null ? throw new InvalidArgumentException('Field name cannot be null in CNameResourceRecord.') : HostNameValue::fromValue((string) $data['name'])) : throw new InvalidArgumentException('Missing required field name for CNameResourceRecord.'),
            array_key_exists('ttl', $data) && $data['ttl'] !== null ? (int) $data['ttl'] : null,
            array_key_exists('group', $data) ? ($data['group'] === null ? throw new InvalidArgumentException('Field group cannot be null in CNameResourceRecord.') : ResourceRecordsGroup::fromArray((array) $data['group'])) : throw new InvalidArgumentException('Missing required field group for CNameResourceRecord.'),
            array_key_exists('cname', $data) ? ($data['cname'] === null ? throw new InvalidArgumentException('Field cname cannot be null in CNameResourceRecord.') : HostNameValue::fromValue((string) $data['cname'])) : throw new InvalidArgumentException('Missing required field cname for CNameResourceRecord.'),        );
    }

    public function toArray(): array
    {
        $data = parent::toArray();
        $data['cname'] = $this->cname->toValue();

        return $data;
    }
}