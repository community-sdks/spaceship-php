<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainValidVerificationStatus as DomainValidVerificationStatusEnum;
use InvalidArgumentException;
final class DomainsPutContactsResponse extends BaseSchema
{
    public function __construct(
        public readonly DomainValidVerificationStatusEnum|null $verificationStatus
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('verificationStatus', $data) ? ($data['verificationStatus'] === null ? throw new InvalidArgumentException('Field verificationStatus cannot be null in DomainsPutContactsResponse.') : DomainValidVerificationStatusEnum::fromValue((string) $data['verificationStatus'])) : throw new InvalidArgumentException('Missing required field verificationStatus for DomainsPutContactsResponse.'),        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['verificationStatus'] = $this->verificationStatus->toValue();

        return $data;
    }
}