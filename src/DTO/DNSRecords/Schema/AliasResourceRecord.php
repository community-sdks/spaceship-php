<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

use CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue;
use InvalidArgumentException;

class AliasResourceRecord extends ResourceRecord
{
    public function __construct(
        string $type,
        HostNameValue $name,
        int|null $ttl,
        ResourceRecordsGroup $group,
        public readonly HostNameValue $aliasName
    ) {
        parent::__construct($type, $name, $ttl, $group);
        if ($type !== 'ALIAS') {
            throw new InvalidArgumentException('Expected type to be ' . 'ALIAS' . ' in AliasResourceRecord.');
        }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in AliasResourceRecord.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for AliasResourceRecord.'),
            array_key_exists('name', $data) ? ($data['name'] === null ? throw new InvalidArgumentException('Field name cannot be null in AliasResourceRecord.') : HostNameValue::fromValue((string) $data['name'])) : throw new InvalidArgumentException('Missing required field name for AliasResourceRecord.'),
            array_key_exists('ttl', $data) && $data['ttl'] !== null ? (int) $data['ttl'] : null,
            array_key_exists('group', $data) ? ($data['group'] === null ? throw new InvalidArgumentException('Field group cannot be null in AliasResourceRecord.') : ResourceRecordsGroup::fromArray((array) $data['group'])) : throw new InvalidArgumentException('Missing required field group for AliasResourceRecord.'),
            array_key_exists('aliasName', $data) ? ($data['aliasName'] === null ? throw new InvalidArgumentException('Field aliasName cannot be null in AliasResourceRecord.') : HostNameValue::fromValue((string) $data['aliasName'])) : throw new InvalidArgumentException('Missing required field aliasName for AliasResourceRecord.'),        );
    }

    public function toArray(): array
    {
        $data = parent::toArray();
        $data['aliasName'] = $this->aliasName->toValue();

        return $data;
    }
}