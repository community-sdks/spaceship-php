<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

use CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue;
use CommunitySDKs\Spaceship\DTO\Common\Schema\IpV4Address;
use InvalidArgumentException;

class AResourceRecordDeleteItem extends ResourceRecordDeleteItem
{
    public function __construct(
        string $type,
        HostNameValue $name,
        public readonly IpV4Address $address
    ) {
        parent::__construct($type, $name);
        if ($type !== 'A') {
            throw new InvalidArgumentException('Expected type to be ' . 'A' . ' in AResourceRecordDeleteItem.');
        }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in AResourceRecordDeleteItem.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for AResourceRecordDeleteItem.'),
            array_key_exists('name', $data) ? ($data['name'] === null ? throw new InvalidArgumentException('Field name cannot be null in AResourceRecordDeleteItem.') : HostNameValue::fromValue((string) $data['name'])) : throw new InvalidArgumentException('Missing required field name for AResourceRecordDeleteItem.'),
            array_key_exists('address', $data) ? ($data['address'] === null ? throw new InvalidArgumentException('Field address cannot be null in AResourceRecordDeleteItem.') : IpV4Address::fromValue((string) $data['address'])) : throw new InvalidArgumentException('Missing required field address for AResourceRecordDeleteItem.'),        );
    }

    public function toArray(): array
    {
        $data = parent::toArray();
        $data['address'] = $this->address->toValue();

        return $data;
    }
}