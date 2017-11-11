<?php

namespace system;

use app\config\Config;

/**
 * Class Traslation
 * @package system
 */
class Traslation
{
    /**
     * @param $key
     */
    public static function translate($key)
    {
        $local = self::getCurrentLanguage();
        $langData = include 'app/translations/' . $local . ".php";

        return $langData[$key];
    }

    /*
     *
     */
    public static function getCurrentLanguage()
    {
        $systemConfig = Config::systemConfig();
        return isset($_COOKIE['selectedLang']) ? $_COOKIE['selectedLang'] : $systemConfig['defaultLang'];
    }
}