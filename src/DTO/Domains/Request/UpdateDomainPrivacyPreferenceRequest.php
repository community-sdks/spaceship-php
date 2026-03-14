<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Request;

use CommunitySDKs\Spaceship\DTO\BaseRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsDomainPrivacyPreference;
final class UpdateDomainPrivacyPreferenceRequest extends BaseRequest
{
    public function __construct(
        public readonly string $domain,
        public readonly DomainsDomainPrivacyPreference $body
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
