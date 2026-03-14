<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

use CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue;
use InvalidArgumentException;

class CNameResourceRecordDeleteItem extends ResourceRecordDeleteItem
{
    public function __construct(
        string $type,
        HostNameValue $name,
        public readonly HostNameValue $cname
    ) {
        parent::__construct($type, $name);
        if ($type !== 'CNAME') {
            throw new InvalidArgumentException('Expected type to be ' . 'CNAME' . ' in CNameResourceRecordDeleteItem.');
        }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in CNameResourceRecordDeleteItem.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for CNameResourceRecordDeleteItem.'),
            array_key_exists('name', $data) ? ($data['name'] === null ? throw new InvalidArgumentException('Field name cannot be null in CNameResourceRecordDeleteItem.') : HostNameValue::fromValue((string) $data['name'])) : throw new InvalidArgumentException('Missing required field name for CNameResourceRecordDeleteItem.'),
            array_key_exists('cname', $data) ? ($data['cname'] === null ? throw new InvalidArgumentException('Field cname cannot be null in CNameResourceRecordDeleteItem.') : HostNameValue::fromValue((string) $data['cname'])) : throw new InvalidArgumentException('Missing required field cname for CNameResourceRecordDeleteItem.'),        );
    }

    public function toArray(): array
    {
        $data = parent::toArray();
        $data['cname'] = $this->cname->toValue();

        return $data;
    }
}