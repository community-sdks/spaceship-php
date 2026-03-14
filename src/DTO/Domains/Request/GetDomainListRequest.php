<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Request;

use CommunitySDKs\Spaceship\DTO\BaseRequest;

final class GetDomainListRequest extends BaseRequest
{
    public function __construct(
        public readonly int $take,
        public readonly int $skip,
        public readonly array $orderBy
    ) {
    }
    /**
     * @return array<string, scalar|list<scalar>>
     */
    public function toQueryParams(): array
    {
        return [
            'take' => $this->take,
            'skip' => $this->skip,
            'orderBy' => $this->orderBy,
        ];
    }
}
