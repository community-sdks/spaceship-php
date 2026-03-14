<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue;
use InvalidArgumentException;

class ResourceRecordCreateOrUpdateItem extends BaseSchema
{
    public function __construct(
        public readonly string $type,
        public readonly HostNameValue $name,
        public readonly int|null $ttl
    ) {}

    public static function fromArray(array $data): self
    {
        if (isset($data['type'])) {
            return match ((string) $data['type']) {
                'AAAA' => AaaaResourceRecordCreateOrUpdateItem::fromArray($data),
                'ALIAS' => AliasResourceRecordCreateOrUpdateItem::fromArray($data),
                'A' => AResourceRecordCreateOrUpdateItem::fromArray($data),
                'CAA' => CaaResourceRecordCreateOrUpdateItem::fromArray($data),
                'CNAME' => CNameResourceRecordCreateOrUpdateItem::fromArray($data),
                'HTTPS' => HttpsResourceRecordCreateOrUpdateItem::fromArray($data),
                'MX' => MxResourceRecordCreateOrUpdateItem::fromArray($data),
                'NS' => NsResourceRecordCreateOrUpdateItem::fromArray($data),
                'PTR' => PtrResourceRecordCreateOrUpdateItem::fromArray($data),
                'SRV' => SrvResourceRecordCreateOrUpdateItem::fromArray($data),
                'SVCB' => SvcbResourceRecordCreateOrUpdateItem::fromArray($data),
                'TLSA' => TlsaResourceRecordCreateOrUpdateItem::fromArray($data),
                'TXT' => TxtResourceRecordCreateOrUpdateItem::fromArray($data),
                default => new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in ResourceRecordCreateOrUpdateItem.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for ResourceRecordCreateOrUpdateItem.'),
            array_key_exists('name', $data) ? ($data['name'] === null ? throw new InvalidArgumentException('Field name cannot be null in ResourceRecordCreateOrUpdateItem.') : HostNameValue::fromValue((string) $data['name'])) : throw new InvalidArgumentException('Missing required field name for ResourceRecordCreateOrUpdateItem.'),
            array_key_exists('ttl', $data) && $data['ttl'] !== null ? (int) $data['ttl'] : null,                ),
            };
        }

        return new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in ResourceRecordCreateOrUpdateItem.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for ResourceRecordCreateOrUpdateItem.'),
            array_key_exists('name', $data) ? ($data['name'] === null ? throw new InvalidArgumentException('Field name cannot be null in ResourceRecordCreateOrUpdateItem.') : HostNameValue::fromValue((string) $data['name'])) : throw new InvalidArgumentException('Missing required field name for ResourceRecordCreateOrUpdateItem.'),
            array_key_exists('ttl', $data) && $data['ttl'] !== null ? (int) $data['ttl'] : null,        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['type'] = $this->type;
        $data['name'] = $this->name->toValue();
        if ($this->ttl !== null) {
            $data['ttl'] = $this->ttl;
        }

        return $data;
    }
}