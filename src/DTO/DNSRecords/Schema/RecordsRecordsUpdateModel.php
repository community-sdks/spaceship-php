<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

class RecordsRecordsUpdateModel
{
    public function __construct(
        public readonly bool|null $force,
        public readonly \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsListCreateOrUpdateItem $items
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('force', $data) ? ($data['force'] === null ? null : $data['force']) : null,
            array_key_exists('items', $data) ? \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsListCreateOrUpdateItem::fromArray($data['items']) : throw new \InvalidArgumentException("Missing required field items for RecordsRecordsUpdateModel")
        );
    }

    public function toArray(): array
    {
        $data = [];
        if ($this->force !== null) { $data['force'] = $this->force; }
        $data['items'] = $this->items->toArray();
        return $data;
    }
}
