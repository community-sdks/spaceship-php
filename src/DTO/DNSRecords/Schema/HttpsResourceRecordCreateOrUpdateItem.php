<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

use CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue;
use InvalidArgumentException;

class HttpsResourceRecordCreateOrUpdateItem extends ResourceRecordCreateOrUpdateItem
{
    public function __construct(
        string $type,
        HostNameValue $name,
        int|null $ttl,
        public readonly string|null $port,
        public readonly string|null $scheme,
        public readonly int $svcPriority,
        public readonly string $targetName,
        public readonly string $svcParams
    ) {
        parent::__construct($type, $name, $ttl);
        if ($type !== 'HTTPS') {
            throw new InvalidArgumentException('Expected type to be ' . 'HTTPS' . ' in HttpsResourceRecordCreateOrUpdateItem.');
        }
        if ($scheme !== '_https') {
            throw new InvalidArgumentException('Expected scheme to be ' . '_https' . ' in HttpsResourceRecordCreateOrUpdateItem.');
        }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in HttpsResourceRecordCreateOrUpdateItem.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for HttpsResourceRecordCreateOrUpdateItem.'),
            array_key_exists('name', $data) ? ($data['name'] === null ? throw new InvalidArgumentException('Field name cannot be null in HttpsResourceRecordCreateOrUpdateItem.') : HostNameValue::fromValue((string) $data['name'])) : throw new InvalidArgumentException('Missing required field name for HttpsResourceRecordCreateOrUpdateItem.'),
            array_key_exists('ttl', $data) && $data['ttl'] !== null ? (int) $data['ttl'] : null,
            array_key_exists('port', $data) && $data['port'] !== null ? (string) $data['port'] : null,
            array_key_exists('scheme', $data) && $data['scheme'] !== null ? (string) $data['scheme'] : null,
            array_key_exists('svcPriority', $data) ? ($data['svcPriority'] === null ? throw new InvalidArgumentException('Field svcPriority cannot be null in HttpsResourceRecordCreateOrUpdateItem.') : (int) $data['svcPriority']) : throw new InvalidArgumentException('Missing required field svcPriority for HttpsResourceRecordCreateOrUpdateItem.'),
            array_key_exists('targetName', $data) ? ($data['targetName'] === null ? throw new InvalidArgumentException('Field targetName cannot be null in HttpsResourceRecordCreateOrUpdateItem.') : (string) $data['targetName']) : throw new InvalidArgumentException('Missing required field targetName for HttpsResourceRecordCreateOrUpdateItem.'),
            array_key_exists('svcParams', $data) ? ($data['svcParams'] === null ? throw new InvalidArgumentException('Field svcParams cannot be null in HttpsResourceRecordCreateOrUpdateItem.') : (string) $data['svcParams']) : throw new InvalidArgumentException('Missing required field svcParams for HttpsResourceRecordCreateOrUpdateItem.'),        );
    }

    public function toArray(): array
    {
        $data = parent::toArray();
        if ($this->port !== null) {
            $data['port'] = $this->port;
        }
        if ($this->scheme !== null) {
            $data['scheme'] = $this->scheme;
        }
        $data['svcPriority'] = $this->svcPriority;
        $data['targetName'] = $this->targetName;
        $data['svcParams'] = $this->svcParams;

        return $data;
    }
}