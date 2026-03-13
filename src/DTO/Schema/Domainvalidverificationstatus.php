<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Schema;

enum Domainvalidverificationstatus: string
{
    case VERIFICATION = "verification";
    case SUCCESS = "success";
}
