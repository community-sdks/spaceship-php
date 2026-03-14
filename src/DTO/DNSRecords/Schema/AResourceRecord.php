<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

use CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue;
use CommunitySDKs\Spaceship\DTO\Common\Schema\IpV4Address;
use InvalidArgumentException;

class AResourceRecord extends ResourceRecord
{
    public function __construct(
        string $type,
        HostNameValue $name,
        int|null $ttl,
        ResourceRecordsGroup $group,
        public readonly IpV4Address $address
    ) {
        parent::__construct($type, $name, $ttl, $group);
        if ($type !== 'A') {
            throw new InvalidArgumentException('Expected type to be ' . 'A' . ' in AResourceRecord.');
        }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in AResourceRecord.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for AResourceRecord.'),
            array_key_exists('name', $data) ? ($data['name'] === null ? throw new InvalidArgumentException('Field name cannot be null in AResourceRecord.') : HostNameValue::fromValue((string) $data['name'])) : throw new InvalidArgumentException('Missing required field name for AResourceRecord.'),
            array_key_exists('ttl', $data) && $data['ttl'] !== null ? (int) $data['ttl'] : null,
            array_key_exists('group', $data) ? ($data['group'] === null ? throw new InvalidArgumentException('Field group cannot be null in AResourceRecord.') : ResourceRecordsGroup::fromArray((array) $data['group'])) : throw new InvalidArgumentException('Missing required field group for AResourceRecord.'),
            array_key_exists('address', $data) ? ($data['address'] === null ? throw new InvalidArgumentException('Field address cannot be null in AResourceRecord.') : IpV4Address::fromValue((string) $data['address'])) : throw new InvalidArgumentException('Missing required field address for AResourceRecord.'),        );
    }

    public function toArray(): array
    {
        $data = parent::toArray();
        $data['address'] = $this->address->toValue();

        return $data;
    }
}