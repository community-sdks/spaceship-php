<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Schema;

class SellerHubVerificationRecord
{
    public function __construct(
        public readonly string $type,
        public readonly \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue $name,
        public readonly string $value
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? $data['type'] : throw new \InvalidArgumentException("Missing required field type for SellerHubVerificationRecord"),
            array_key_exists('name', $data) ? \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue::fromValue($data['name']) : throw new \InvalidArgumentException("Missing required field name for SellerHubVerificationRecord"),
            array_key_exists('value', $data) ? $data['value'] : throw new \InvalidArgumentException("Missing required field value for SellerHubVerificationRecord")
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
