<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

use CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue;
use InvalidArgumentException;

class NsResourceRecord extends ResourceRecord
{
    public function __construct(
        string $type,
        HostNameValue $name,
        int|null $ttl,
        ResourceRecordsGroup $group,
        public readonly HostNameValue $nameserver
    ) {
        parent::__construct($type, $name, $ttl, $group);
        if ($type !== 'NS') {
            throw new InvalidArgumentException('Expected type to be ' . 'NS' . ' in NsResourceRecord.');
        }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in NsResourceRecord.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for NsResourceRecord.'),
            array_key_exists('name', $data) ? ($data['name'] === null ? throw new InvalidArgumentException('Field name cannot be null in NsResourceRecord.') : HostNameValue::fromValue((string) $data['name'])) : throw new InvalidArgumentException('Missing required field name for NsResourceRecord.'),
            array_key_exists('ttl', $data) && $data['ttl'] !== null ? (int) $data['ttl'] : null,
            array_key_exists('group', $data) ? ($data['group'] === null ? throw new InvalidArgumentException('Field group cannot be null in NsResourceRecord.') : ResourceRecordsGroup::fromArray((array) $data['group'])) : throw new InvalidArgumentException('Missing required field group for NsResourceRecord.'),
            array_key_exists('nameserver', $data) ? ($data['nameserver'] === null ? throw new InvalidArgumentException('Field nameserver cannot be null in NsResourceRecord.') : HostNameValue::fromValue((string) $data['nameserver'])) : throw new InvalidArgumentException('Missing required field nameserver for NsResourceRecord.'),        );
    }

    public function toArray(): array
    {
        $data = parent::toArray();
        $data['nameserver'] = $this->nameserver->toValue();

        return $data;
    }
}