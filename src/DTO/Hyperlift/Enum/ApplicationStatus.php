<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Hyperlift\Enum;

enum ApplicationStatus: string
{
    case CREATING = "creating";
    case INSTART = "instart";
    case RUNNING = "running";
    case INSTOP = "instop";
    case STOPPED = "stopped";
    case DELETING = "deleting";
    case FAILURE = "failure";
    case RESTARTING = "restarting";
    case CREATED = "created";
    case DEPLOYING = "deploying";
    case RESETTING = "resetting";

    public static function fromValue(string $value): self
    {
        return self::from($value);
    }

    public function toValue(): string
    {
        return $this->value;
    }
}
