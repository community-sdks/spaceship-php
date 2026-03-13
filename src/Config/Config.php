<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Config;

final class Config
{
    public function __construct(
        public readonly string $apiKey,
        public readonly string $apiSecret,
        public readonly Environment $environment = Environment::SANDBOX,
        public readonly int $timeoutSeconds = 30,
        public readonly ?string $customEndpoint = null,
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

    public static function withCustomEndpoint(
        string $apiKey,
        string $apiSecret,
        string $customEndpoint,
        int $timeoutSeconds = 30,
        Environment $environment = Environment::SANDBOX,
    ): self {
        return new self($apiKey, $apiSecret, $environment, $timeoutSeconds, rtrim($customEndpoint, '/'));
    }

    public function baseUrl(): string
    {
        return $this->customEndpoint !== null && $this->customEndpoint != ''
            ? rtrim($this->customEndpoint, '/')
            : rtrim($this->environment->value, '/');
    }
}
