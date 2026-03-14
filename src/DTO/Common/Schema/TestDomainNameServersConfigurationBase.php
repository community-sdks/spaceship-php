<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Common\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use InvalidArgumentException;
final class TestDomainNameServersConfigurationBase extends BaseSchema
{
    public function __construct(
        public readonly string $provider,
        public readonly int|null $minimumMaximumTest
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('provider', $data) ? ($data['provider'] === null ? throw new InvalidArgumentException('Field provider cannot be null in TestDomainNameServersConfigurationBase.') : (string) $data['provider']) : throw new InvalidArgumentException('Missing required field provider for TestDomainNameServersConfigurationBase.'),
            array_key_exists('minimumMaximumTest', $data) && $data['minimumMaximumTest'] !== null ? (int) $data['minimumMaximumTest'] : null,        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['provider'] = $this->provider;
        if ($this->minimumMaximumTest !== null) {
            $data['minimumMaximumTest'] = $this->minimumMaximumTest;
        }

        return $data;
    }
}