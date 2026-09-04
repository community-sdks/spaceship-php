<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Hyperlift\Enum;

enum BuildStatus: string
{
    case BUILDING = "building";
    case FAILED = "failed";
    case BUILT = "built";
    case NONE = "none";

    public static function fromValue(string $value): self
    {
        return self::from($value);
    }

    public function toValue(): string
    {
        return $this->value;
    }
}
