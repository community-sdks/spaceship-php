<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

class PtrResourceRecordDeleteItem extends \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordDeleteItem
{
    public function __construct(
        string $type,
        \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue $name,
        public readonly \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue $pointer
    ) {
        parent::__construct($type, $name);
        if ($type !== null && !in_array($type, ["PTR"], true)) { throw new \InvalidArgumentException("Invalid type"); }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? $data['type'] : throw new \InvalidArgumentException("Missing required field type for PtrResourceRecordDeleteItem"),
            array_key_exists('name', $data) ? \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue::fromValue($data['name']) : throw new \InvalidArgumentException("Missing required field name for PtrResourceRecordDeleteItem"),
            array_key_exists('pointer', $data) ? \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue::fromValue($data['pointer']) : throw new \InvalidArgumentException("Missing required field pointer for PtrResourceRecordDeleteItem")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['type'] = $this->type;
        $data['name'] = $this->name->toValue();
        $data['pointer'] = $this->pointer->toValue();
        return $data;
    }
}
