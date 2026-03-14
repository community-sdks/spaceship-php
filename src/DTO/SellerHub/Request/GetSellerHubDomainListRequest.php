<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Request;

use CommunitySDKs\Spaceship\DTO\BaseRequest;

final class GetSellerHubDomainListRequest extends BaseRequest
{
    public function __construct(
        public readonly int $take,
        public readonly int $skip
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
        ];
    }
}
