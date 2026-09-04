<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\AsyncOperations\Schema;

class AsyncOperationData
{
    public function __construct(
        public readonly \CommunitySDKs\Spaceship\DTO\AsyncOperations\Enum\AsyncOperationStatus $status,
        public readonly string $type,
        public readonly \CommunitySDKs\Spaceship\DTO\AsyncOperations\Schema\AsyncOperationDetails|null $details,
        public readonly \CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate $createdAt,
        public readonly \CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate|null $modifiedAt = null
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('status', $data) ? \CommunitySDKs\Spaceship\DTO\AsyncOperations\Enum\AsyncOperationStatus::fromValue($data['status']) : throw new \InvalidArgumentException("Missing required field status for AsyncOperationData"),
            array_key_exists('type', $data) ? $data['type'] : throw new \InvalidArgumentException("Missing required field type for AsyncOperationData"),
            array_key_exists('details', $data) ? ($data['details'] === null ? null : \CommunitySDKs\Spaceship\DTO\AsyncOperations\Schema\AsyncOperationDetails::fromArray($data['details'])) : null,
            array_key_exists('createdAt', $data) ? \CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate::fromValue($data['createdAt']) : throw new \InvalidArgumentException("Missing required field createdAt for AsyncOperationData"),
            array_key_exists('modifiedAt', $data) ? ($data['modifiedAt'] === null ? null : \CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate::fromValue($data['modifiedAt'])) : null
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['status'] = $this->status->toValue();
        $data['type'] = $this->type;
        if ($this->details !== null) { $data['details'] = (object) $this->details->toArray(); }
        $data['createdAt'] = $this->createdAt->toValue();
        if ($this->modifiedAt !== null) { $data['modifiedAt'] = $this->modifiedAt->toValue(); }
        return $data;
    }
}
