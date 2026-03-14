<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\ContactsAttributes\Enum;

enum CaCiraCategory: string
{
    case CCO = 'CCO';
    case CCT = 'CCT';
    case RES = 'RES';
    case GOV = 'GOV';
    case EDU = 'EDU';
    case ASS = 'ASS';
    case HOP = 'HOP';
    case PRT = 'PRT';
    case TDM = 'TDM';
    case TRD = 'TRD';
    case PLT = 'PLT';
    case LAM = 'LAM';
    case TRS = 'TRS';
    case ABO = 'ABO';
    case INB = 'INB';
    case LGR = 'LGR';
    case OMK = 'OMK';
    case MAJ = 'MAJ';

    public static function fromValue(string $value): self
    {
        return self::from($value);
    }

    public function toValue(): string
    {
        return $this->value;
    }
}
