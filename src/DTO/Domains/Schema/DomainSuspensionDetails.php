<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use InvalidArgumentException;
final class DomainSuspensionDetails extends BaseSchema
{
    public function __construct(
        public readonly string $reasonCode
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('reasonCode', $data) ? ($data['reasonCode'] === null ? throw new InvalidArgumentException('Field reasonCode cannot be null in DomainSuspensionDetails.') : (string) $data['reasonCode']) : throw new InvalidArgumentException('Missing required field reasonCode for DomainSuspensionDetails.'),        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['reasonCode'] = $this->reasonCode;

        return $data;
    }
}