<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\ContactsAttributes\Schema;

class AttributeDetails
{
    public function __construct(
        public readonly string $type
    ) {

    }

    public static function fromArray(array $data): self
    {
        $type = $data['type'] ?? null;
        switch ($type) {
            case 'ca': return \CommunitySDKs\Spaceship\DTO\ContactsAttributes\Schema\CaAttributeDetails::fromArray($data);
            case 'us': return \CommunitySDKs\Spaceship\DTO\ContactsAttributes\Schema\UsAttributeDetails::fromArray($data);
            default: throw new \InvalidArgumentException("Unknown discriminator for AttributeDetails");
        }
    }

    public function toArray(): array
    {
        $data = [];
        $data['type'] = $this->type;
        return $data;
    }
}
