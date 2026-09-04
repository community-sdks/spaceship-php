<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Common\Schema;

class ValidationErrorDataItem
{
    public function __construct(
        public readonly string $field,
        public readonly string $details
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('field', $data) ? $data['field'] : throw new \InvalidArgumentException("Missing required field field for ValidationErrorDataItem"),
            array_key_exists('details', $data) ? $data['details'] : throw new \InvalidArgumentException("Missing required field details for ValidationErrorDataItem")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['field'] = $this->field;
        $data['details'] = $this->details;
        return $data;
    }
}
