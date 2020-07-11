<?php

namespace App\Helpers\Enums;

use App\Helpers\Base\BaseEnum;

class BannerActionType extends BaseEnum
{
    const PRODUCT = 1;
    const CATEGORY = 2;
    const URL = 3;

    public static function getList()
    {
        return [
            self::PRODUCT,
            self::CATEGORY,
            self::URL,
        ];
    }

    public static function getString($val)
    {
        switch ($val) {
            case self::PRODUCT:
                return "Product";
            case self::CATEGORY:
                return "Category";
            case self::URL:
                return "URL";
        }
    }
}
