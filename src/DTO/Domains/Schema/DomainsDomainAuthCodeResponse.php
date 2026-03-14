<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate;
use InvalidArgumentException;

final class DomainsDomainAuthCodeResponse extends BaseSchema
{
    public function __construct(
        public readonly AuthCode $authCode,
        public readonly IsoDate $expires
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('authCode', $data) ? ($data['authCode'] === null ? throw new InvalidArgumentException('Field authCode cannot be null in DomainsDomainAuthCodeResponse.') : AuthCode::fromValue((string) $data['authCode'])) : throw new InvalidArgumentException('Missing required field authCode for DomainsDomainAuthCodeResponse.'),
            array_key_exists('expires', $data) ? ($data['expires'] === null ? throw new InvalidArgumentException('Field expires cannot be null in DomainsDomainAuthCodeResponse.') : IsoDate::fromValue((string) $data['expires'])) : throw new InvalidArgumentException('Missing required field expires for DomainsDomainAuthCodeResponse.'),        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['authCode'] = $this->authCode->toValue();
        $data['expires'] = $this->expires->toValue();

        return $data;
    }
}