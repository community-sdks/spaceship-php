<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

use CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue;
use CommunitySDKs\Spaceship\DTO\Common\Schema\IpV6Address;
use InvalidArgumentException;

class AaaaResourceRecordDeleteItem extends ResourceRecordDeleteItem
{
    public function __construct(
        string $type,
        HostNameValue $name,
        public readonly IpV6Address $address
    ) {
        parent::__construct($type, $name);
        if ($type !== 'AAAA') {
            throw new InvalidArgumentException('Expected type to be ' . 'AAAA' . ' in AaaaResourceRecordDeleteItem.');
        }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in AaaaResourceRecordDeleteItem.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for AaaaResourceRecordDeleteItem.'),
            array_key_exists('name', $data) ? ($data['name'] === null ? throw new InvalidArgumentException('Field name cannot be null in AaaaResourceRecordDeleteItem.') : HostNameValue::fromValue((string) $data['name'])) : throw new InvalidArgumentException('Missing required field name for AaaaResourceRecordDeleteItem.'),
            array_key_exists('address', $data) ? ($data['address'] === null ? throw new InvalidArgumentException('Field address cannot be null in AaaaResourceRecordDeleteItem.') : IpV6Address::fromValue((string) $data['address'])) : throw new InvalidArgumentException('Missing required field address for AaaaResourceRecordDeleteItem.'),        );
    }

    public function toArray(): array
    {
        $data = parent::toArray();
        $data['address'] = $this->address->toValue();

        return $data;
    }
}