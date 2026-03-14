<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

use CommunitySDKs\Spaceship\DTO\Domains\Enum\Provider as ProviderEnum;
use InvalidArgumentException;
class DomainNameServersConfigurationResponse extends DomainNameServersConfigurationRequest
{


    /**
     * @param list<Fqdn> $hosts
     */
    public function __construct(
        ProviderEnum $provider,
        array $hosts
    ) {
        parent::__construct($provider, $hosts);
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('provider', $data) ? ($data['provider'] === null ? throw new InvalidArgumentException('Field provider cannot be null in DomainNameServersConfigurationResponse.') : ProviderEnum::fromValue((string) $data['provider'])) : throw new InvalidArgumentException('Missing required field provider for DomainNameServersConfigurationResponse.'),
            array_key_exists('hosts', $data) ? ($data['hosts'] === null ? throw new InvalidArgumentException('Field hosts cannot be null in DomainNameServersConfigurationResponse.') : array_map(static fn (mixed $item): Fqdn => Fqdn::fromValue((string) $item), (array) $data['hosts'])) : throw new InvalidArgumentException('Missing required field hosts for DomainNameServersConfigurationResponse.'),        );
    }
}