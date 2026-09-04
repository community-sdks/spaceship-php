<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

class DomainsDomainTransferDetailsResponse
{
    public function __construct(
        public readonly \CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate $startedAt,
        public readonly \CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate|null $finishedAt,
        public readonly string $direction,
        public readonly \CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainTransferStatus $status
    ) {
        if ($direction !== null && !in_array($direction, ["in"], true)) { throw new \InvalidArgumentException("Invalid direction"); }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('startedAt', $data) ? \CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate::fromValue($data['startedAt']) : throw new \InvalidArgumentException("Missing required field startedAt for DomainsDomainTransferDetailsResponse"),
            array_key_exists('finishedAt', $data) ? ($data['finishedAt'] === null ? null : \CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate::fromValue($data['finishedAt'])) : null,
            array_key_exists('direction', $data) ? $data['direction'] : throw new \InvalidArgumentException("Missing required field direction for DomainsDomainTransferDetailsResponse"),
            array_key_exists('status', $data) ? \CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainTransferStatus::fromValue($data['status']) : throw new \InvalidArgumentException("Missing required field status for DomainsDomainTransferDetailsResponse")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['startedAt'] = $this->startedAt->toValue();
        if ($this->finishedAt !== null) { $data['finishedAt'] = $this->finishedAt->toValue(); }
        $data['direction'] = $this->direction;
        $data['status'] = $this->status->toValue();
        return $data;
    }
}
