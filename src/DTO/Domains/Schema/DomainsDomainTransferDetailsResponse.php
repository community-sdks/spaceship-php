<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate;
use CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainTransferStatus as DomainTransferStatusEnum;
use InvalidArgumentException;

final class DomainsDomainTransferDetailsResponse extends BaseSchema
{
    public function __construct(
        public readonly IsoDate $startedAt,
        public readonly IsoDate|null $finishedAt,
        public readonly string $direction,
        public readonly DomainTransferStatusEnum $status
    ) {
        if ($direction !== 'in') {
            throw new InvalidArgumentException('Expected direction to be ' . 'in' . ' in DomainsDomainTransferDetailsResponse.');
        }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('startedAt', $data) ? ($data['startedAt'] === null ? throw new InvalidArgumentException('Field startedAt cannot be null in DomainsDomainTransferDetailsResponse.') : IsoDate::fromValue((string) $data['startedAt'])) : throw new InvalidArgumentException('Missing required field startedAt for DomainsDomainTransferDetailsResponse.'),
            array_key_exists('finishedAt', $data) && $data['finishedAt'] !== null ? IsoDate::fromValue((string) $data['finishedAt']) : null,
            array_key_exists('direction', $data) ? ($data['direction'] === null ? throw new InvalidArgumentException('Field direction cannot be null in DomainsDomainTransferDetailsResponse.') : (string) $data['direction']) : throw new InvalidArgumentException('Missing required field direction for DomainsDomainTransferDetailsResponse.'),
                array_key_exists('status', $data) ? ($data['status'] === null ? throw new InvalidArgumentException('Field status cannot be null in DomainsDomainTransferDetailsResponse.') : DomainTransferStatusEnum::fromValue((string) $data['status'])) : throw new InvalidArgumentException('Missing required field status for DomainsDomainTransferDetailsResponse.'),        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['startedAt'] = $this->startedAt->toValue();
        if ($this->finishedAt !== null) {
            $data['finishedAt'] = $this->finishedAt->toValue();
        }
        $data['direction'] = $this->direction;
        $data['status'] = $this->status->toValue();

        return $data;
    }
}