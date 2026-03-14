<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Common\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use InvalidArgumentException;
final class ValidationErrorDataItem extends BaseSchema
{
    public function __construct(
        public readonly string $field,
        public readonly string $details
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('field', $data) ? ($data['field'] === null ? throw new InvalidArgumentException('Field field cannot be null in ValidationErrorDataItem.') : (string) $data['field']) : throw new InvalidArgumentException('Missing required field field for ValidationErrorDataItem.'),
            array_key_exists('details', $data) ? ($data['details'] === null ? throw new InvalidArgumentException('Field details cannot be null in ValidationErrorDataItem.') : (string) $data['details']) : throw new InvalidArgumentException('Missing required field details for ValidationErrorDataItem.'),        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['field'] = $this->field;
        $data['details'] = $this->details;

        return $data;
    }
}