<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Common\Schema;

class HyperliftGetHyperliftApplicationListQueryParams
{
    public function __construct(
        public readonly int $take,
        public readonly int $skip
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('take', $data) ? $data['take'] : throw new \InvalidArgumentException("Missing required field take for HyperliftGetHyperliftApplicationListQueryParams"),
            array_key_exists('skip', $data) ? $data['skip'] : throw new \InvalidArgumentException("Missing required field skip for HyperliftGetHyperliftApplicationListQueryParams")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['take'] = $this->take;
        $data['skip'] = $this->skip;
        return $data;
    }
}
