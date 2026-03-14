<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

use CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue;
use CommunitySDKs\Spaceship\DTO\Common\Schema\IpV6Address;
use InvalidArgumentException;

class AaaaResourceRecordCreateOrUpdateItem extends ResourceRecordCreateOrUpdateItem
{
    public function __construct(
        string $type,
        HostNameValue $name,
        int|null $ttl,
        public readonly IpV6Address $address
    ) {
        parent::__construct($type, $name, $ttl);
        if ($type !== 'AAAA') {
            throw new InvalidArgumentException('Expected type to be ' . 'AAAA' . ' in AaaaResourceRecordCreateOrUpdateItem.');
        }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in AaaaResourceRecordCreateOrUpdateItem.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for AaaaResourceRecordCreateOrUpdateItem.'),
            array_key_exists('name', $data) ? ($data['name'] === null ? throw new InvalidArgumentException('Field name cannot be null in AaaaResourceRecordCreateOrUpdateItem.') : HostNameValue::fromValue((string) $data['name'])) : throw new InvalidArgumentException('Missing required field name for AaaaResourceRecordCreateOrUpdateItem.'),
            array_key_exists('ttl', $data) && $data['ttl'] !== null ? (int) $data['ttl'] : null,
            array_key_exists('address', $data) ? ($data['address'] === null ? throw new InvalidArgumentException('Field address cannot be null in AaaaResourceRecordCreateOrUpdateItem.') : IpV6Address::fromValue((string) $data['address'])) : throw new InvalidArgumentException('Missing required field address for AaaaResourceRecordCreateOrUpdateItem.'),        );
    }

    public function toArray(): array
    {
        $data = parent::toArray();
        $data['address'] = $this->address->toValue();

        return $data;
    }
}