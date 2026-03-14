<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

use CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainAvailabilityStatus as DomainAvailabilityStatusEnum;
use InvalidArgumentException;
use CommunitySDKs\Spaceship\DTO\BaseSchema;
final class DomainAvailabilityResult extends BaseSchema
{
    /**
     * @var list<DomainPriceDetails>
     */
    /**
     * @param list<DomainPriceDetails> $premiumPricing
     */
    public function __construct(
        public readonly DomainName $domain,
        public readonly DomainAvailabilityStatusEnum $result,
        public readonly array $premiumPricing
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('domain', $data) ? ($data['domain'] === null ? throw new InvalidArgumentException('Field domain cannot be null in DomainAvailabilityResult.') : DomainName::fromValue((string) $data['domain'])) : throw new InvalidArgumentException('Missing required field domain for DomainAvailabilityResult.'),
            array_key_exists('result', $data) ? ($data['result'] === null ? throw new InvalidArgumentException('Field result cannot be null in DomainAvailabilityResult.') : DomainAvailabilityStatusEnum::fromValue((string) $data['result'])) : throw new InvalidArgumentException('Missing required field result for DomainAvailabilityResult.'),
            array_key_exists('premiumPricing', $data) ? ($data['premiumPricing'] === null ? throw new InvalidArgumentException('Field premiumPricing cannot be null in DomainAvailabilityResult.') : array_map(static fn (mixed $item): DomainPriceDetails => DomainPriceDetails::fromArray((array) $item), (array) $data['premiumPricing'])) : throw new InvalidArgumentException('Missing required field premiumPricing for DomainAvailabilityResult.'),        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['domain'] = $this->domain->toValue();
        $data['result'] = $this->result->toValue();
        $data['premiumPricing'] = array_map(static fn (mixed $item): mixed => $item->toArray(), $this->premiumPricing);

        return $data;
    }
}