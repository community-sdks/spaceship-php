<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use InvalidArgumentException;
final class DomainsGetDomainListQueryParams extends BaseSchema
{
    /**
     * @var list<string>
     */
    /**
     * @param list<string> $orderBy
     */
    public function __construct(
        public readonly int $take,
        public readonly int $skip,
        public readonly array|null $orderBy
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('take', $data) ? ($data['take'] === null ? throw new InvalidArgumentException('Field take cannot be null in DomainsGetDomainListQueryParams.') : (int) $data['take']) : throw new InvalidArgumentException('Missing required field take for DomainsGetDomainListQueryParams.'),
            array_key_exists('skip', $data) ? ($data['skip'] === null ? throw new InvalidArgumentException('Field skip cannot be null in DomainsGetDomainListQueryParams.') : (int) $data['skip']) : throw new InvalidArgumentException('Missing required field skip for DomainsGetDomainListQueryParams.'),
            array_key_exists('orderBy', $data) && $data['orderBy'] !== null ? array_map(static fn (mixed $item): string => (string) $item, (array) $data['orderBy']) : null,        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['take'] = $this->take;
        $data['skip'] = $this->skip;
        if ($this->orderBy !== null) {
            $data['orderBy'] = array_map(static fn (mixed $item): mixed => $item, $this->orderBy);
        }

        return $data;
    }
}