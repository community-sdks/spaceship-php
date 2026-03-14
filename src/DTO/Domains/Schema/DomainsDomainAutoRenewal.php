<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use InvalidArgumentException;
final class DomainsDomainAutoRenewal extends BaseSchema
{
    public function __construct(
        public readonly bool $isEnabled
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('isEnabled', $data) ? ($data['isEnabled'] === null ? throw new InvalidArgumentException('Field isEnabled cannot be null in DomainsDomainAutoRenewal.') : (bool) $data['isEnabled']) : throw new InvalidArgumentException('Missing required field isEnabled for DomainsDomainAutoRenewal.'),        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['isEnabled'] = $this->isEnabled;

        return $data;
    }
}