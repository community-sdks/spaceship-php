<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Schema;

enum Domainprivacylevel: string
{
    case PUBLIC = "public";
    case HIGH = "high";
}
