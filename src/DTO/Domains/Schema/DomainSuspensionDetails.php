<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

class DomainSuspensionDetails
{
    public function __construct(
        public readonly string $reasonCode
    ) {
        if ($reasonCode !== null && !in_array($reasonCode, ["raaVerification", "abuse", "promoAbuse", "fraud", "pendingAccountVerification", "unauthorizedAccess", "tosViolation", "transferDispute", "restrictedSecurity", "lockCourt", "suspendCourt", "udrpUrs", "restrictedLegal", "paymentPending", "unpaidService", "restrictedWhois", "lockedWhois", "complianceCase", "suspendRegistry", "fefAbuse", "ddosSuspend"], true)) { throw new \InvalidArgumentException("Invalid reasonCode"); }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('reasonCode', $data) ? $data['reasonCode'] : throw new \InvalidArgumentException("Missing required field reasonCode for DomainSuspensionDetails")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['reasonCode'] = $this->reasonCode;
        return $data;
    }
}
