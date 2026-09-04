<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

final class ResourceRecordsListDeleteItem
{
    /** @param list<\CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordDeleteItem> $items */
    public function __construct(public readonly array $items = []) { foreach ($items as $item) { \CommunitySDKs\Spaceship\DTO\ValueValidator::check($item, 'CommunitySDKs\\Spaceship\\DTO\\DNSRecords\\Schema\\ResourceRecordDeleteItem'); } }

    public static function fromArray(array $data): self
    {
        return new self(array_map(static fn ($item) => \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordDeleteItem::fromArray($item), $data));
    }

    public function toArray(): array
    {
        return array_map(static fn ($item) => $item->toArray(), $this->items);
    }
}
