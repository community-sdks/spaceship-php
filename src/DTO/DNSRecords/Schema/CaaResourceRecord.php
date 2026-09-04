<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

class CaaResourceRecord extends \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecord
{
    public function __construct(
        string $type,
        \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue $name,
        int|null $ttl,
        \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsGroup $group,
        public readonly float $flag,
        public readonly \CommunitySDKs\Spaceship\DTO\DNSRecords\Enum\CaaTag $tag,
        public readonly string $value
    ) {
        parent::__construct($type, $name, $ttl, $group);
        if ($type !== null && !in_array($type, ["CAA"], true)) { throw new \InvalidArgumentException("Invalid type"); }
        if ($flag !== null && !in_array($flag, [0, 128], true)) { throw new \InvalidArgumentException("Invalid flag"); }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? $data['type'] : throw new \InvalidArgumentException("Missing required field type for CaaResourceRecord"),
            array_key_exists('name', $data) ? \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue::fromValue($data['name']) : throw new \InvalidArgumentException("Missing required field name for CaaResourceRecord"),
            array_key_exists('ttl', $data) ? ($data['ttl'] === null ? null : $data['ttl']) : null,
            array_key_exists('group', $data) ? \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsGroup::fromArray($data['group']) : throw new \InvalidArgumentException("Missing required field group for CaaResourceRecord"),
            array_key_exists('flag', $data) ? $data['flag'] : throw new \InvalidArgumentException("Missing required field flag for CaaResourceRecord"),
            array_key_exists('tag', $data) ? \CommunitySDKs\Spaceship\DTO\DNSRecords\Enum\CaaTag::fromValue($data['tag']) : throw new \InvalidArgumentException("Missing required field tag for CaaResourceRecord"),
            array_key_exists('value', $data) ? $data['value'] : throw new \InvalidArgumentException("Missing required field value for CaaResourceRecord")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['type'] = $this->type;
        $data['name'] = $this->name->toValue();
        if ($this->ttl !== null) { $data['ttl'] = $this->ttl; }
        $data['group'] = $this->group->toArray();
        $data['flag'] = $this->flag;
        $data['tag'] = $this->tag->toValue();
        $data['value'] = $this->value;
        return $data;
    }
}
