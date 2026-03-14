<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\AsyncOperations\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;

final class AsyncOperationDetails extends BaseSchema
{
    public function __construct() {}

    public static function fromArray(array $data): self
    {
        return new self();
    }

    public function toArray(): array
    {
        $data = [];

        return $data;
    }
}