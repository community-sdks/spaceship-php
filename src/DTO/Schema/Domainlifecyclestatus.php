<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Schema;

enum Domainlifecyclestatus: string
{
    case CREATING = "creating";
    case REGISTERED = "registered";
    case GRACE1 = "grace1";
    case GRACE2 = "grace2";
    case REDEMPTION = "redemption";
}
