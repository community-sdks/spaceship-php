<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\ContactsAttributes\Schema;

use CommunitySDKs\Spaceship\DTO\ContactsAttributes\Enum\CaCiraCategory;
use InvalidArgumentException;
class CaAttributeDetails extends AttributeDetails
{
    public function __construct(
        string $type,
        public readonly bool $agreementValue,
        public readonly string $language,
        public readonly CaCiraCategory $registrantCiraCategory
    ) {
        parent::__construct($type);
        if ($type !== 'ca') {
            throw new InvalidArgumentException('Expected type to be ' . 'ca' . ' in CaAttributeDetails.');
        }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('type', $data) ? ($data['type'] === null ? throw new InvalidArgumentException('Field type cannot be null in CaAttributeDetails.') : (string) $data['type']) : throw new InvalidArgumentException('Missing required field type for CaAttributeDetails.'),
            array_key_exists('agreementValue', $data) ? ($data['agreementValue'] === null ? throw new InvalidArgumentException('Field agreementValue cannot be null in CaAttributeDetails.') : (bool) $data['agreementValue']) : throw new InvalidArgumentException('Missing required field agreementValue for CaAttributeDetails.'),
            array_key_exists('language', $data) ? ($data['language'] === null ? throw new InvalidArgumentException('Field language cannot be null in CaAttributeDetails.') : (string) $data['language']) : throw new InvalidArgumentException('Missing required field language for CaAttributeDetails.'),
            array_key_exists('registrantCiraCategory', $data) ? ($data['registrantCiraCategory'] === null ? throw new InvalidArgumentException('Field registrantCiraCategory cannot be null in CaAttributeDetails.') : CaCiraCategory::fromValue((string) $data['registrantCiraCategory'])) : throw new InvalidArgumentException('Missing required field registrantCiraCategory for CaAttributeDetails.'),        );
    }

    public function toArray(): array
    {
        $data = parent::toArray();
        $data['agreementValue'] = $this->agreementValue;
        $data['language'] = $this->language;
        $data['registrantCiraCategory'] = $this->registrantCiraCategory->toValue();

        return $data;
    }
}