<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Schema;

class CreateCheckoutLinkResponse
{
    public function __construct(
        public readonly string $url,
        public readonly \CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate|null $validTill = null
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('url', $data) ? $data['url'] : throw new \InvalidArgumentException("Missing required field url for CreateCheckoutLinkResponse"),
            array_key_exists('validTill', $data) ? ($data['validTill'] === null ? null : \CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate::fromValue($data['validTill'])) : null
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['url'] = $this->url;
        if ($this->validTill !== null) { $data['validTill'] = $this->validTill->toValue(); }
        return $data;
    }
}
