<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use InvalidArgumentException;

final class DomainsGetDomainsAvailabilityResult extends BaseSchema
{
    /**
     */
    public function __construct(
        /** @var list<DomainAvailabilityResult> $domains */
        public readonly array $domains
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('domains', $data) ? ($data['domains'] === null ? throw new InvalidArgumentException('Field domains cannot be null in DomainsGetDomainsAvailabilityResult.') : array_map(static fn (mixed $item): DomainAvailabilityResult => DomainAvailabilityResult::fromArray((array) $item), (array) $data['domains'])) : throw new InvalidArgumentException('Missing required field domains for DomainsGetDomainsAvailabilityResult.'),
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['domains'] = array_map(static fn (mixed $item): mixed => $item->toArray(), $this->domains);

        return $data;
    }
}