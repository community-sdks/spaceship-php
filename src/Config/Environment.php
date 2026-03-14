<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Config;enum Environment: string
{
    case SANDBOX = 'https://spaceship.dev/api';
    case PRODUCTION = 'https://spaceship.com/api';
}
