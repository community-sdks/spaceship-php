<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

class DomainsPutContactsResponse
{
    public function __construct(
        public readonly \CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainValidVerificationStatus|null $verificationStatus
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('verificationStatus', $data) ? ($data['verificationStatus'] === null ? null : \CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainValidVerificationStatus::fromValue($data['verificationStatus'])) : throw new \InvalidArgumentException("Missing required field verificationStatus for DomainsPutContactsResponse")
        );
    }

    public function toArray(): array
    {
        $data = [];
        if ($this->verificationStatus !== null) { $data['verificationStatus'] = $this->verificationStatus->toValue(); } else { $data['verificationStatus'] = null; }
        return $data;
    }
}
