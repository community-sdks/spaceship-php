<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate;
use InvalidArgumentException;

final class DomainsDomainRenewalRequestInfo extends BaseSchema
{
    public function __construct(
        public readonly int $years,
        public readonly IsoDate $currentExpirationDate
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('years', $data) ? ($data['years'] === null ? throw new InvalidArgumentException('Field years cannot be null in DomainsDomainRenewalRequestInfo.') : (int) $data['years']) : throw new InvalidArgumentException('Missing required field years for DomainsDomainRenewalRequestInfo.'),
            array_key_exists('currentExpirationDate', $data) ? ($data['currentExpirationDate'] === null ? throw new InvalidArgumentException('Field currentExpirationDate cannot be null in DomainsDomainRenewalRequestInfo.') : IsoDate::fromValue((string) $data['currentExpirationDate'])) : throw new InvalidArgumentException('Missing required field currentExpirationDate for DomainsDomainRenewalRequestInfo.'),        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['years'] = $this->years;
        $data['currentExpirationDate'] = $this->currentExpirationDate->toValue();

        return $data;
    }
}