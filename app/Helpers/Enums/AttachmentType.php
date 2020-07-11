<?php

namespace App\Helpers\Enums;

use App\Helpers\Base\BaseEnum;

class AttachmentType extends BaseEnum
{
    const BIZFILE = 1;
    const ACRA = 2;

    public static function getList()
    {
        return [
            self::BIZFILE,
            self::ACRA,
        ];
    }

    public static function getString($val)
    {
        switch ($val) {
            case self::BIZFILE:
                return "bizFile";
            case self::ACRA:
                return "ACRA";
        }
    }
}
