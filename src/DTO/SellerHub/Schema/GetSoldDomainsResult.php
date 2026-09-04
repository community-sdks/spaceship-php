<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Schema;

class GetSoldDomainsResult
{
    /**
     * @param list<\CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SoldDomainResponse> $items
     */
    public function __construct(
        public readonly array $items,
        public readonly string|null $cursor = null
    ) {
        if ($items !== null) { foreach ($items as $item) { \CommunitySDKs\Spaceship\DTO\ValueValidator::check($item, 'CommunitySDKs\\Spaceship\\DTO\\SellerHub\\Schema\\SoldDomainResponse'); } }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('items', $data) ? array_map(static fn ($item) => \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SoldDomainResponse::fromArray($item), $data['items']) : throw new \InvalidArgumentException("Missing required field items for GetSoldDomainsResult"),
            array_key_exists('cursor', $data) ? ($data['cursor'] === null ? null : $data['cursor']) : null
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['items'] = array_map(static fn ($item) => $item->toArray(), $this->items);
        if ($this->cursor !== null) { $data['cursor'] = $this->cursor; }
        return $data;
    }
}
