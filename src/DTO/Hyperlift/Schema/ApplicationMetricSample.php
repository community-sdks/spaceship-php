<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Hyperlift\Schema;

class ApplicationMetricSample
{
    public function __construct(
        public readonly \CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate $timestamp,
        public readonly float $value
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('timestamp', $data) ? \CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate::fromValue($data['timestamp']) : throw new \InvalidArgumentException("Missing required field timestamp for ApplicationMetricSample"),
            array_key_exists('value', $data) ? $data['value'] : throw new \InvalidArgumentException("Missing required field value for ApplicationMetricSample")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['timestamp'] = $this->timestamp->toValue();
        $data['value'] = $this->value;
        return $data;
    }
}
