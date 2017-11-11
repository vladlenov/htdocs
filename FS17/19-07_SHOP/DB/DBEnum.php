<?php

namespace DB;
/**
 * Class DBEnum
 */
class DBEnum
{
    const Mysqli = 'mysqli';
    const Oracle = 'oracle';

    /**
     * @param $driver
     * @return bool
     */
    public static function isAllowed($driver)
    {
        return in_array($driver, [self::Mysqli, self::Oracle]);
    }
}