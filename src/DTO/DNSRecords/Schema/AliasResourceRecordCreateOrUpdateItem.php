<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

use CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue;
use InvalidArgumentException;

class AliasResourceRecordCreateOrUpdateItem extends ResourceRecordCreateOrUpdateItem
{
    public function __construct(
        string $type,
        HostNameValue $name,
        int|null $ttl,
        public readonly HostNameValue $aliasName
    ) {
        parent::__construct($type, $name, $ttl);
        if ($type !== 'ALIAS') {
            throw new InvalidArgumentException('Expected type to be ' . 'ALIAS' . ' in AliasResourceRecordCreateOrUpdateItem.');
        }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in AliasResourceRecordCreateOrUpdateItem.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for AliasResourceRecordCreateOrUpdateItem.'),
            array_key_exists('name', $data) ? ($data['name'] === null ? throw new InvalidArgumentException('Field name cannot be null in AliasResourceRecordCreateOrUpdateItem.') : HostNameValue::fromValue((string) $data['name'])) : throw new InvalidArgumentException('Missing required field name for AliasResourceRecordCreateOrUpdateItem.'),
            array_key_exists('ttl', $data) && $data['ttl'] !== null ? (int) $data['ttl'] : null,
            array_key_exists('aliasName', $data) ? ($data['aliasName'] === null ? throw new InvalidArgumentException('Field aliasName cannot be null in AliasResourceRecordCreateOrUpdateItem.') : HostNameValue::fromValue((string) $data['aliasName'])) : throw new InvalidArgumentException('Missing required field aliasName for AliasResourceRecordCreateOrUpdateItem.'),        );
    }

    public function toArray(): array
    {
        $data = parent::toArray();
        $data['aliasName'] = $this->aliasName->toValue();

        return $data;
    }
}