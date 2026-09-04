<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Request;

final class SaveRecordsRequest extends \CommunitySDKs\Spaceship\DTO\BaseRequest
{
    public function __construct(
        public readonly string $domain,
        public readonly \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\RecordsRecordsUpdateModel $body
    ) {

    }

    public function toBody(): ?array
    {
        return $this->body->toArray();
    }
}
