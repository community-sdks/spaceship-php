<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

use InvalidArgumentException;
use CommunitySDKs\Spaceship\DTO\BaseSchema;
final class ResourceRecordsGroup extends BaseSchema
{
    public function __construct(
        public readonly string $type
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in ResourceRecordsGroup.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for ResourceRecordsGroup.'),        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['type'] = $this->type;

        return $data;
    }
}