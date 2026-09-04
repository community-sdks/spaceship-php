<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

class DomainsDomainRenewalRequestInfo
{
    public function __construct(
        public readonly int $years,
        public readonly \CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate $currentExpirationDate
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('years', $data) ? $data['years'] : throw new \InvalidArgumentException("Missing required field years for DomainsDomainRenewalRequestInfo"),
            array_key_exists('currentExpirationDate', $data) ? \CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate::fromValue($data['currentExpirationDate']) : throw new \InvalidArgumentException("Missing required field currentExpirationDate for DomainsDomainRenewalRequestInfo")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['years'] = $this->years;
        $data['currentExpirationDate'] = $this->currentExpirationDate->toValue();
        return $data;
    }
}
