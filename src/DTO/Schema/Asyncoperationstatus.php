<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Schema;

enum Asyncoperationstatus: string
{
    case PENDING = "pending";
    case FAILED = "failed";
    case SUCCESS = "success";
}
