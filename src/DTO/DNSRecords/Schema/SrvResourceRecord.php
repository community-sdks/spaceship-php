<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

use CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue;
use InvalidArgumentException;

class SrvResourceRecord extends ResourceRecord
{
    public function __construct(
        string $type,
        HostNameValue $name,
        int|null $ttl,
        ResourceRecordsGroup $group,
        public readonly string $service,
        public readonly string $protocol,
        public readonly int $priority,
        public readonly int $weight,
        public readonly int $port,
        public readonly HostNameValue $target
    ) {
        parent::__construct($type, $name, $ttl, $group);
        if ($type !== 'SRV') {
            throw new InvalidArgumentException('Expected type to be ' . 'SRV' . ' in SrvResourceRecord.');
        }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in SrvResourceRecord.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for SrvResourceRecord.'),
            array_key_exists('name', $data) ? ($data['name'] === null ? throw new InvalidArgumentException('Field name cannot be null in SrvResourceRecord.') : HostNameValue::fromValue((string) $data['name'])) : throw new InvalidArgumentException('Missing required field name for SrvResourceRecord.'),
            array_key_exists('ttl', $data) && $data['ttl'] !== null ? (int) $data['ttl'] : null,
            array_key_exists('group', $data) ? ($data['group'] === null ? throw new InvalidArgumentException('Field group cannot be null in SrvResourceRecord.') : ResourceRecordsGroup::fromArray((array) $data['group'])) : throw new InvalidArgumentException('Missing required field group for SrvResourceRecord.'),
            array_key_exists('service', $data) ? ($data['service'] === null ? throw new InvalidArgumentException('Field service cannot be null in SrvResourceRecord.') : (string) $data['service']) : throw new InvalidArgumentException('Missing required field service for SrvResourceRecord.'),
            array_key_exists('protocol', $data) ? ($data['protocol'] === null ? throw new InvalidArgumentException('Field protocol cannot be null in SrvResourceRecord.') : (string) $data['protocol']) : throw new InvalidArgumentException('Missing required field protocol for SrvResourceRecord.'),
            array_key_exists('priority', $data) ? ($data['priority'] === null ? throw new InvalidArgumentException('Field priority cannot be null in SrvResourceRecord.') : (int) $data['priority']) : throw new InvalidArgumentException('Missing required field priority for SrvResourceRecord.'),
            array_key_exists('weight', $data) ? ($data['weight'] === null ? throw new InvalidArgumentException('Field weight cannot be null in SrvResourceRecord.') : (int) $data['weight']) : throw new InvalidArgumentException('Missing required field weight for SrvResourceRecord.'),
            array_key_exists('port', $data) ? ($data['port'] === null ? throw new InvalidArgumentException('Field port cannot be null in SrvResourceRecord.') : (int) $data['port']) : throw new InvalidArgumentException('Missing required field port for SrvResourceRecord.'),
            array_key_exists('target', $data) ? ($data['target'] === null ? throw new InvalidArgumentException('Field target cannot be null in SrvResourceRecord.') : HostNameValue::fromValue((string) $data['target'])) : throw new InvalidArgumentException('Missing required field target for SrvResourceRecord.'),        );
    }

    public function toArray(): array
    {
        $data = parent::toArray();
        $data['service'] = $this->service;
        $data['protocol'] = $this->protocol;
        $data['priority'] = $this->priority;
        $data['weight'] = $this->weight;
        $data['port'] = $this->port;
        $data['target'] = $this->target->toValue();

        return $data;
    }
}