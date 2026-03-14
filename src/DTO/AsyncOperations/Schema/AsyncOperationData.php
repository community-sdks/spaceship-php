<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\AsyncOperations\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use CommunitySDKs\Spaceship\DTO\AsyncOperations\Enum\AsyncOperationStatus;
use CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate;
use InvalidArgumentException;

final class AsyncOperationData extends BaseSchema
{
    public function __construct(
        public readonly AsyncOperationStatus $status,
        public readonly string $type,
        public readonly AsyncOperationDetails|null $details,
        public readonly IsoDate $createdAt,
        public readonly IsoDate|null $modifiedAt
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('status', $data) ? ($data['status'] === null ? throw new InvalidArgumentException('Field status cannot be null in AsyncOperationData.') : AsyncOperationStatus::fromValue((string) $data['status'])) : throw new InvalidArgumentException('Missing required field status for AsyncOperationData.'),
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in AsyncOperationData.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for AsyncOperationData.'),
            array_key_exists('details', $data) && $data['details'] !== null ? AsyncOperationDetails::fromArray((array) $data['details']) : null,
            array_key_exists('createdAt', $data) ? ($data['createdAt'] === null ? throw new InvalidArgumentException('Field createdAt cannot be null in AsyncOperationData.') : IsoDate::fromValue((string) $data['createdAt'])) : throw new InvalidArgumentException('Missing required field createdAt for AsyncOperationData.'),
            array_key_exists('modifiedAt', $data) && $data['modifiedAt'] !== null ? IsoDate::fromValue((string) $data['modifiedAt']) : null,        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['status'] = $this->status->toValue();
        $data['type'] = $this->type;
        if ($this->details !== null) {
            $data['details'] = $this->details->toArray();
        }
        $data['createdAt'] = $this->createdAt->toValue();
        if ($this->modifiedAt !== null) {
            $data['modifiedAt'] = $this->modifiedAt->toValue();
        }

        return $data;
    }
}