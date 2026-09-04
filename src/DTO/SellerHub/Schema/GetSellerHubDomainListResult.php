<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Schema;

class GetSellerHubDomainListResult
{
    /**
     * @param list<\CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerHubDomainResponse> $items
     */
    public function __construct(
        public readonly array $items,
        public readonly int $total
    ) {
        if ($items !== null) { foreach ($items as $item) { \CommunitySDKs\Spaceship\DTO\ValueValidator::check($item, 'CommunitySDKs\\Spaceship\\DTO\\SellerHub\\Schema\\SellerHubDomainResponse'); } }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('items', $data) ? array_map(static fn ($item) => \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerHubDomainResponse::fromArray($item), $data['items']) : throw new \InvalidArgumentException("Missing required field items for GetSellerHubDomainListResult"),
            array_key_exists('total', $data) ? $data['total'] : throw new \InvalidArgumentException("Missing required field total for GetSellerHubDomainListResult")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['items'] = array_map(static fn ($item) => $item->toArray(), $this->items);
        $data['total'] = $this->total;
        return $data;
    }
}
