<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Hyperlift\Schema;

class ApplicationLogsResponse
{
    /**
     * @param list<\CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationLogLine> $items
     */
    public function __construct(
        public readonly array $items,
        public readonly \CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationLogsCursor|null $cursor,
        public readonly bool $finished
    ) {
        if ($items !== null) { foreach ($items as $item) { \CommunitySDKs\Spaceship\DTO\ValueValidator::check($item, 'CommunitySDKs\\Spaceship\\DTO\\Hyperlift\\Schema\\ApplicationLogLine'); } }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('items', $data) ? array_map(static fn ($item) => \CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationLogLine::fromArray($item), $data['items']) : throw new \InvalidArgumentException("Missing required field items for ApplicationLogsResponse"),
            array_key_exists('cursor', $data) ? ($data['cursor'] === null ? null : \CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationLogsCursor::fromValue($data['cursor'])) : null,
            array_key_exists('finished', $data) ? $data['finished'] : throw new \InvalidArgumentException("Missing required field finished for ApplicationLogsResponse")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['items'] = array_map(static fn ($item) => $item->toArray(), $this->items);
        if ($this->cursor !== null) { $data['cursor'] = $this->cursor->toValue(); }
        $data['finished'] = $this->finished;
        return $data;
    }
}
