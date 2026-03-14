<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Request;

use CommunitySDKs\Spaceship\DTO\BaseRequest;

final class DeleteSellerHubDomainRequest extends BaseRequest
{
    public function __construct(
        public readonly string $domain
    ) {}
}
