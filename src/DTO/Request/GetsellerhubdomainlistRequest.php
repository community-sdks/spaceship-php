<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Request;

final class GetsellerhubdomainlistRequest
{
    public function __construct(
        public readonly int $take,
        public readonly int $skip
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
            'take' => $this->take,
            'skip' => $this->skip,
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
            1,
            1,
        );
    }
}
