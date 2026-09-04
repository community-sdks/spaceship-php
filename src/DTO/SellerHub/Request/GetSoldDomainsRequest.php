<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Request;

final class GetSoldDomainsRequest extends \CommunitySDKs\Spaceship\DTO\BaseRequest
{
    public function __construct(
        public readonly int $take,
        public readonly string|null $cursor = null,
        public readonly string|null $saleDateTimeFrom = null,
        public readonly string|null $saleDateTimeTo = null
    ) {

    }

    public function toQueryParams(): array
    {
        $values = [];
        if ($this->take !== null) { $values['take'] = $this->take; }
        if ($this->cursor !== null) { $values['cursor'] = $this->cursor; }
        if ($this->saleDateTimeFrom !== null) { $values['saleDateTimeFrom'] = $this->saleDateTimeFrom; }
        if ($this->saleDateTimeTo !== null) { $values['saleDateTimeTo'] = $this->saleDateTimeTo; }
        return $values;
    }
}
