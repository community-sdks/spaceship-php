<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

class TxtResourceRecordDeleteItem extends \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordDeleteItem
{
    public function __construct(
        string $type,
        \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue $name,
        public readonly string $value
    ) {
        parent::__construct($type, $name);
        if ($type !== null && !in_array($type, ["TXT"], true)) { throw new \InvalidArgumentException("Invalid type"); }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? $data['type'] : throw new \InvalidArgumentException("Missing required field type for TxtResourceRecordDeleteItem"),
            array_key_exists('name', $data) ? \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue::fromValue($data['name']) : throw new \InvalidArgumentException("Missing required field name for TxtResourceRecordDeleteItem"),
            array_key_exists('value', $data) ? $data['value'] : throw new \InvalidArgumentException("Missing required field value for TxtResourceRecordDeleteItem")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['type'] = $this->type;
        $data['name'] = $this->name->toValue();
        $data['value'] = $this->value;
        return $data;
    }
}
