<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\ContactsAttributes\Schema;

class UsAttributeDetails extends \CommunitySDKs\Spaceship\DTO\ContactsAttributes\Schema\AttributeDetails
{
    public function __construct(
        string $type,
        public readonly string $appPurpose,
        public readonly string $nexusCategory
    ) {
        parent::__construct($type);
        if ($type !== null && !in_array($type, ["us"], true)) { throw new \InvalidArgumentException("Invalid type"); }
        if ($appPurpose !== null && !in_array($appPurpose, ["P1", "P2", "P3", "P4", "P5"], true)) { throw new \InvalidArgumentException("Invalid appPurpose"); }
        if ($nexusCategory !== null && !in_array($nexusCategory, ["C11", "C12", "C21", "C31", "C32"], true)) { throw new \InvalidArgumentException("Invalid nexusCategory"); }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? $data['type'] : throw new \InvalidArgumentException("Missing required field type for UsAttributeDetails"),
            array_key_exists('appPurpose', $data) ? $data['appPurpose'] : throw new \InvalidArgumentException("Missing required field appPurpose for UsAttributeDetails"),
            array_key_exists('nexusCategory', $data) ? $data['nexusCategory'] : throw new \InvalidArgumentException("Missing required field nexusCategory for UsAttributeDetails")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['type'] = $this->type;
        $data['appPurpose'] = $this->appPurpose;
        $data['nexusCategory'] = $this->nexusCategory;
        return $data;
    }
}
