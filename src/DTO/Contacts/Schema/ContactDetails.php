<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Contacts\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use InvalidArgumentException;
final class ContactDetails extends BaseSchema
{
    public function __construct(
        public readonly string $firstName,
        public readonly string $lastName,
        public readonly string|null $organization,
        public readonly string $email,
        public readonly string $address1,
        public readonly string|null $address2,
        public readonly string $city,
        public readonly CountryCode $country,
        public readonly string|null $stateProvince,
        public readonly string|null $postalCode,
        public readonly Phone $phone,
        public readonly PhoneExt|null $phoneExt,
        public readonly Phone|null $fax,
        public readonly PhoneExt|null $faxExt,
        public readonly string|null $taxNumber
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('firstName', $data) ? ($data['firstName'] === null ? throw new InvalidArgumentException('Field firstName cannot be null in ContactDetails.') : (string) $data['firstName']) : throw new InvalidArgumentException('Missing required field firstName for ContactDetails.'),
            array_key_exists('lastName', $data) ? ($data['lastName'] === null ? throw new InvalidArgumentException('Field lastName cannot be null in ContactDetails.') : (string) $data['lastName']) : throw new InvalidArgumentException('Missing required field lastName for ContactDetails.'),
            array_key_exists('organization', $data) && $data['organization'] !== null ? (string) $data['organization'] : null,
            array_key_exists('email', $data) ? ($data['email'] === null ? throw new InvalidArgumentException('Field email cannot be null in ContactDetails.') : (string) $data['email']) : throw new InvalidArgumentException('Missing required field email for ContactDetails.'),
            array_key_exists('address1', $data) ? ($data['address1'] === null ? throw new InvalidArgumentException('Field address1 cannot be null in ContactDetails.') : (string) $data['address1']) : throw new InvalidArgumentException('Missing required field address1 for ContactDetails.'),
            array_key_exists('address2', $data) && $data['address2'] !== null ? (string) $data['address2'] : null,
            array_key_exists('city', $data) ? ($data['city'] === null ? throw new InvalidArgumentException('Field city cannot be null in ContactDetails.') : (string) $data['city']) : throw new InvalidArgumentException('Missing required field city for ContactDetails.'),
            array_key_exists('country', $data) ? ($data['country'] === null ? throw new InvalidArgumentException('Field country cannot be null in ContactDetails.') : CountryCode::fromValue((string) $data['country'])) : throw new InvalidArgumentException('Missing required field country for ContactDetails.'),
            array_key_exists('stateProvince', $data) && $data['stateProvince'] !== null ? (string) $data['stateProvince'] : null,
            array_key_exists('postalCode', $data) && $data['postalCode'] !== null ? (string) $data['postalCode'] : null,
            array_key_exists('phone', $data) ? ($data['phone'] === null ? throw new InvalidArgumentException('Field phone cannot be null in ContactDetails.') : Phone::fromValue((string) $data['phone'])) : throw new InvalidArgumentException('Missing required field phone for ContactDetails.'),
            array_key_exists('phoneExt', $data) && $data['phoneExt'] !== null ? PhoneExt::fromValue((string) $data['phoneExt']) : null,
            array_key_exists('fax', $data) && $data['fax'] !== null ? Phone::fromValue((string) $data['fax']) : null,
            array_key_exists('faxExt', $data) && $data['faxExt'] !== null ? PhoneExt::fromValue((string) $data['faxExt']) : null,
            array_key_exists('taxNumber', $data) && $data['taxNumber'] !== null ? (string) $data['taxNumber'] : null,        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['firstName'] = $this->firstName;
        $data['lastName'] = $this->lastName;
        if ($this->organization !== null) {
            $data['organization'] = $this->organization;
        }
        $data['email'] = $this->email;
        $data['address1'] = $this->address1;
        if ($this->address2 !== null) {
            $data['address2'] = $this->address2;
        }
        $data['city'] = $this->city;
        $data['country'] = $this->country->toValue();
        if ($this->stateProvince !== null) {
            $data['stateProvince'] = $this->stateProvince;
        }
        if ($this->postalCode !== null) {
            $data['postalCode'] = $this->postalCode;
        }
        $data['phone'] = $this->phone->toValue();
        if ($this->phoneExt !== null) {
            $data['phoneExt'] = $this->phoneExt->toValue();
        }
        if ($this->fax !== null) {
            $data['fax'] = $this->fax->toValue();
        }
        if ($this->faxExt !== null) {
            $data['faxExt'] = $this->faxExt->toValue();
        }
        if ($this->taxNumber !== null) {
            $data['taxNumber'] = $this->taxNumber;
        }

        return $data;
    }
}