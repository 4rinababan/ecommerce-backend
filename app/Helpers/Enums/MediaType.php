<?php

namespace App\Helpers\Enums;

use App\Helpers\Base\BaseEnum;

class MediaType extends BaseEnum
{
    const IMAGE = 1;
    const VIDEO = 2;

    public static function getList()
    {
        return [
            self::IMAGE,
            self::VIDEO,
        ];
    }

    public static function getString($val)
    {
        switch ($val) {
            case self::IMAGE:
                return "Image";
            case self::VIDEO:
                return "Video";
        }
    }
}
