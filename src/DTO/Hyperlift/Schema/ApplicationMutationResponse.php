<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Hyperlift\Schema;

class ApplicationMutationResponse
{
    public function __construct(
        public readonly \CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationId $id
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('id', $data) ? \CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationId::fromValue($data['id']) : throw new \InvalidArgumentException("Missing required field id for ApplicationMutationResponse")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['id'] = $this->id->toValue();
        return $data;
    }
}
