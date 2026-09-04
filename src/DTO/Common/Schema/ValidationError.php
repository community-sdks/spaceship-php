<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Common\Schema;

class ValidationError
{
    /**
     * @param list<\CommunitySDKs\Spaceship\DTO\Common\Schema\ValidationErrorDataItem> $data
     */
    public function __construct(
        public readonly string $detail,
        public readonly array $data
    ) {
        if ($data !== null) { foreach ($data as $item) { \CommunitySDKs\Spaceship\DTO\ValueValidator::check($item, 'CommunitySDKs\\Spaceship\\DTO\\Common\\Schema\\ValidationErrorDataItem'); } }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('detail', $data) ? $data['detail'] : throw new \InvalidArgumentException("Missing required field detail for ValidationError"),
            array_key_exists('data', $data) ? array_map(static fn ($item) => \CommunitySDKs\Spaceship\DTO\Common\Schema\ValidationErrorDataItem::fromArray($item), $data['data']) : throw new \InvalidArgumentException("Missing required field data for ValidationError")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['detail'] = $this->detail;
        $data['data'] = array_map(static fn ($item) => $item->toArray(), $this->data);
        return $data;
    }
}
