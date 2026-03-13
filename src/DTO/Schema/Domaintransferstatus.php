<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Schema;

enum Domaintransferstatus: string
{
    case PENDING = "pending";
    case COMPLETED = "completed";
    case CANCELLED = "cancelled";
}
