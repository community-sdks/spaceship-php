<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

use InvalidArgumentException;
use CommunitySDKs\Spaceship\DTO\BaseSchema;
final class PersonalNameservers extends BaseSchema
{
    /**
     * @var list<PersonalNameserverRecord>
     */
    /**
     * @param list<PersonalNameserverRecord> $records
     */
    public function __construct(
        public readonly array $records
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('records', $data) ? ($data['records'] === null ? throw new InvalidArgumentException('Field records cannot be null in PersonalNameservers.') : array_map(static fn (mixed $item): PersonalNameserverRecord => PersonalNameserverRecord::fromArray((array) $item), (array) $data['records'])) : throw new InvalidArgumentException('Missing required field records for PersonalNameservers.'),        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['records'] = array_map(static fn (mixed $item): mixed => $item->toArray(), $this->records);

        return $data;
    }
}