<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Schema;

enum Domainavailabilitystatus: string
{
    case AVAILABLE = "available";
    case TAKEN = "taken";
    case INVALIDDOMAINNAME = "invalidDomainName";
    case TLDNOTSUPPORTED = "tldNotSupported";
    case UNEXPECTEDERROR = "unexpectedError";
}
