<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue;
use InvalidArgumentException;

class ResourceRecordDeleteItem extends BaseSchema
{
    public function __construct(
        public readonly string $type,
        public readonly HostNameValue $name
    ) {}

    public static function fromArray(array $data): self
    {
        if (isset($data['type'])) {
            return match ((string) $data['type']) {
                'AAAA' => AaaaResourceRecordDeleteItem::fromArray($data),
                'ALIAS' => AliasResourceRecordDeleteItem::fromArray($data),
                'A' => AResourceRecordDeleteItem::fromArray($data),
                'CAA' => CaaResourceRecordDeleteItem::fromArray($data),
                'CNAME' => CNameResourceRecordDeleteItem::fromArray($data),
                'HTTPS' => HttpsResourceRecordDeleteItem::fromArray($data),
                'MX' => MxResourceRecordDeleteItem::fromArray($data),
                'NS' => NsResourceRecordDeleteItem::fromArray($data),
                'PTR' => PtrResourceRecordDeleteItem::fromArray($data),
                'SRV' => SrvResourceRecordDeleteItem::fromArray($data),
                'SVCB' => SvcbResourceRecordDeleteItem::fromArray($data),
                'TLSA' => TlsaResourceRecordDeleteItem::fromArray($data),
                'TXT' => TxtResourceRecordDeleteItem::fromArray($data),
                default => new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in ResourceRecordDeleteItem.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for ResourceRecordDeleteItem.'),
            array_key_exists('name', $data) ? ($data['name'] === null ? throw new InvalidArgumentException('Field name cannot be null in ResourceRecordDeleteItem.') : HostNameValue::fromValue((string) $data['name'])) : throw new InvalidArgumentException('Missing required field name for ResourceRecordDeleteItem.'),                ),
            };
        }

        return new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in ResourceRecordDeleteItem.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for ResourceRecordDeleteItem.'),
            array_key_exists('name', $data) ? ($data['name'] === null ? throw new InvalidArgumentException('Field name cannot be null in ResourceRecordDeleteItem.') : HostNameValue::fromValue((string) $data['name'])) : throw new InvalidArgumentException('Missing required field name for ResourceRecordDeleteItem.'),        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['type'] = $this->type;
        $data['name'] = $this->name->toValue();

        return $data;
    }
}