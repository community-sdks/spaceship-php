<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

use CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue;
use CommunitySDKs\Spaceship\DTO\Common\Schema\IpV6Address;
use InvalidArgumentException;

class AaaaResourceRecord extends ResourceRecord
{
    public function __construct(
        string $type,
        HostNameValue $name,
        int|null $ttl,
        ResourceRecordsGroup $group,
        public readonly IpV6Address $address
    ) {
        parent::__construct($type, $name, $ttl, $group);
        if ($type !== 'AAAA') {
            throw new InvalidArgumentException('Expected type to be ' . 'AAAA' . ' in AaaaResourceRecord.');
        }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in AaaaResourceRecord.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for AaaaResourceRecord.'),
            array_key_exists('name', $data) ? ($data['name'] === null ? throw new InvalidArgumentException('Field name cannot be null in AaaaResourceRecord.') : HostNameValue::fromValue((string) $data['name'])) : throw new InvalidArgumentException('Missing required field name for AaaaResourceRecord.'),
            array_key_exists('ttl', $data) && $data['ttl'] !== null ? (int) $data['ttl'] : null,
            array_key_exists('group', $data) ? ($data['group'] === null ? throw new InvalidArgumentException('Field group cannot be null in AaaaResourceRecord.') : ResourceRecordsGroup::fromArray((array) $data['group'])) : throw new InvalidArgumentException('Missing required field group for AaaaResourceRecord.'),
            array_key_exists('address', $data) ? ($data['address'] === null ? throw new InvalidArgumentException('Field address cannot be null in AaaaResourceRecord.') : IpV6Address::fromValue((string) $data['address'])) : throw new InvalidArgumentException('Missing required field address for AaaaResourceRecord.'),        );
    }

    public function toArray(): array
    {
        $data = parent::toArray();
        $data['address'] = $this->address->toValue();

        return $data;
    }
}