<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

class DomainsDomainAuthCodeResponse
{
    public function __construct(
        public readonly \CommunitySDKs\Spaceship\DTO\Domains\Schema\AuthCode $authCode,
        public readonly \CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate $expires
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('authCode', $data) ? \CommunitySDKs\Spaceship\DTO\Domains\Schema\AuthCode::fromValue($data['authCode']) : throw new \InvalidArgumentException("Missing required field authCode for DomainsDomainAuthCodeResponse"),
            array_key_exists('expires', $data) ? \CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate::fromValue($data['expires']) : throw new \InvalidArgumentException("Missing required field expires for DomainsDomainAuthCodeResponse")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['authCode'] = $this->authCode->toValue();
        $data['expires'] = $this->expires->toValue();
        return $data;
    }
}
