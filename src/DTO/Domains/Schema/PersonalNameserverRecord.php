<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

use InvalidArgumentException;
use CommunitySDKs\Spaceship\DTO\BaseSchema;
final class PersonalNameserverRecord extends BaseSchema
{
    /**
     * @var list<IpAddress>
     */
    /**
     * @param list<IpAddress> $ips
     */
    public function __construct(
        public readonly Host $host,
        public readonly array $ips
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('host', $data) ? ($data['host'] === null ? throw new InvalidArgumentException('Field host cannot be null in PersonalNameserverRecord.') : Host::fromValue((string) $data['host'])) : throw new InvalidArgumentException('Missing required field host for PersonalNameserverRecord.'),
            array_key_exists('ips', $data) ? ($data['ips'] === null ? throw new InvalidArgumentException('Field ips cannot be null in PersonalNameserverRecord.') : array_map(static fn (mixed $item): IpAddress => IpAddress::fromValue((string) $item), (array) $data['ips'])) : throw new InvalidArgumentException('Missing required field ips for PersonalNameserverRecord.'),        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['host'] = $this->host->toValue();
        $data['ips'] = array_map(static fn (mixed $item): mixed => $item->toValue(), $this->ips);

        return $data;
    }
}