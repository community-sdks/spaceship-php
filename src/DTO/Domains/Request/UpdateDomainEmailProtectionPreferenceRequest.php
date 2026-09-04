<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Request;

final class UpdateDomainEmailProtectionPreferenceRequest extends \CommunitySDKs\Spaceship\DTO\BaseRequest
{
    public function __construct(
        public readonly string $domain,
        public readonly \CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsDomainEmailProtectionPreference $body
    ) {

    }

    public function toBody(): ?array
    {
        return $this->body->toArray();
    }
}
