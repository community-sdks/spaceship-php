<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Hyperlift\Enum;

enum MetricUnit: string
{
    case BYTES = "bytes";
    case PERCENT = "percent";
    case BYTES_PER_SECOND = "bytesPerSecond";
    case MEBIBYTES = "mebibytes";

    public static function fromValue(string $value): self
    {
        return self::from($value);
    }

    public function toValue(): string
    {
        return $this->value;
    }
}
