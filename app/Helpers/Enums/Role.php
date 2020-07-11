<?php

namespace App\Helpers\Enums;

use App\Helpers\Base\BaseEnum;

class Role extends BaseEnum
{
    const CUSTOMER = 0;
    const ADMIN = 1;
    const DRIVER = 2;
    const SUPPLIER = 3;

    public static function getList()
    {
        return [
            self::CUSTOMER,
            self::ADMIN,
            self::DRIVER,
            self::SUPPLIER,
        ];
    }

    public static function getString($val)
    {
        switch ($val) {
            case self::CUSTOMER:
                return "Customer";
            case self::ADMIN:
                return "Admin";
            case self::DRIVER:
                return "Driver";
            case self::SUPPLIER:
                return "Supplier";
        }
    }

    public static function getValue($str) {
        switch (strtolower($str)) {
            case 'customer':
                return self::CUSTOMER;
            case 'admin':
                return self::ADMIN;
            case 'driver':
                return self::DRIVER;
            case 'supplier':
                return self::SUPPLIER;
        }
    }
}
