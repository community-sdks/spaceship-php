<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Hyperlift\Schema;

class ApplicationLogLine
{
    public function __construct(
        public readonly string $message,
        public readonly \CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate|null $timestamp = null
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('message', $data) ? $data['message'] : throw new \InvalidArgumentException("Missing required field message for ApplicationLogLine"),
            array_key_exists('timestamp', $data) ? ($data['timestamp'] === null ? null : \CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate::fromValue($data['timestamp'])) : null
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['message'] = $this->message;
        if ($this->timestamp !== null) { $data['timestamp'] = $this->timestamp->toValue(); }
        return $data;
    }
}
