<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Request;

final class CreatesellerhubdomainRequest
{
    public function __construct(
        public readonly \CommunitySDKs\Spaceship\DTO\Schema\Createsellerhubdomainrequest $body
    ) {
    }

    public function resolvePath(): string
    {
        $path = "/v1/sellerhub/domains";

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
            \CommunitySDKs\Spaceship\DTO\Schema\Createsellerhubdomainrequest::sample(),
        );
    }
}
