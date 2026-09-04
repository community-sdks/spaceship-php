<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

class DomainsGetDomainsAvailabilityRequest
{
    /**
     * @param list<\CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainName> $domains
     */
    public function __construct(
        public readonly array $domains
    ) {
        if ($domains !== null) { foreach ($domains as $item) { \CommunitySDKs\Spaceship\DTO\ValueValidator::check($item, 'CommunitySDKs\\Spaceship\\DTO\\Domains\\Schema\\DomainName'); } }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('domains', $data) ? array_map(static fn ($item) => \CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainName::fromValue($item), $data['domains']) : throw new \InvalidArgumentException("Missing required field domains for DomainsGetDomainsAvailabilityRequest")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['domains'] = array_map(static fn ($item) => $item->toValue(), $this->domains);
        return $data;
    }
}
