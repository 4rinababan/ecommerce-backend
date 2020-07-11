<?php

namespace App\Helpers\Enums;

use App\Helpers\Base\BaseEnum;

class UserStatus extends BaseEnum
{
    const BANNED = 0;
    const ACTIVE = 1;

    public static function getList()
    {
        return [
            self::BANNED,
            self::ACTIVE,
        ];
    }

    public static function getString($val)
    {
        switch ($val) {
            case self::BANNED:
                return "Banned";
            case self::ACTIVE:
                return "Active";
        }
    }
}
