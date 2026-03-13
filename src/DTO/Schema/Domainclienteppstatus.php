<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Schema;

enum Domainclienteppstatus: string
{
    case CLIENTDELETEPROHIBITED = "clientDeleteProhibited";
    case CLIENTHOLD = "clientHold";
    case CLIENTRENEWPROHIBITED = "clientRenewProhibited";
    case CLIENTTRANSFERPROHIBITED = "clientTransferProhibited";
    case CLIENTUPDATEPROHIBITED = "clientUpdateProhibited";
}
