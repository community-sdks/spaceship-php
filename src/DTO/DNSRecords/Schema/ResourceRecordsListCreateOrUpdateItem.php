<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;

final class ResourceRecordsListCreateOrUpdateItem extends BaseSchema
{
    /**
     */
    public function __construct(public readonly array $items)
    {
    }

    /**
     * @param list<mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(array_map(static fn (mixed $item): ResourceRecordCreateOrUpdateItem => ResourceRecordCreateOrUpdateItem::fromArray((array) $item), $data));
    }

    /**
     * @return list<ResourceRecordCreateOrUpdateItem>
     */
    public function toArray(): array
    {
        return array_map(static fn (mixed $item): mixed => $item->toArray(), $this->items);
    }
}