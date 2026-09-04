<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Hyperlift\Schema;

class ScaleApplicationRequest
{
    public function __construct(
        public readonly int $scale
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('scale', $data) ? $data['scale'] : throw new \InvalidArgumentException("Missing required field scale for ScaleApplicationRequest")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['scale'] = $this->scale;
        return $data;
    }
}
