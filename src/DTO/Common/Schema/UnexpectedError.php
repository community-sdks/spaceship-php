<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Common\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use InvalidArgumentException;
final class UnexpectedError extends BaseSchema
{
    public function __construct(
        public readonly string $detail
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('detail', $data) ? ($data['detail'] === null ? throw new InvalidArgumentException('Field detail cannot be null in UnexpectedError.') : (string) $data['detail']) : throw new InvalidArgumentException('Missing required field detail for UnexpectedError.'),        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['detail'] = $this->detail;

        return $data;
    }
}