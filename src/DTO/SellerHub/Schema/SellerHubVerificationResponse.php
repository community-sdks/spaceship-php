<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use InvalidArgumentException;

final class SellerHubVerificationResponse extends BaseSchema
{
    /**
     * @var list<SellerHubVerificationOption>
    */
    /**
     * @param list<SellerHubVerificationOption> $options
     */
    public function __construct(
        public readonly array $options
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('options', $data) ? ($data['options'] === null ? throw new InvalidArgumentException('Field options cannot be null in SellerHubVerificationResponse.') : array_map(static fn (mixed $item): SellerHubVerificationOption => SellerHubVerificationOption::fromArray((array) $item), (array) $data['options'])) : throw new InvalidArgumentException('Missing required field options for SellerHubVerificationResponse.'),        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['options'] = array_map(static fn (mixed $item): mixed => $item->toArray(), $this->options);

        return $data;
    }
}