<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

class MxResourceRecord extends \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecord
{
    public function __construct(
        string $type,
        \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue $name,
        int|null $ttl,
        \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsGroup $group,
        public readonly \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue $exchange,
        public readonly int $preference
    ) {
        parent::__construct($type, $name, $ttl, $group);
        if ($type !== null && !in_array($type, ["MX"], true)) { throw new \InvalidArgumentException("Invalid type"); }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? $data['type'] : throw new \InvalidArgumentException("Missing required field type for MxResourceRecord"),
            array_key_exists('name', $data) ? \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue::fromValue($data['name']) : throw new \InvalidArgumentException("Missing required field name for MxResourceRecord"),
            array_key_exists('ttl', $data) ? ($data['ttl'] === null ? null : $data['ttl']) : null,
            array_key_exists('group', $data) ? \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsGroup::fromArray($data['group']) : throw new \InvalidArgumentException("Missing required field group for MxResourceRecord"),
            array_key_exists('exchange', $data) ? \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue::fromValue($data['exchange']) : throw new \InvalidArgumentException("Missing required field exchange for MxResourceRecord"),
            array_key_exists('preference', $data) ? $data['preference'] : throw new \InvalidArgumentException("Missing required field preference for MxResourceRecord")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['type'] = $this->type;
        $data['name'] = $this->name->toValue();
        if ($this->ttl !== null) { $data['ttl'] = $this->ttl; }
        $data['group'] = $this->group->toArray();
        $data['exchange'] = $this->exchange->toValue();
        $data['preference'] = $this->preference;
        return $data;
    }
}
