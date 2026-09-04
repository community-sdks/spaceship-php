<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

class DomainNameServersConfigurationResponse extends \CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainNameServersConfigurationRequest
{
    /**
     * @param list<\CommunitySDKs\Spaceship\DTO\Domains\Schema\Fqdn> $hosts
     */
    public function __construct(
        \CommunitySDKs\Spaceship\DTO\Domains\Enum\Provider $provider,
        array $hosts
    ) {
        parent::__construct($provider, $hosts);
        if ($hosts !== null) { foreach ($hosts as $item) { \CommunitySDKs\Spaceship\DTO\ValueValidator::check($item, 'CommunitySDKs\\Spaceship\\DTO\\Domains\\Schema\\Fqdn'); } }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('provider', $data) ? \CommunitySDKs\Spaceship\DTO\Domains\Enum\Provider::fromValue($data['provider']) : throw new \InvalidArgumentException("Missing required field provider for DomainNameServersConfigurationResponse"),
            array_key_exists('hosts', $data) ? array_map(static fn ($item) => \CommunitySDKs\Spaceship\DTO\Domains\Schema\Fqdn::fromValue($item), $data['hosts']) : throw new \InvalidArgumentException("Missing required field hosts for DomainNameServersConfigurationResponse")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['provider'] = $this->provider->toValue();
        $data['hosts'] = array_map(static fn ($item) => $item->toValue(), $this->hosts);
        return $data;
    }
}
