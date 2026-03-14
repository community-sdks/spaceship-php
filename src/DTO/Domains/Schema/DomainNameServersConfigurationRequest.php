<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

use CommunitySDKs\Spaceship\DTO\Domains\Enum\Provider as ProviderEnum;
use InvalidArgumentException;
use CommunitySDKs\Spaceship\DTO\BaseSchema;
class DomainNameServersConfigurationRequest extends BaseSchema
{
    /**
     * @var list<Fqdn>
     */
    /**
     * @param list<Fqdn> $hosts
     */
    public function __construct(
        public readonly ProviderEnum $provider,
        public readonly array|null $hosts
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('provider', $data) ? ($data['provider'] === null ? throw new InvalidArgumentException('Field provider cannot be null in DomainNameServersConfigurationRequest.') : ProviderEnum::fromValue((string) $data['provider'])) : throw new InvalidArgumentException('Missing required field provider for DomainNameServersConfigurationRequest.'),
            array_key_exists('hosts', $data) && $data['hosts'] !== null ? array_map(static fn (mixed $item): Fqdn => Fqdn::fromValue((string) $item), (array) $data['hosts']) : null,        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['provider'] = $this->provider->toValue();
        if ($this->hosts !== null) {
            $data['hosts'] = array_map(static fn (mixed $item): mixed => $item->toValue(), $this->hosts);
        }

        return $data;
    }
}