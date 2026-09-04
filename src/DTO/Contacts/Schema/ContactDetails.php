<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Contacts\Schema;

class ContactDetails
{
    public function __construct(
        public readonly string $firstName,
        public readonly string $lastName,
        public readonly string|null $organization,
        public readonly string $email,
        public readonly string $address1,
        public readonly string|null $address2,
        public readonly string $city,
        public readonly \CommunitySDKs\Spaceship\DTO\Contacts\Schema\CountryCode $country,
        public readonly string|null $stateProvince,
        public readonly string|null $postalCode,
        public readonly \CommunitySDKs\Spaceship\DTO\Contacts\Schema\Phone $phone,
        public readonly \CommunitySDKs\Spaceship\DTO\Contacts\Schema\PhoneExt|null $phoneExt = null,
        public readonly \CommunitySDKs\Spaceship\DTO\Contacts\Schema\Phone|null $fax = null,
        public readonly \CommunitySDKs\Spaceship\DTO\Contacts\Schema\PhoneExt|null $faxExt = null,
        public readonly string|null $taxNumber = null
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('firstName', $data) ? $data['firstName'] : throw new \InvalidArgumentException("Missing required field firstName for ContactDetails"),
            array_key_exists('lastName', $data) ? $data['lastName'] : throw new \InvalidArgumentException("Missing required field lastName for ContactDetails"),
            array_key_exists('organization', $data) ? ($data['organization'] === null ? null : $data['organization']) : null,
            array_key_exists('email', $data) ? $data['email'] : throw new \InvalidArgumentException("Missing required field email for ContactDetails"),
            array_key_exists('address1', $data) ? $data['address1'] : throw new \InvalidArgumentException("Missing required field address1 for ContactDetails"),
            array_key_exists('address2', $data) ? ($data['address2'] === null ? null : $data['address2']) : null,
            array_key_exists('city', $data) ? $data['city'] : throw new \InvalidArgumentException("Missing required field city for ContactDetails"),
            array_key_exists('country', $data) ? \CommunitySDKs\Spaceship\DTO\Contacts\Schema\CountryCode::fromValue($data['country']) : throw new \InvalidArgumentException("Missing required field country for ContactDetails"),
            array_key_exists('stateProvince', $data) ? ($data['stateProvince'] === null ? null : $data['stateProvince']) : null,
            array_key_exists('postalCode', $data) ? ($data['postalCode'] === null ? null : $data['postalCode']) : null,
            array_key_exists('phone', $data) ? \CommunitySDKs\Spaceship\DTO\Contacts\Schema\Phone::fromValue($data['phone']) : throw new \InvalidArgumentException("Missing required field phone for ContactDetails"),
            array_key_exists('phoneExt', $data) ? ($data['phoneExt'] === null ? null : \CommunitySDKs\Spaceship\DTO\Contacts\Schema\PhoneExt::fromValue($data['phoneExt'])) : null,
            array_key_exists('fax', $data) ? ($data['fax'] === null ? null : \CommunitySDKs\Spaceship\DTO\Contacts\Schema\Phone::fromValue($data['fax'])) : null,
            array_key_exists('faxExt', $data) ? ($data['faxExt'] === null ? null : \CommunitySDKs\Spaceship\DTO\Contacts\Schema\PhoneExt::fromValue($data['faxExt'])) : null,
            array_key_exists('taxNumber', $data) ? ($data['taxNumber'] === null ? null : $data['taxNumber']) : null
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['firstName'] = $this->firstName;
        $data['lastName'] = $this->lastName;
        if ($this->organization !== null) { $data['organization'] = $this->organization; }
        $data['email'] = $this->email;
        $data['address1'] = $this->address1;
        if ($this->address2 !== null) { $data['address2'] = $this->address2; }
        $data['city'] = $this->city;
        $data['country'] = $this->country->toValue();
        if ($this->stateProvince !== null) { $data['stateProvince'] = $this->stateProvince; }
        if ($this->postalCode !== null) { $data['postalCode'] = $this->postalCode; }
        $data['phone'] = $this->phone->toValue();
        if ($this->phoneExt !== null) { $data['phoneExt'] = $this->phoneExt->toValue(); }
        if ($this->fax !== null) { $data['fax'] = $this->fax->toValue(); }
        if ($this->faxExt !== null) { $data['faxExt'] = $this->faxExt->toValue(); }
        if ($this->taxNumber !== null) { $data['taxNumber'] = $this->taxNumber; }
        return $data;
    }
}
