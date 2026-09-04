<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Request;

final class GetDomainListRequest extends \CommunitySDKs\Spaceship\DTO\BaseRequest
{
    /**
     * @param list<string>|null $orderBy
     */
    public function __construct(
        public readonly int $take,
        public readonly int $skip,
        public readonly array|null $orderBy = null
    ) {
        if ($orderBy !== null) { foreach ($orderBy as $item) { \CommunitySDKs\Spaceship\DTO\ValueValidator::check($item, 'string'); } }
    }

    public function toQueryParams(): array
    {
        $values = [];
        if ($this->take !== null) { $values['take'] = $this->take; }
        if ($this->skip !== null) { $values['skip'] = $this->skip; }
        if ($this->orderBy !== null) { $values['orderBy'] = implode(',', array_map(static fn ($item) => $item, $this->orderBy)); }
        return $values;
    }
}
