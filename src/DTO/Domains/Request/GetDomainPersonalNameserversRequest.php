<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Request;

use CommunitySDKs\Spaceship\DTO\BaseRequest;

final class GetDomainPersonalNameserversRequest extends BaseRequest
{
    public function __construct(
        public readonly string $domain
    ) {
    }
}
