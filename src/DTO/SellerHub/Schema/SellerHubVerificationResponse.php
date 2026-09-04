<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Schema;

class SellerHubVerificationResponse
{
    /**
     * @param list<\CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerHubVerificationOption> $options
     */
    public function __construct(
        public readonly array $options
    ) {
        if ($options !== null) { foreach ($options as $item) { \CommunitySDKs\Spaceship\DTO\ValueValidator::check($item, 'CommunitySDKs\\Spaceship\\DTO\\SellerHub\\Schema\\SellerHubVerificationOption'); } }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('options', $data) ? array_map(static fn ($item) => \CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerHubVerificationOption::fromArray($item), $data['options']) : throw new \InvalidArgumentException("Missing required field options for SellerHubVerificationResponse")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['options'] = array_map(static fn ($item) => $item->toArray(), $this->options);
        return $data;
    }
}
