<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Config;

final class SpaceshipConfig
{
    public function __construct(
        public readonly string $apiKey,
        public readonly string $apiSecret,
        public readonly Environment $environment = Environment::SANDBOX,
        public readonly int $timeoutSeconds = 30,
    ) {
    }

    public static function sandbox(string $apiKey, string $apiSecret, int $timeoutSeconds = 30): self
    {
        return new self($apiKey, $apiSecret, Environment::SANDBOX, $timeoutSeconds);
    }

    public static function production(string $apiKey, string $apiSecret, int $timeoutSeconds = 30): self
    {
        return new self($apiKey, $apiSecret, Environment::PRODUCTION, $timeoutSeconds);
    }
}
