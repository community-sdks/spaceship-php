<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

use CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue;
use InvalidArgumentException;

class NsResourceRecordDeleteItem extends ResourceRecordDeleteItem
{
    public function __construct(
        string $type,
        HostNameValue $name,
        public readonly HostNameValue $nameserver
    ) {
        parent::__construct($type, $name);
        if ($type !== 'NS') {
            throw new InvalidArgumentException('Expected type to be ' . 'NS' . ' in NsResourceRecordDeleteItem.');
        }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in NsResourceRecordDeleteItem.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for NsResourceRecordDeleteItem.'),
            array_key_exists('name', $data) ? ($data['name'] === null ? throw new InvalidArgumentException('Field name cannot be null in NsResourceRecordDeleteItem.') : HostNameValue::fromValue((string) $data['name'])) : throw new InvalidArgumentException('Missing required field name for NsResourceRecordDeleteItem.'),
            array_key_exists('nameserver', $data) ? ($data['nameserver'] === null ? throw new InvalidArgumentException('Field nameserver cannot be null in NsResourceRecordDeleteItem.') : HostNameValue::fromValue((string) $data['nameserver'])) : throw new InvalidArgumentException('Missing required field nameserver for NsResourceRecordDeleteItem.'),        );
    }

    public function toArray(): array
    {
        $data = parent::toArray();
        $data['nameserver'] = $this->nameserver->toValue();

        return $data;
    }
}