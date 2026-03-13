<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Request;

final class DeletesellerhubdomainRequest
{
    public function __construct(
        public readonly string $domain
    ) {
    }

    public function resolvePath(): string
    {
        $path = "/v1/sellerhub/domains/{domain}";
        $path = str_replace('{domain}', (string) $this->domain, $path);
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
        );
    }
}
