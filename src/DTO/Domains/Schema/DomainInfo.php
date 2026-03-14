<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate;
use CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainClientEPPStatus as DomainClientEPPStatusEnum;
use CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainLifecycleStatus as DomainLifecycleStatusEnum;
use CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainVerificationStatus as DomainVerificationStatusEnum;
use InvalidArgumentException;

final class DomainInfo extends BaseSchema
{
    /**
     * @var list<DomainClientEPPStatusEnum>
     */
    /**
     * @var list<DomainSuspensionDetails>
     */
    /**
    * @param list<DomainClientEPPStatusEnum> $eppStatuses
     * @param list<DomainSuspensionDetails> $suspensions
     */
    public function __construct(
        public readonly DomainNameALabel $name,
        public readonly DomainNameULabel $unicodeName,
        public readonly bool $isPremium,
        public readonly bool $autoRenew,
        public readonly IsoDate $registrationDate,
        public readonly IsoDate $expirationDate,
        public readonly DomainLifecycleStatusEnum $lifecycleStatus,
        public readonly DomainVerificationStatusEnum|null $verificationStatus,
        public readonly array $eppStatuses,
        public readonly array $suspensions,
        public readonly DomainPrivacyProtection $privacyProtection,
        public readonly DomainNameServersConfigurationResponse $nameservers,
        public readonly DomainContacts $contacts
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('name', $data) ? ($data['name'] === null ? throw new InvalidArgumentException('Field name cannot be null in DomainInfo.') : DomainNameALabel::fromValue((string) $data['name'])) : throw new InvalidArgumentException('Missing required field name for DomainInfo.'),
            array_key_exists('unicodeName', $data) ? ($data['unicodeName'] === null ? throw new InvalidArgumentException('Field unicodeName cannot be null in DomainInfo.') : DomainNameULabel::fromValue((string) $data['unicodeName'])) : throw new InvalidArgumentException('Missing required field unicodeName for DomainInfo.'),
            array_key_exists('isPremium', $data) ? ($data['isPremium'] === null ? throw new InvalidArgumentException('Field isPremium cannot be null in DomainInfo.') : (bool) $data['isPremium']) : throw new InvalidArgumentException('Missing required field isPremium for DomainInfo.'),
            array_key_exists('autoRenew', $data) ? ($data['autoRenew'] === null ? throw new InvalidArgumentException('Field autoRenew cannot be null in DomainInfo.') : (bool) $data['autoRenew']) : throw new InvalidArgumentException('Missing required field autoRenew for DomainInfo.'),
            array_key_exists('registrationDate', $data) ? ($data['registrationDate'] === null ? throw new InvalidArgumentException('Field registrationDate cannot be null in DomainInfo.') : IsoDate::fromValue((string) $data['registrationDate'])) : throw new InvalidArgumentException('Missing required field registrationDate for DomainInfo.'),
            array_key_exists('expirationDate', $data) ? ($data['expirationDate'] === null ? throw new InvalidArgumentException('Field expirationDate cannot be null in DomainInfo.') : IsoDate::fromValue((string) $data['expirationDate'])) : throw new InvalidArgumentException('Missing required field expirationDate for DomainInfo.'),
            array_key_exists('lifecycleStatus', $data) ? ($data['lifecycleStatus'] === null ? throw new InvalidArgumentException('Field lifecycleStatus cannot be null in DomainInfo.') : DomainLifecycleStatusEnum::fromValue((string) $data['lifecycleStatus'])) : throw new InvalidArgumentException('Missing required field lifecycleStatus for DomainInfo.'),
            array_key_exists('verificationStatus', $data) ? ($data['verificationStatus'] === null ? throw new InvalidArgumentException('Field verificationStatus cannot be null in DomainInfo.') : DomainVerificationStatusEnum::fromValue((string) $data['verificationStatus'])) : throw new InvalidArgumentException('Missing required field verificationStatus for DomainInfo.'),
            array_key_exists('eppStatuses', $data) ? ($data['eppStatuses'] === null ? throw new InvalidArgumentException('Field eppStatuses cannot be null in DomainInfo.') : array_map(static fn (mixed $item): DomainClientEPPStatusEnum => DomainClientEPPStatusEnum::fromValue((string) $item), (array) $data['eppStatuses'])) : throw new InvalidArgumentException('Missing required field eppStatuses for DomainInfo.'),
            array_key_exists('suspensions', $data) ? ($data['suspensions'] === null ? throw new InvalidArgumentException('Field suspensions cannot be null in DomainInfo.') : array_map(static fn (mixed $item): DomainSuspensionDetails => DomainSuspensionDetails::fromArray((array) $item), (array) $data['suspensions'])) : throw new InvalidArgumentException('Missing required field suspensions for DomainInfo.'),
            array_key_exists('privacyProtection', $data) ? ($data['privacyProtection'] === null ? throw new InvalidArgumentException('Field privacyProtection cannot be null in DomainInfo.') : DomainPrivacyProtection::fromArray((array) $data['privacyProtection'])) : throw new InvalidArgumentException('Missing required field privacyProtection for DomainInfo.'),
            array_key_exists('nameservers', $data) ? ($data['nameservers'] === null ? throw new InvalidArgumentException('Field nameservers cannot be null in DomainInfo.') : DomainNameServersConfigurationResponse::fromArray((array) $data['nameservers'])) : throw new InvalidArgumentException('Missing required field nameservers for DomainInfo.'),
            array_key_exists('contacts', $data) ? ($data['contacts'] === null ? throw new InvalidArgumentException('Field contacts cannot be null in DomainInfo.') : DomainContacts::fromArray((array) $data['contacts'])) : throw new InvalidArgumentException('Missing required field contacts for DomainInfo.'),        );
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
        $data['verificationStatus'] = $this->verificationStatus->toValue();
        $data['eppStatuses'] = array_map(static fn (mixed $item): mixed => $item->toValue(), $this->eppStatuses);
        $data['suspensions'] = array_map(static fn (mixed $item): mixed => $item->toArray(), $this->suspensions);
        $data['privacyProtection'] = $this->privacyProtection->toArray();
        $data['nameservers'] = $this->nameservers->toArray();
        $data['contacts'] = $this->contacts->toArray();

        return $data;
    }
}