<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

class DomainInfo
{
    /**
     * @param list<\CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainClientEPPStatus> $eppStatuses
     * @param list<\CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainSuspensionDetails> $suspensions
     */
    public function __construct(
        public readonly \CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainNameALabel $name,
        public readonly \CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainNameULabel $unicodeName,
        public readonly bool $isPremium,
        public readonly bool $autoRenew,
        public readonly \CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate $registrationDate,
        public readonly \CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate $expirationDate,
        public readonly \CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainLifecycleStatus $lifecycleStatus,
        public readonly \CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainVerificationStatus|null $verificationStatus,
        public readonly array $eppStatuses,
        public readonly array $suspensions,
        public readonly \CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainPrivacyProtection $privacyProtection,
        public readonly \CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainNameServersConfigurationResponse $nameservers,
        public readonly \CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainContacts $contacts
    ) {
        if ($eppStatuses !== null) { foreach ($eppStatuses as $item) { \CommunitySDKs\Spaceship\DTO\ValueValidator::check($item, 'CommunitySDKs\\Spaceship\\DTO\\Domains\\Enum\\DomainClientEPPStatus'); } }
        if ($suspensions !== null) { foreach ($suspensions as $item) { \CommunitySDKs\Spaceship\DTO\ValueValidator::check($item, 'CommunitySDKs\\Spaceship\\DTO\\Domains\\Schema\\DomainSuspensionDetails'); } }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('name', $data) ? \CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainNameALabel::fromValue($data['name']) : throw new \InvalidArgumentException("Missing required field name for DomainInfo"),
            array_key_exists('unicodeName', $data) ? \CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainNameULabel::fromValue($data['unicodeName']) : throw new \InvalidArgumentException("Missing required field unicodeName for DomainInfo"),
            array_key_exists('isPremium', $data) ? $data['isPremium'] : throw new \InvalidArgumentException("Missing required field isPremium for DomainInfo"),
            array_key_exists('autoRenew', $data) ? $data['autoRenew'] : throw new \InvalidArgumentException("Missing required field autoRenew for DomainInfo"),
            array_key_exists('registrationDate', $data) ? \CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate::fromValue($data['registrationDate']) : throw new \InvalidArgumentException("Missing required field registrationDate for DomainInfo"),
            array_key_exists('expirationDate', $data) ? \CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate::fromValue($data['expirationDate']) : throw new \InvalidArgumentException("Missing required field expirationDate for DomainInfo"),
            array_key_exists('lifecycleStatus', $data) ? \CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainLifecycleStatus::fromValue($data['lifecycleStatus']) : throw new \InvalidArgumentException("Missing required field lifecycleStatus for DomainInfo"),
            array_key_exists('verificationStatus', $data) ? ($data['verificationStatus'] === null ? null : \CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainVerificationStatus::fromValue($data['verificationStatus'])) : throw new \InvalidArgumentException("Missing required field verificationStatus for DomainInfo"),
            array_key_exists('eppStatuses', $data) ? array_map(static fn ($item) => \CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainClientEPPStatus::fromValue($item), $data['eppStatuses']) : throw new \InvalidArgumentException("Missing required field eppStatuses for DomainInfo"),
            array_key_exists('suspensions', $data) ? array_map(static fn ($item) => \CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainSuspensionDetails::fromArray($item), $data['suspensions']) : throw new \InvalidArgumentException("Missing required field suspensions for DomainInfo"),
            array_key_exists('privacyProtection', $data) ? \CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainPrivacyProtection::fromArray($data['privacyProtection']) : throw new \InvalidArgumentException("Missing required field privacyProtection for DomainInfo"),
            array_key_exists('nameservers', $data) ? \CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainNameServersConfigurationResponse::fromArray($data['nameservers']) : throw new \InvalidArgumentException("Missing required field nameservers for DomainInfo"),
            array_key_exists('contacts', $data) ? \CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainContacts::fromArray($data['contacts']) : throw new \InvalidArgumentException("Missing required field contacts for DomainInfo")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['name'] = $this->name->toValue();
        $data['unicodeName'] = $this->unicodeName->toValue();
        $data['isPremium'] = $this->isPremium;
        $data['autoRenew'] = $this->autoRenew;
        $data['registrationDate'] = $this->registrationDate->toValue();
        $data['expirationDate'] = $this->expirationDate->toValue();
        $data['lifecycleStatus'] = $this->lifecycleStatus->toValue();
        if ($this->verificationStatus !== null) { $data['verificationStatus'] = $this->verificationStatus->toValue(); } else { $data['verificationStatus'] = null; }
        $data['eppStatuses'] = array_map(static fn ($item) => $item->toValue(), $this->eppStatuses);
        $data['suspensions'] = array_map(static fn ($item) => $item->toArray(), $this->suspensions);
        $data['privacyProtection'] = $this->privacyProtection->toArray();
        $data['nameservers'] = $this->nameservers->toArray();
        $data['contacts'] = $this->contacts->toArray();
        return $data;
    }
}
