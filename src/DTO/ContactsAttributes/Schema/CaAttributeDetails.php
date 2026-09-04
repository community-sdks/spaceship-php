<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\ContactsAttributes\Schema;

class CaAttributeDetails extends \CommunitySDKs\Spaceship\DTO\ContactsAttributes\Schema\AttributeDetails
{
    public function __construct(
        string $type,
        public readonly bool $agreementValue,
        public readonly string $language,
        public readonly \CommunitySDKs\Spaceship\DTO\ContactsAttributes\Enum\CaCiraCategory $registrantCiraCategory
    ) {
        parent::__construct($type);
        if ($type !== null && !in_array($type, ["ca"], true)) { throw new \InvalidArgumentException("Invalid type"); }
        if ($language !== null && !in_array($language, ["EN", "FR"], true)) { throw new \InvalidArgumentException("Invalid language"); }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? $data['type'] : throw new \InvalidArgumentException("Missing required field type for CaAttributeDetails"),
            array_key_exists('agreementValue', $data) ? $data['agreementValue'] : throw new \InvalidArgumentException("Missing required field agreementValue for CaAttributeDetails"),
            array_key_exists('language', $data) ? $data['language'] : throw new \InvalidArgumentException("Missing required field language for CaAttributeDetails"),
            array_key_exists('registrantCiraCategory', $data) ? \CommunitySDKs\Spaceship\DTO\ContactsAttributes\Enum\CaCiraCategory::fromValue($data['registrantCiraCategory']) : throw new \InvalidArgumentException("Missing required field registrantCiraCategory for CaAttributeDetails")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['type'] = $this->type;
        $data['agreementValue'] = $this->agreementValue;
        $data['language'] = $this->language;
        $data['registrantCiraCategory'] = $this->registrantCiraCategory->toValue();
        return $data;
    }
}
