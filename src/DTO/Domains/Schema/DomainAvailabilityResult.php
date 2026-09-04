<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Domains\Schema;

class DomainAvailabilityResult
{
    /**
     * @param list<\CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainPriceDetails> $premiumPricing
     */
    public function __construct(
        public readonly \CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainName $domain,
        public readonly \CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainAvailabilityStatus $result,
        public readonly array $premiumPricing
    ) {
        if ($premiumPricing !== null) { foreach ($premiumPricing as $item) { \CommunitySDKs\Spaceship\DTO\ValueValidator::check($item, 'CommunitySDKs\\Spaceship\\DTO\\Domains\\Schema\\DomainPriceDetails'); } }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('domain', $data) ? \CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainName::fromValue($data['domain']) : throw new \InvalidArgumentException("Missing required field domain for DomainAvailabilityResult"),
            array_key_exists('result', $data) ? \CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainAvailabilityStatus::fromValue($data['result']) : throw new \InvalidArgumentException("Missing required field result for DomainAvailabilityResult"),
            array_key_exists('premiumPricing', $data) ? array_map(static fn ($item) => \CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainPriceDetails::fromArray($item), $data['premiumPricing']) : throw new \InvalidArgumentException("Missing required field premiumPricing for DomainAvailabilityResult")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['domain'] = $this->domain->toValue();
        $data['result'] = $this->result->toValue();
        $data['premiumPricing'] = array_map(static fn ($item) => $item->toArray(), $this->premiumPricing);
        return $data;
    }
}
