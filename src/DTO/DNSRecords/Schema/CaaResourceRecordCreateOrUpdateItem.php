<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

use CommunitySDKs\Spaceship\DTO\DNSRecords\Enum\CaaTag;
use InvalidArgumentException;
use CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue;

class CaaResourceRecordCreateOrUpdateItem extends ResourceRecordCreateOrUpdateItem
{
    public function __construct(
        string $type,
        HostNameValue $name,
        int|null $ttl,
        public readonly float $flag,
        public readonly CaaTag $tag,
        public readonly string $value
    ) {
        parent::__construct($type, $name, $ttl);
        if ($type !== 'CAA') {
            throw new InvalidArgumentException('Expected type to be ' . 'CAA' . ' in CaaResourceRecordCreateOrUpdateItem.');
        }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in CaaResourceRecordCreateOrUpdateItem.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for CaaResourceRecordCreateOrUpdateItem.'),
            array_key_exists('name', $data) ? ($data['name'] === null ? throw new InvalidArgumentException('Field name cannot be null in CaaResourceRecordCreateOrUpdateItem.') : HostNameValue::fromValue((string) $data['name'])) : throw new InvalidArgumentException('Missing required field name for CaaResourceRecordCreateOrUpdateItem.'),
            array_key_exists('ttl', $data) && $data['ttl'] !== null ? (int) $data['ttl'] : null,
            array_key_exists('flag', $data) ? ($data['flag'] === null ? throw new InvalidArgumentException('Field flag cannot be null in CaaResourceRecordCreateOrUpdateItem.') : (float) $data['flag']) : throw new InvalidArgumentException('Missing required field flag for CaaResourceRecordCreateOrUpdateItem.'),
            array_key_exists('tag', $data) ? ($data['tag'] === null ? throw new InvalidArgumentException('Field tag cannot be null in CaaResourceRecordCreateOrUpdateItem.') : CaaTag::fromValue((string) $data['tag'])) : throw new InvalidArgumentException('Missing required field tag for CaaResourceRecordCreateOrUpdateItem.'),
            array_key_exists('value', $data) ? ($data['value'] === null ? throw new InvalidArgumentException('Field value cannot be null in CaaResourceRecordCreateOrUpdateItem.') : (string) $data['value']) : throw new InvalidArgumentException('Missing required field value for CaaResourceRecordCreateOrUpdateItem.'),
        );
    }

    public function toArray(): array
    {
        $data = parent::toArray();
        $data['flag'] = $this->flag;
        $data['tag'] = $this->tag->toValue();
        $data['value'] = $this->value;

        return $data;
    }
}