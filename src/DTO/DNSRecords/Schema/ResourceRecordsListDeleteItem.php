<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;

final class ResourceRecordsListDeleteItem extends BaseSchema
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
        return new self(array_map(static fn (mixed $item): ResourceRecordDeleteItem => ResourceRecordDeleteItem::fromArray((array) $item), $data));
    }

    /**
     * @return list<ResourceRecordDeleteItem>
     */
    public function toArray(): array
    {
        return array_map(static fn (mixed $item): mixed => $item->toArray(), $this->items);
    }
}