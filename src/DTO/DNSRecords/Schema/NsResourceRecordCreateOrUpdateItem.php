<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

class NsResourceRecordCreateOrUpdateItem extends \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordCreateOrUpdateItem
{
    public function __construct(
        string $type,
        \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue $name,
        int|null $ttl,
        public readonly \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue $nameserver
    ) {
        parent::__construct($type, $name, $ttl);
        if ($type !== null && !in_array($type, ["NS"], true)) { throw new \InvalidArgumentException("Invalid type"); }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? $data['type'] : throw new \InvalidArgumentException("Missing required field type for NsResourceRecordCreateOrUpdateItem"),
            array_key_exists('name', $data) ? \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue::fromValue($data['name']) : throw new \InvalidArgumentException("Missing required field name for NsResourceRecordCreateOrUpdateItem"),
            array_key_exists('ttl', $data) ? ($data['ttl'] === null ? null : $data['ttl']) : null,
            array_key_exists('nameserver', $data) ? \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue::fromValue($data['nameserver']) : throw new \InvalidArgumentException("Missing required field nameserver for NsResourceRecordCreateOrUpdateItem")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['type'] = $this->type;
        $data['name'] = $this->name->toValue();
        if ($this->ttl !== null) { $data['ttl'] = $this->ttl; }
        $data['nameserver'] = $this->nameserver->toValue();
        return $data;
    }
}
