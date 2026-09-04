<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

class PersonalNameservers
{
    /**
     * @param list<\CommunitySDKs\Spaceship\DTO\Domains\Schema\PersonalNameserverRecord> $records
     */
    public function __construct(
        public readonly array $records
    ) {
        if ($records !== null) { foreach ($records as $item) { \CommunitySDKs\Spaceship\DTO\ValueValidator::check($item, 'CommunitySDKs\\Spaceship\\DTO\\Domains\\Schema\\PersonalNameserverRecord'); } }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('records', $data) ? array_map(static fn ($item) => \CommunitySDKs\Spaceship\DTO\Domains\Schema\PersonalNameserverRecord::fromArray($item), $data['records']) : throw new \InvalidArgumentException("Missing required field records for PersonalNameservers")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['records'] = array_map(static fn ($item) => $item->toArray(), $this->records);
        return $data;
    }
}
