<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

class MxResourceRecordDeleteItem extends \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordDeleteItem
{
    public function __construct(
        string $type,
        \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue $name,
        public readonly \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue $exchange,
        public readonly int $preference
    ) {
        parent::__construct($type, $name);
        if ($type !== null && !in_array($type, ["MX"], true)) { throw new \InvalidArgumentException("Invalid type"); }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? $data['type'] : throw new \InvalidArgumentException("Missing required field type for MxResourceRecordDeleteItem"),
            array_key_exists('name', $data) ? \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue::fromValue($data['name']) : throw new \InvalidArgumentException("Missing required field name for MxResourceRecordDeleteItem"),
            array_key_exists('exchange', $data) ? \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue::fromValue($data['exchange']) : throw new \InvalidArgumentException("Missing required field exchange for MxResourceRecordDeleteItem"),
            array_key_exists('preference', $data) ? $data['preference'] : throw new \InvalidArgumentException("Missing required field preference for MxResourceRecordDeleteItem")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['type'] = $this->type;
        $data['name'] = $this->name->toValue();
        $data['exchange'] = $this->exchange->toValue();
        $data['preference'] = $this->preference;
        return $data;
    }
}
