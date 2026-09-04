<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\ContactsAttributes\Schema;

class AttributesContactsAttributesResponse
{
    public function __construct(
        public readonly \CommunitySDKs\Spaceship\DTO\Domains\Schema\ContactId $contactId
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('contactId', $data) ? \CommunitySDKs\Spaceship\DTO\Domains\Schema\ContactId::fromValue($data['contactId']) : throw new \InvalidArgumentException("Missing required field contactId for AttributesContactsAttributesResponse")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['contactId'] = $this->contactId->toValue();
        return $data;
    }
}
