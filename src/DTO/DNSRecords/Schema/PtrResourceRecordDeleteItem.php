<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

use CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue;
use InvalidArgumentException;

class PtrResourceRecordDeleteItem extends ResourceRecordDeleteItem
{
    public function __construct(
        string $type,
        HostNameValue $name,
        public readonly HostNameValue $pointer
    ) {
        parent::__construct($type, $name);
        if ($type !== 'PTR') {
            throw new InvalidArgumentException('Expected type to be ' . 'PTR' . ' in PtrResourceRecordDeleteItem.');
        }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in PtrResourceRecordDeleteItem.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for PtrResourceRecordDeleteItem.'),
            array_key_exists('name', $data) ? ($data['name'] === null ? throw new InvalidArgumentException('Field name cannot be null in PtrResourceRecordDeleteItem.') : HostNameValue::fromValue((string) $data['name'])) : throw new InvalidArgumentException('Missing required field name for PtrResourceRecordDeleteItem.'),
            array_key_exists('pointer', $data) ? ($data['pointer'] === null ? throw new InvalidArgumentException('Field pointer cannot be null in PtrResourceRecordDeleteItem.') : HostNameValue::fromValue((string) $data['pointer'])) : throw new InvalidArgumentException('Missing required field pointer for PtrResourceRecordDeleteItem.'),        );
    }

    public function toArray(): array
    {
        $data = parent::toArray();
        $data['pointer'] = $this->pointer->toValue();

        return $data;
    }
}