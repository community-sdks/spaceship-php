<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use InvalidArgumentException;
final class SellerHubGetSellerDomainListResponse extends BaseSchema
{
    public function __construct(
        public readonly string $contactId
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('contactId', $data) ? ($data['contactId'] === null ? throw new InvalidArgumentException('Field contactId cannot be null in SellerHubGetSellerDomainListResponse.') : (string) $data['contactId']) : throw new InvalidArgumentException('Missing required field contactId for SellerHubGetSellerDomainListResponse.'),        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['contactId'] = $this->contactId;

        return $data;
    }
}