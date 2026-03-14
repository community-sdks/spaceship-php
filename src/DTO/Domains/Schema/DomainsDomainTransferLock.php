<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use InvalidArgumentException;
final class DomainsDomainTransferLock extends BaseSchema
{
    public function __construct(
        public readonly bool $isLocked
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('isLocked', $data) ? ($data['isLocked'] === null ? throw new InvalidArgumentException('Field isLocked cannot be null in DomainsDomainTransferLock.') : (bool) $data['isLocked']) : throw new InvalidArgumentException('Missing required field isLocked for DomainsDomainTransferLock.'),        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['isLocked'] = $this->isLocked;

        return $data;
    }
}