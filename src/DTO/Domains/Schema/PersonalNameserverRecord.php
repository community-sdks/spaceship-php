<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

class PersonalNameserverRecord
{
    /**
     * @param list<\CommunitySDKs\Spaceship\DTO\Domains\Schema\IpAddress> $ips
     */
    public function __construct(
        public readonly \CommunitySDKs\Spaceship\DTO\Domains\Schema\Host $host,
        public readonly array $ips
    ) {
        if ($ips !== null) { foreach ($ips as $item) { \CommunitySDKs\Spaceship\DTO\ValueValidator::check($item, 'CommunitySDKs\\Spaceship\\DTO\\Domains\\Schema\\IpAddress'); } }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('host', $data) ? \CommunitySDKs\Spaceship\DTO\Domains\Schema\Host::fromValue($data['host']) : throw new \InvalidArgumentException("Missing required field host for PersonalNameserverRecord"),
            array_key_exists('ips', $data) ? array_map(static fn ($item) => \CommunitySDKs\Spaceship\DTO\Domains\Schema\IpAddress::fromValue($item), $data['ips']) : throw new \InvalidArgumentException("Missing required field ips for PersonalNameserverRecord")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['host'] = $this->host->toValue();
        $data['ips'] = array_map(static fn ($item) => $item->toValue(), $this->ips);
        return $data;
    }
}
