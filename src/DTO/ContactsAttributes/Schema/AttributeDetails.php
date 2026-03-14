<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\ContactsAttributes\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use InvalidArgumentException;
class AttributeDetails extends BaseSchema
{

    public function __construct(
        public readonly string $type
    ) {}

    public static function fromArray(array $data): self
    {
        if (isset($data['type'])) {
            return match ((string) $data['type']) {
                'ca' => CaAttributeDetails::fromArray($data),
                'us' => UsAttributeDetails::fromArray($data),
                default => new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in AttributeDetails.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for AttributeDetails.'),                ),
            };
        }

        return new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in AttributeDetails.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for AttributeDetails.'),        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['type'] = $this->type;

        return $data;
    }
}