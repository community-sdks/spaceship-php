<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Schema;

enum Sellerhubdomainstatus: string
{
    case FAILED = "failed";
    case VERIFYING = "verifying";
    case ONSALE = "onSale";
    case ONSALESTOPPED = "onSaleStopped";
    case SALEPROCESSING = "saleProcessing";
    case LEASEACTIVE = "leaseActive";
    case SOLD = "sold";
}
