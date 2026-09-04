<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Hyperlift\Request;

final class GetHyperliftApplicationLogsRequest extends \CommunitySDKs\Spaceship\DTO\BaseRequest
{
    public function __construct(
        public readonly string $id,
        public readonly int|null $take = null,
        public readonly string|null $cursor = null
    ) {

    }

    public function toQueryParams(): array
    {
        $values = [];
        if ($this->take !== null) { $values['take'] = $this->take; }
        if ($this->cursor !== null) { $values['cursor'] = $this->cursor; }
        return $values;
    }
}
