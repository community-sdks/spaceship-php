<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue;
use InvalidArgumentException;

class ResourceRecord extends BaseSchema
{
    public function __construct(
        public readonly string $type,
        public readonly HostNameValue $name,
        public readonly int|null $ttl,
        public readonly ResourceRecordsGroup $group
    ) {}

    public static function fromArray(array $data): self
    {
        if (isset($data['type'])) {
            return match ((string) $data['type']) {
                'AAAA' => AaaaResourceRecord::fromArray($data),
                'ALIAS' => AliasResourceRecord::fromArray($data),
                'A' => AResourceRecord::fromArray($data),
                'CAA' => CaaResourceRecord::fromArray($data),
                'CNAME' => CNameResourceRecord::fromArray($data),
                'HTTPS' => HttpsResourceRecord::fromArray($data),
                'MX' => MxResourceRecord::fromArray($data),
                'NS' => NsResourceRecord::fromArray($data),
                'PTR' => PtrResourceRecord::fromArray($data),
                'SRV' => SrvResourceRecord::fromArray($data),
                'SVCB' => SvcbResourceRecord::fromArray($data),
                'TLSA' => TlsaResourceRecord::fromArray($data),
                'TXT' => TxtResourceRecord::fromArray($data),
                default => new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in ResourceRecord.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for ResourceRecord.'),
            array_key_exists('name', $data) ? ($data['name'] === null ? throw new InvalidArgumentException('Field name cannot be null in ResourceRecord.') : HostNameValue::fromValue((string) $data['name'])) : throw new InvalidArgumentException('Missing required field name for ResourceRecord.'),
            array_key_exists('ttl', $data) && $data['ttl'] !== null ? (int) $data['ttl'] : null,
            array_key_exists('group', $data) ? ($data['group'] === null ? throw new InvalidArgumentException('Field group cannot be null in ResourceRecord.') : ResourceRecordsGroup::fromArray((array) $data['group'])) : throw new InvalidArgumentException('Missing required field group for ResourceRecord.'),                ),
            };
        }

        return new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in ResourceRecord.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for ResourceRecord.'),
            array_key_exists('name', $data) ? ($data['name'] === null ? throw new InvalidArgumentException('Field name cannot be null in ResourceRecord.') : HostNameValue::fromValue((string) $data['name'])) : throw new InvalidArgumentException('Missing required field name for ResourceRecord.'),
            array_key_exists('ttl', $data) && $data['ttl'] !== null ? (int) $data['ttl'] : null,
            array_key_exists('group', $data) ? ($data['group'] === null ? throw new InvalidArgumentException('Field group cannot be null in ResourceRecord.') : ResourceRecordsGroup::fromArray((array) $data['group'])) : throw new InvalidArgumentException('Missing required field group for ResourceRecord.'),        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['type'] = $this->type;
        $data['name'] = $this->name->toValue();
        if ($this->ttl !== null) {
            $data['ttl'] = $this->ttl;
        }
        $data['group'] = $this->group->toArray();

        return $data;
    }
}