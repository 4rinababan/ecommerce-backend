<?php

namespace App\Helpers\Enums;

use App\Helpers\Base\BaseEnum;

class MediaType extends BaseEnum
{
    const NON_PERSISHABLE = 0;
    const PERISHABLE = 1;

    public static function getList()
    {
        return [
            self::NON_PERSISHABLE,
            self::PERISHABLE,
        ];
    }

    public static function getString($val)
    {
        switch ($val) {
            case self::NON_PERSISHABLE:
                return "Image";
            case self::PERISHABLE:
                return "Video";
        }
    }
}
