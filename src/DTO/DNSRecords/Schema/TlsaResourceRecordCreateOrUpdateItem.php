<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

class TlsaResourceRecordCreateOrUpdateItem extends \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordCreateOrUpdateItem
{
    public function __construct(
        string $type,
        \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue $name,
        int|null $ttl,
        public readonly array $port,
        public readonly string $protocol,
        public readonly int $usage,
        public readonly int $selector,
        public readonly int $matching,
        public readonly string $associationData
    ) {
        parent::__construct($type, $name, $ttl);
        if ($type !== null && !in_array($type, ["TLSA"], true)) { throw new \InvalidArgumentException("Invalid type"); }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? $data['type'] : throw new \InvalidArgumentException("Missing required field type for TlsaResourceRecordCreateOrUpdateItem"),
            array_key_exists('name', $data) ? \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue::fromValue($data['name']) : throw new \InvalidArgumentException("Missing required field name for TlsaResourceRecordCreateOrUpdateItem"),
            array_key_exists('ttl', $data) ? ($data['ttl'] === null ? null : $data['ttl']) : null,
            array_key_exists('port', $data) ? $data['port'] : throw new \InvalidArgumentException("Missing required field port for TlsaResourceRecordCreateOrUpdateItem"),
            array_key_exists('protocol', $data) ? $data['protocol'] : throw new \InvalidArgumentException("Missing required field protocol for TlsaResourceRecordCreateOrUpdateItem"),
            array_key_exists('usage', $data) ? $data['usage'] : throw new \InvalidArgumentException("Missing required field usage for TlsaResourceRecordCreateOrUpdateItem"),
            array_key_exists('selector', $data) ? $data['selector'] : throw new \InvalidArgumentException("Missing required field selector for TlsaResourceRecordCreateOrUpdateItem"),
            array_key_exists('matching', $data) ? $data['matching'] : throw new \InvalidArgumentException("Missing required field matching for TlsaResourceRecordCreateOrUpdateItem"),
            array_key_exists('associationData', $data) ? $data['associationData'] : throw new \InvalidArgumentException("Missing required field associationData for TlsaResourceRecordCreateOrUpdateItem")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['type'] = $this->type;
        $data['name'] = $this->name->toValue();
        if ($this->ttl !== null) { $data['ttl'] = $this->ttl; }
        $data['port'] = $this->port;
        $data['protocol'] = $this->protocol;
        $data['usage'] = $this->usage;
        $data['selector'] = $this->selector;
        $data['matching'] = $this->matching;
        $data['associationData'] = $this->associationData;
        return $data;
    }
}
