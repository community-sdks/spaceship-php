<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

use CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue;
use InvalidArgumentException;

class TlsaResourceRecordDeleteItem extends ResourceRecordDeleteItem
{
    public function __construct(
        string $type,
        HostNameValue $name,
        public readonly string $port,
        public readonly string $protocol,
        public readonly int $usage,
        public readonly int $selector,
        public readonly int $matching,
        public readonly string $associationData
    ) {
        parent::__construct($type, $name);
        if ($type !== 'TLSA') {
            throw new InvalidArgumentException('Expected type to be ' . 'TLSA' . ' in TlsaResourceRecordDeleteItem.');
        }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in TlsaResourceRecordDeleteItem.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for TlsaResourceRecordDeleteItem.'),
            array_key_exists('name', $data) ? ($data['name'] === null ? throw new InvalidArgumentException('Field name cannot be null in TlsaResourceRecordDeleteItem.') : HostNameValue::fromValue((string) $data['name'])) : throw new InvalidArgumentException('Missing required field name for TlsaResourceRecordDeleteItem.'),
            array_key_exists('port', $data) ? ($data['port'] === null ? throw new InvalidArgumentException('Field port cannot be null in TlsaResourceRecordDeleteItem.') : (string) $data['port']) : throw new InvalidArgumentException('Missing required field port for TlsaResourceRecordDeleteItem.'),
            array_key_exists('protocol', $data) ? ($data['protocol'] === null ? throw new InvalidArgumentException('Field protocol cannot be null in TlsaResourceRecordDeleteItem.') : (string) $data['protocol']) : throw new InvalidArgumentException('Missing required field protocol for TlsaResourceRecordDeleteItem.'),
            array_key_exists('usage', $data) ? ($data['usage'] === null ? throw new InvalidArgumentException('Field usage cannot be null in TlsaResourceRecordDeleteItem.') : (int) $data['usage']) : throw new InvalidArgumentException('Missing required field usage for TlsaResourceRecordDeleteItem.'),
            array_key_exists('selector', $data) ? ($data['selector'] === null ? throw new InvalidArgumentException('Field selector cannot be null in TlsaResourceRecordDeleteItem.') : (int) $data['selector']) : throw new InvalidArgumentException('Missing required field selector for TlsaResourceRecordDeleteItem.'),
            array_key_exists('matching', $data) ? ($data['matching'] === null ? throw new InvalidArgumentException('Field matching cannot be null in TlsaResourceRecordDeleteItem.') : (int) $data['matching']) : throw new InvalidArgumentException('Missing required field matching for TlsaResourceRecordDeleteItem.'),
            array_key_exists('associationData', $data) ? ($data['associationData'] === null ? throw new InvalidArgumentException('Field associationData cannot be null in TlsaResourceRecordDeleteItem.') : (string) $data['associationData']) : throw new InvalidArgumentException('Missing required field associationData for TlsaResourceRecordDeleteItem.'),        );
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