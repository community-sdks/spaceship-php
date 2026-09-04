<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

class HttpsResourceRecord extends \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecord
{
    public function __construct(
        string $type,
        \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue $name,
        int|null $ttl,
        \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsGroup $group,
        public readonly array|null $port,
        public readonly string|null $scheme,
        public readonly int $svcPriority,
        public readonly array $targetName,
        public readonly string $svcParams
    ) {
        parent::__construct($type, $name, $ttl, $group);
        if ($type !== null && !in_array($type, ["HTTPS"], true)) { throw new \InvalidArgumentException("Invalid type"); }
        if ($scheme !== null && !in_array($scheme, ["_https"], true)) { throw new \InvalidArgumentException("Invalid scheme"); }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? $data['type'] : throw new \InvalidArgumentException("Missing required field type for HttpsResourceRecord"),
            array_key_exists('name', $data) ? \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue::fromValue($data['name']) : throw new \InvalidArgumentException("Missing required field name for HttpsResourceRecord"),
            array_key_exists('ttl', $data) ? ($data['ttl'] === null ? null : $data['ttl']) : null,
            array_key_exists('group', $data) ? \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsGroup::fromArray($data['group']) : throw new \InvalidArgumentException("Missing required field group for HttpsResourceRecord"),
            array_key_exists('port', $data) ? ($data['port'] === null ? null : $data['port']) : null,
            array_key_exists('scheme', $data) ? ($data['scheme'] === null ? null : $data['scheme']) : null,
            array_key_exists('svcPriority', $data) ? $data['svcPriority'] : throw new \InvalidArgumentException("Missing required field svcPriority for HttpsResourceRecord"),
            array_key_exists('targetName', $data) ? $data['targetName'] : throw new \InvalidArgumentException("Missing required field targetName for HttpsResourceRecord"),
            array_key_exists('svcParams', $data) ? $data['svcParams'] : throw new \InvalidArgumentException("Missing required field svcParams for HttpsResourceRecord")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['type'] = $this->type;
        $data['name'] = $this->name->toValue();
        if ($this->ttl !== null) { $data['ttl'] = $this->ttl; }
        $data['group'] = $this->group->toArray();
        if ($this->port !== null) { $data['port'] = $this->port; }
        if ($this->scheme !== null) { $data['scheme'] = $this->scheme; }
        $data['svcPriority'] = $this->svcPriority;
        $data['targetName'] = $this->targetName;
        $data['svcParams'] = $this->svcParams;
        return $data;
    }
}
