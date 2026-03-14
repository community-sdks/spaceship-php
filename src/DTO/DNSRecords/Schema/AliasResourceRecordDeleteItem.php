<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

use CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue;
use InvalidArgumentException;

class AliasResourceRecordDeleteItem extends ResourceRecordDeleteItem
{
    public function __construct(
        string $type,
        HostNameValue $name,
        public readonly HostNameValue $aliasName
    ) {
        parent::__construct($type, $name);
        if ($type !== 'ALIAS') {
            throw new InvalidArgumentException('Expected type to be ' . 'ALIAS' . ' in AliasResourceRecordDeleteItem.');
        }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in AliasResourceRecordDeleteItem.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for AliasResourceRecordDeleteItem.'),
            array_key_exists('name', $data) ? ($data['name'] === null ? throw new InvalidArgumentException('Field name cannot be null in AliasResourceRecordDeleteItem.') : HostNameValue::fromValue((string) $data['name'])) : throw new InvalidArgumentException('Missing required field name for AliasResourceRecordDeleteItem.'),
            array_key_exists('aliasName', $data) ? ($data['aliasName'] === null ? throw new InvalidArgumentException('Field aliasName cannot be null in AliasResourceRecordDeleteItem.') : HostNameValue::fromValue((string) $data['aliasName'])) : throw new InvalidArgumentException('Missing required field aliasName for AliasResourceRecordDeleteItem.'),        );
    }

    public function toArray(): array
    {
        $data = parent::toArray();
        $data['aliasName'] = $this->aliasName->toValue();

        return $data;
    }
}