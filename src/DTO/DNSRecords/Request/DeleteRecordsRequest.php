<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Request;

use CommunitySDKs\Spaceship\DTO\BaseRequest;
use CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsListDeleteItem;

final class DeleteRecordsRequest extends BaseRequest
{
    public function __construct(
        public readonly string $domain,
        public readonly ResourceRecordsListDeleteItem $body
    ) {
    }
    /**
     * @return array<string, scalar|array|null>|null
     */
    public function toBody(): ?array
    {
        return $this->body->toArray();
    }
}
