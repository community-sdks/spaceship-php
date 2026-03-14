<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use InvalidArgumentException;
final class SellerHubVerificationOption extends BaseSchema
{
    /**
     * @var list<SellerHubVerificationRecord>
     */
    /**
     * @param list<SellerHubVerificationRecord> $records
     */
    public function __construct(
        public readonly array $records
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('records', $data) ? ($data['records'] === null ? throw new InvalidArgumentException('Field records cannot be null in SellerHubVerificationOption.') : array_map(static fn (mixed $item): SellerHubVerificationRecord => SellerHubVerificationRecord::fromArray((array) $item), (array) $data['records'])) : throw new InvalidArgumentException('Missing required field records for SellerHubVerificationOption.'),        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['records'] = array_map(static fn (mixed $item): mixed => $item->toArray(), $this->records);

        return $data;
    }
}