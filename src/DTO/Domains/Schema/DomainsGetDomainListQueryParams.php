<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

class DomainsGetDomainListQueryParams
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

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('take', $data) ? $data['take'] : throw new \InvalidArgumentException("Missing required field take for DomainsGetDomainListQueryParams"),
            array_key_exists('skip', $data) ? $data['skip'] : throw new \InvalidArgumentException("Missing required field skip for DomainsGetDomainListQueryParams"),
            array_key_exists('orderBy', $data) ? ($data['orderBy'] === null ? null : array_map(static fn ($item) => $item, $data['orderBy'])) : null
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['take'] = $this->take;
        $data['skip'] = $this->skip;
        if ($this->orderBy !== null) { $data['orderBy'] = array_map(static fn ($item) => $item, $this->orderBy); }
        return $data;
    }
}
