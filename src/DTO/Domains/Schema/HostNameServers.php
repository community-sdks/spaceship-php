<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

use InvalidArgumentException;
use CommunitySDKs\Spaceship\DTO\BaseSchema;
final class HostNameServers extends BaseSchema
{
    /**
     * @var list<IpAddress>
     */
    /**
     * @param list<IpAddress> $ips
     */
    public function __construct(
        public readonly array $ips
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('ips', $data) ? ($data['ips'] === null ? throw new InvalidArgumentException('Field ips cannot be null in HostNameServers.') : array_map(static fn (mixed $item): IpAddress => IpAddress::fromValue((string) $item), (array) $data['ips'])) : throw new InvalidArgumentException('Missing required field ips for HostNameServers.'),        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['ips'] = array_map(static fn (mixed $item): mixed => $item->toValue(), $this->ips);

        return $data;
    }
}