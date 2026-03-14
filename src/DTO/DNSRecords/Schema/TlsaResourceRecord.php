<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

use CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue;
use InvalidArgumentException;

class TlsaResourceRecord extends ResourceRecord
{
    public function __construct(
        string $type,
        HostNameValue $name,
        int|null $ttl,
        ResourceRecordsGroup $group,
        public readonly string $port,
        public readonly string $protocol,
        public readonly int $usage,
        public readonly int $selector,
        public readonly int $matching,
        public readonly string $associationData
    ) {
        parent::__construct($type, $name, $ttl, $group);
        if ($type !== 'TLSA') {
            throw new InvalidArgumentException('Expected type to be ' . 'TLSA' . ' in TlsaResourceRecord.');
        }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in TlsaResourceRecord.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for TlsaResourceRecord.'),
            array_key_exists('name', $data) ? ($data['name'] === null ? throw new InvalidArgumentException('Field name cannot be null in TlsaResourceRecord.') : HostNameValue::fromValue((string) $data['name'])) : throw new InvalidArgumentException('Missing required field name for TlsaResourceRecord.'),
            array_key_exists('ttl', $data) && $data['ttl'] !== null ? (int) $data['ttl'] : null,
            array_key_exists('group', $data) ? ($data['group'] === null ? throw new InvalidArgumentException('Field group cannot be null in TlsaResourceRecord.') : ResourceRecordsGroup::fromArray((array) $data['group'])) : throw new InvalidArgumentException('Missing required field group for TlsaResourceRecord.'),
            array_key_exists('port', $data) ? ($data['port'] === null ? throw new InvalidArgumentException('Field port cannot be null in TlsaResourceRecord.') : (string) $data['port']) : throw new InvalidArgumentException('Missing required field port for TlsaResourceRecord.'),
            array_key_exists('protocol', $data) ? ($data['protocol'] === null ? throw new InvalidArgumentException('Field protocol cannot be null in TlsaResourceRecord.') : (string) $data['protocol']) : throw new InvalidArgumentException('Missing required field protocol for TlsaResourceRecord.'),
            array_key_exists('usage', $data) ? ($data['usage'] === null ? throw new InvalidArgumentException('Field usage cannot be null in TlsaResourceRecord.') : (int) $data['usage']) : throw new InvalidArgumentException('Missing required field usage for TlsaResourceRecord.'),
            array_key_exists('selector', $data) ? ($data['selector'] === null ? throw new InvalidArgumentException('Field selector cannot be null in TlsaResourceRecord.') : (int) $data['selector']) : throw new InvalidArgumentException('Missing required field selector for TlsaResourceRecord.'),
            array_key_exists('matching', $data) ? ($data['matching'] === null ? throw new InvalidArgumentException('Field matching cannot be null in TlsaResourceRecord.') : (int) $data['matching']) : throw new InvalidArgumentException('Missing required field matching for TlsaResourceRecord.'),
            array_key_exists('associationData', $data) ? ($data['associationData'] === null ? throw new InvalidArgumentException('Field associationData cannot be null in TlsaResourceRecord.') : (string) $data['associationData']) : throw new InvalidArgumentException('Missing required field associationData for TlsaResourceRecord.'),        );
    }

    public function toArray(): array
    {
        $data = parent::toArray();
        $data['port'] = $this->port;
        $data['protocol'] = $this->protocol;
        $data['usage'] = $this->usage;
        $data['selector'] = $this->selector;
        $data['matching'] = $this->matching;
        $data['associationData'] = $this->associationData;

        return $data;
    }
}