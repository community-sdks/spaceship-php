<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Request;

final class GetResourceRecordsListRequest
{
    public function __construct(
        public readonly string $domain,
        public readonly int $take,
        public readonly int $skip,
        public readonly array $orderBy
    ) {
    }

    public function resolvePath(): string
    {
        $path = "/v1/dns/records/{domain}";
        $path = str_replace('{domain}', (string) $this->domain, $path);
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
            'orderBy' => $this->orderBy,
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
            1,
            1,
            [],
        );
    }
}
