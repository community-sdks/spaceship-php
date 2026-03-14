<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Request;

use CommunitySDKs\Spaceship\DTO\BaseRequest;

final class GetResourceRecordsListRequest extends BaseRequest
{
    public function __construct(
        public readonly string $domain,
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
