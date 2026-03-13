<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Request;

final class GetDomainPersonalNameserverHostInfoRequest
{
    public function __construct(
        public readonly string $domain,
        public readonly string $currentHost
    ) {
    }

    public function resolvePath(): string
    {
        $path = "/v1/domains/{domain}/personal-nameservers/{currentHost}";
        $path = str_replace('{domain}', (string) $this->domain, $path);
        $path = str_replace('{currentHost}', (string) $this->currentHost, $path);
        return $path;
    }

    /**
     * @return array<string, scalar|list<scalar>>
     */
    public function toQueryParams(): array
    {
        return [

        ];
    }

    /**
     * @return array<string, string>
     */
    public function toHeaders(): array
    {
        return [];
    }

    /**
     * @return array<string, scalar|array|null>|null
     */
    public function toBody(): ?array
    {
        return null;
    }

    public static function sample(): self
    {
        return new self(
            'spaceship.com',
            'api.www',
        );
    }
}
