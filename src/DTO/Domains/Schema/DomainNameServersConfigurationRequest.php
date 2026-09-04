<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

class DomainNameServersConfigurationRequest
{
    /**
     * @param list<\CommunitySDKs\Spaceship\DTO\Domains\Schema\Fqdn>|null $hosts
     */
    public function __construct(
        public readonly \CommunitySDKs\Spaceship\DTO\Domains\Enum\Provider $provider,
        public readonly array|null $hosts = null
    ) {
        if ($hosts !== null) { foreach ($hosts as $item) { \CommunitySDKs\Spaceship\DTO\ValueValidator::check($item, 'CommunitySDKs\\Spaceship\\DTO\\Domains\\Schema\\Fqdn'); } }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('provider', $data) ? \CommunitySDKs\Spaceship\DTO\Domains\Enum\Provider::fromValue($data['provider']) : throw new \InvalidArgumentException("Missing required field provider for DomainNameServersConfigurationRequest"),
            array_key_exists('hosts', $data) ? ($data['hosts'] === null ? null : array_map(static fn ($item) => \CommunitySDKs\Spaceship\DTO\Domains\Schema\Fqdn::fromValue($item), $data['hosts'])) : null
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['provider'] = $this->provider->toValue();
        if ($this->hosts !== null) { $data['hosts'] = array_map(static fn ($item) => $item->toValue(), $this->hosts); }
        return $data;
    }
}
