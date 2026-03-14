<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\ContactsAttributes\Schema;

use InvalidArgumentException;
class UsAttributeDetails extends AttributeDetails
{
    public function __construct(
        string $type,
        public readonly string $appPurpose,
        public readonly string $nexusCategory
    ) {
        parent::__construct($type);
        if ($type !== 'us') {
            throw new InvalidArgumentException('Expected type to be ' . 'us' . ' in UsAttributeDetails.');
        }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in UsAttributeDetails.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for UsAttributeDetails.'),
            array_key_exists('appPurpose', $data) ? ($data['appPurpose'] === null ? throw new InvalidArgumentException('Field appPurpose cannot be null in UsAttributeDetails.') : (string) $data['appPurpose']) : throw new InvalidArgumentException('Missing required field appPurpose for UsAttributeDetails.'),
            array_key_exists('nexusCategory', $data) ? ($data['nexusCategory'] === null ? throw new InvalidArgumentException('Field nexusCategory cannot be null in UsAttributeDetails.') : (string) $data['nexusCategory']) : throw new InvalidArgumentException('Missing required field nexusCategory for UsAttributeDetails.'),        );
    }

    public function toArray(): array
    {
        $data = parent::toArray();
        $data['appPurpose'] = $this->appPurpose;
        $data['nexusCategory'] = $this->nexusCategory;

        return $data;
    }
}