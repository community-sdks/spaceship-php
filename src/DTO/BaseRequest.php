<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO;

abstract class BaseRequest
{
    /**
     * @return array<string, scalar|list<scalar>>
     */
    public function toQueryParams(): array
    {
        return [];
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
}
