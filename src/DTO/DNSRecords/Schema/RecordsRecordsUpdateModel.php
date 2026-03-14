<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

use InvalidArgumentException;
use CommunitySDKs\Spaceship\DTO\BaseSchema;
final class RecordsRecordsUpdateModel extends BaseSchema
{
    public function __construct(
        public readonly bool|null $force,
        public readonly ResourceRecordsListCreateOrUpdateItem $items
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('force', $data) && $data['force'] !== null ? (bool) $data['force'] : null,
            array_key_exists('items', $data) ? ($data['items'] === null ? throw new InvalidArgumentException('Field items cannot be null in RecordsRecordsUpdateModel.') : ResourceRecordsListCreateOrUpdateItem::fromArray((array) $data['items'])) : throw new InvalidArgumentException('Missing required field items for RecordsRecordsUpdateModel.'),        );
    }

    public function toArray(): array
    {
        $data = [];
        if ($this->force !== null) {
            $data['force'] = $this->force;
        }
        $data['items'] = $this->items->toArray();

        return $data;
    }
}