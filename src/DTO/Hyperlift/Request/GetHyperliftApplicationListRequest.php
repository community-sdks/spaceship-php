<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Hyperlift\Request;

final class GetHyperliftApplicationListRequest extends \CommunitySDKs\Spaceship\DTO\BaseRequest
{
    public function __construct(
        public readonly int $take,
        public readonly int $skip
    ) {

    }

    public function toQueryParams(): array
    {
        $values = [];
        if ($this->take !== null) { $values['take'] = $this->take; }
        if ($this->skip !== null) { $values['skip'] = $this->skip; }
        return $values;
    }
}
