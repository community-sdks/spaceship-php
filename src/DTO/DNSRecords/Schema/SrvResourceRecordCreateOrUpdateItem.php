<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

class SrvResourceRecordCreateOrUpdateItem extends \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordCreateOrUpdateItem
{
    public function __construct(
        string $type,
        \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue $name,
        int|null $ttl,
        public readonly string $service,
        public readonly string $protocol,
        public readonly int $priority,
        public readonly int $weight,
        public readonly int $port,
        public readonly \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue $target
    ) {
        parent::__construct($type, $name, $ttl);
        if ($type !== null && !in_array($type, ["SRV"], true)) { throw new \InvalidArgumentException("Invalid type"); }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? $data['type'] : throw new \InvalidArgumentException("Missing required field type for SrvResourceRecordCreateOrUpdateItem"),
            array_key_exists('name', $data) ? \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue::fromValue($data['name']) : throw new \InvalidArgumentException("Missing required field name for SrvResourceRecordCreateOrUpdateItem"),
            array_key_exists('ttl', $data) ? ($data['ttl'] === null ? null : $data['ttl']) : null,
            array_key_exists('service', $data) ? $data['service'] : throw new \InvalidArgumentException("Missing required field service for SrvResourceRecordCreateOrUpdateItem"),
            array_key_exists('protocol', $data) ? $data['protocol'] : throw new \InvalidArgumentException("Missing required field protocol for SrvResourceRecordCreateOrUpdateItem"),
            array_key_exists('priority', $data) ? $data['priority'] : throw new \InvalidArgumentException("Missing required field priority for SrvResourceRecordCreateOrUpdateItem"),
            array_key_exists('weight', $data) ? $data['weight'] : throw new \InvalidArgumentException("Missing required field weight for SrvResourceRecordCreateOrUpdateItem"),
            array_key_exists('port', $data) ? $data['port'] : throw new \InvalidArgumentException("Missing required field port for SrvResourceRecordCreateOrUpdateItem"),
            array_key_exists('target', $data) ? \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue::fromValue($data['target']) : throw new \InvalidArgumentException("Missing required field target for SrvResourceRecordCreateOrUpdateItem")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['type'] = $this->type;
        $data['name'] = $this->name->toValue();
        if ($this->ttl !== null) { $data['ttl'] = $this->ttl; }
        $data['service'] = $this->service;
        $data['protocol'] = $this->protocol;
        $data['priority'] = $this->priority;
        $data['weight'] = $this->weight;
        $data['port'] = $this->port;
        $data['target'] = $this->target->toValue();
        return $data;
    }
}
