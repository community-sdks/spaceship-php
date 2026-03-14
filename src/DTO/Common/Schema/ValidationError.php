<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Common\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use InvalidArgumentException;
final class ValidationError extends BaseSchema
{
    /**
     * @var list<ValidationErrorDataItem>
     */
    /**
     * @param list<ValidationErrorDataItem> $data
     */
    public function __construct(
        public readonly string $detail,
        public readonly array $data
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('detail', $data) ? ($data['detail'] === null ? throw new InvalidArgumentException('Field detail cannot be null in ValidationError.') : (string) $data['detail']) : throw new InvalidArgumentException('Missing required field detail for ValidationError.'),
            array_key_exists('data', $data) ? ($data['data'] === null ? throw new InvalidArgumentException('Field data cannot be null in ValidationError.') : array_map(static fn (mixed $item): ValidationErrorDataItem => ValidationErrorDataItem::fromArray((array) $item), (array) $data['data'])) : throw new InvalidArgumentException('Missing required field data for ValidationError.'),        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['detail'] = $this->detail;
        $data['data'] = array_map(static fn (mixed $item): mixed => $item->toArray(), $this->data);

        return $data;
    }
}