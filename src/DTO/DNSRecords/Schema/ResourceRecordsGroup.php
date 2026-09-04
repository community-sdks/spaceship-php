<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

class ResourceRecordsGroup
{
    public function __construct(
        public readonly string $type
    ) {
        if ($type !== null && !in_array($type, ["custom", "product", "personalNs"], true)) { throw new \InvalidArgumentException("Invalid type"); }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? $data['type'] : throw new \InvalidArgumentException("Missing required field type for ResourceRecordsGroup")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['type'] = $this->type;
        return $data;
    }
}
