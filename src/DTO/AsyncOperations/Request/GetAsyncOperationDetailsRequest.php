<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\AsyncOperations\Request;

use CommunitySDKs\Spaceship\DTO\BaseRequest;

final class GetAsyncOperationDetailsRequest extends BaseRequest
{
    public function __construct(
        public readonly string $operationId
    ){}
}
