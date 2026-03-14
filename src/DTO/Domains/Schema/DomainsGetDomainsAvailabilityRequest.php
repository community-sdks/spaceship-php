<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use InvalidArgumentException;

final class DomainsGetDomainsAvailabilityRequest extends BaseSchema
{
    /**
     * @var list<DomainName>
     */
    public function __construct(
        /** @var list<DomainName> $domains */
        public readonly array $domains
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('domains', $data) ? ($data['domains'] === null ? throw new InvalidArgumentException('Field domains cannot be null in DomainsGetDomainsAvailabilityRequest.') : array_map(static fn (mixed $item): DomainName => DomainName::fromValue((string) $item), (array) $data['domains'])) : throw new InvalidArgumentException('Missing required field domains for DomainsGetDomainsAvailabilityRequest.'),
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['domains'] = array_map(static fn (mixed $item): mixed => $item->toValue(), $this->domains);

        return $data;
    }
}