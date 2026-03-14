<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue;
use InvalidArgumentException;

final class SellerHubVerificationRecord extends BaseSchema
{
    public function __construct(
        public readonly string $type,
        public readonly HostNameValue $name,
        public readonly string $value
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in SellerHubVerificationRecord.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for SellerHubVerificationRecord.'),
            array_key_exists('name', $data) ? ($data['name'] === null ? throw new InvalidArgumentException('Field name cannot be null in SellerHubVerificationRecord.') : HostNameValue::fromValue((string) $data['name'])) : throw new InvalidArgumentException('Missing required field name for SellerHubVerificationRecord.'),
            array_key_exists('value', $data) ? ($data['value'] === null ? throw new InvalidArgumentException('Field value cannot be null in SellerHubVerificationRecord.') : (string) $data['value']) : throw new InvalidArgumentException('Missing required field value for SellerHubVerificationRecord.'),        );
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