<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

class TlsaResourceRecordDeleteItem extends \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordDeleteItem
{
    public function __construct(
        string $type,
        \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue $name,
        public readonly array $port,
        public readonly string $protocol,
        public readonly int $usage,
        public readonly int $selector,
        public readonly int $matching,
        public readonly string $associationData
    ) {
        parent::__construct($type, $name);
        if ($type !== null && !in_array($type, ["TLSA"], true)) { throw new \InvalidArgumentException("Invalid type"); }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? $data['type'] : throw new \InvalidArgumentException("Missing required field type for TlsaResourceRecordDeleteItem"),
            array_key_exists('name', $data) ? \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue::fromValue($data['name']) : throw new \InvalidArgumentException("Missing required field name for TlsaResourceRecordDeleteItem"),
            array_key_exists('port', $data) ? $data['port'] : throw new \InvalidArgumentException("Missing required field port for TlsaResourceRecordDeleteItem"),
            array_key_exists('protocol', $data) ? $data['protocol'] : throw new \InvalidArgumentException("Missing required field protocol for TlsaResourceRecordDeleteItem"),
            array_key_exists('usage', $data) ? $data['usage'] : throw new \InvalidArgumentException("Missing required field usage for TlsaResourceRecordDeleteItem"),
            array_key_exists('selector', $data) ? $data['selector'] : throw new \InvalidArgumentException("Missing required field selector for TlsaResourceRecordDeleteItem"),
            array_key_exists('matching', $data) ? $data['matching'] : throw new \InvalidArgumentException("Missing required field matching for TlsaResourceRecordDeleteItem"),
            array_key_exists('associationData', $data) ? $data['associationData'] : throw new \InvalidArgumentException("Missing required field associationData for TlsaResourceRecordDeleteItem")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['type'] = $this->type;
        $data['name'] = $this->name->toValue();
        $data['port'] = $this->port;
        $data['protocol'] = $this->protocol;
        $data['usage'] = $this->usage;
        $data['selector'] = $this->selector;
        $data['matching'] = $this->matching;
        $data['associationData'] = $this->associationData;
        return $data;
    }
}
