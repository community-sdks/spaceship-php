<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Common\Schema;

class RateLimitError
{
    public function __construct(
        public readonly string $detail
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('detail', $data) ? $data['detail'] : throw new \InvalidArgumentException("Missing required field detail for RateLimitError")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['detail'] = $this->detail;
        return $data;
    }
}
