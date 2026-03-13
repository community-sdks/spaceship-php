<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Schema;

enum Provider: string
{
    case BASIC = "basic";
    case CUSTOM = "custom";
}
