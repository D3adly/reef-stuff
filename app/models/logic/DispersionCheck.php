<?php
/**
 * Created by PhpStorm.
 * User: agaizauskas
 * Date: 25/05/2015
 * Time: 16:55
 */

namespace App\Models\Logic;

class DispersionCheck {

    const resultModel = 'DispersionResult';

    public static function calculate($default, $value)
    {
        $offset = self::findOffset($default->value, $default->dispersion, $value);
        $placement = self::findPlacement($default->dispersion,$offset);
        $result = new DispersionResult;
        return  $result->populate($default->value, $default->dispersion, $value, $offset, $placement);
    }

    protected static function findOffset($base, $dispersion, $value)
    {
        return $offset = 0;
    }

    protected static function findPlacement($dispersion, $offset)
    {
        return DispersionResult::CENTER;
    }
} 