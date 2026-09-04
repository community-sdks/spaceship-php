<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

class DomainsDomainTransferLock
{
    public function __construct(
        public readonly bool $isLocked
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('isLocked', $data) ? $data['isLocked'] : throw new \InvalidArgumentException("Missing required field isLocked for DomainsDomainTransferLock")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['isLocked'] = $this->isLocked;
        return $data;
    }
}
