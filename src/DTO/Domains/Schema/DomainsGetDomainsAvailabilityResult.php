<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

class DomainsGetDomainsAvailabilityResult
{
    /**
     * @param list<\CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainAvailabilityResult> $domains
     */
    public function __construct(
        public readonly array $domains
    ) {
        if ($domains !== null) { foreach ($domains as $item) { \CommunitySDKs\Spaceship\DTO\ValueValidator::check($item, 'CommunitySDKs\\Spaceship\\DTO\\Domains\\Schema\\DomainAvailabilityResult'); } }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('domains', $data) ? array_map(static fn ($item) => \CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainAvailabilityResult::fromArray($item), $data['domains']) : throw new \InvalidArgumentException("Missing required field domains for DomainsGetDomainsAvailabilityResult")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['domains'] = array_map(static fn ($item) => $item->toArray(), $this->domains);
        return $data;
    }
}
