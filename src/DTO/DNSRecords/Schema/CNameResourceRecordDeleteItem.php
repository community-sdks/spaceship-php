<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

class CNameResourceRecordDeleteItem extends \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordDeleteItem
{
    public function __construct(
        string $type,
        \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue $name,
        public readonly \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue $cname
    ) {
        parent::__construct($type, $name);
        if ($type !== null && !in_array($type, ["CNAME"], true)) { throw new \InvalidArgumentException("Invalid type"); }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? $data['type'] : throw new \InvalidArgumentException("Missing required field type for CNameResourceRecordDeleteItem"),
            array_key_exists('name', $data) ? \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue::fromValue($data['name']) : throw new \InvalidArgumentException("Missing required field name for CNameResourceRecordDeleteItem"),
            array_key_exists('cname', $data) ? \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue::fromValue($data['cname']) : throw new \InvalidArgumentException("Missing required field cname for CNameResourceRecordDeleteItem")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['type'] = $this->type;
        $data['name'] = $this->name->toValue();
        $data['cname'] = $this->cname->toValue();
        return $data;
    }
}
