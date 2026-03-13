<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Request;

final class UpdateDomainPersonalNameserverHostInfoRequest
{
    public function __construct(
        public readonly string $domain,
        public readonly string $currentHost,
        public readonly \CommunitySDKs\Spaceship\DTO\Schema\Personalnameserverrecord $body
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
        return $this->body->toArray();
    }

    public static function sample(): self
    {
        return new self(
            'spaceship.com',
            'api.www',
            \CommunitySDKs\Spaceship\DTO\Schema\Personalnameserverrecord::sample(),
        );
    }
}
