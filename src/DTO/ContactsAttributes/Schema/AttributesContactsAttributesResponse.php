<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\ContactsAttributes\Schema;

use CommunitySDKs\Spaceship\DTO\Domains\Schema\ContactId;
use InvalidArgumentException;

final class AttributesContactsAttributesResponse
{
    public function __construct(
        public readonly ContactId $contactId
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('contactId', $data)
                ? ($data['contactId'] === null
                    ? throw new InvalidArgumentException('Field contactId cannot be null in AttributesContactsAttributesResponse.')
                    : ContactId::fromValue((string) $data['contactId']))
                : throw new InvalidArgumentException('Missing required field contactId for AttributesContactsAttributesResponse.'),
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['contactId'] = $this->contactId->toValue();

        return $data;
    }
}