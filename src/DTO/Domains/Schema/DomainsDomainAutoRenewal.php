<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

class DomainsDomainAutoRenewal
{
    public function __construct(
        public readonly bool $isEnabled
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('isEnabled', $data) ? $data['isEnabled'] : throw new \InvalidArgumentException("Missing required field isEnabled for DomainsDomainAutoRenewal")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['isEnabled'] = $this->isEnabled;
        return $data;
    }
}
