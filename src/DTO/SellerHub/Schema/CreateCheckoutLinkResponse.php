<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Schema;

use CommunitySDKs\Spaceship\DTO\BaseSchema;
use CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate;
use InvalidArgumentException;

final class CreateCheckoutLinkResponse extends BaseSchema
{
    public function __construct(
        public readonly string $url,
        public readonly IsoDate|null $validTill
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('url', $data) ? ($data['url'] === null ? throw new InvalidArgumentException('Field url cannot be null in CreateCheckoutLinkResponse.') : (string) $data['url']) : throw new InvalidArgumentException('Missing required field url for CreateCheckoutLinkResponse.'),
            array_key_exists('validTill', $data) && $data['validTill'] !== null ? IsoDate::fromValue((string) $data['validTill']) : null,        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['url'] = $this->url;
        if ($this->validTill !== null) {
            $data['validTill'] = $this->validTill->toValue();
        }

        return $data;
    }
}