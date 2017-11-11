<?php
/**
 * User: vladlenov
 */
class Config {

    protected static $settings = array();

    /**
     * @return array
     */
    public static function get($key)
    {
        return isset(self::$settings[$key]) ? self::$settings[$key] : null;
    }

    /**
     * @param array $settings
     */
    public static function set($key, $value)
    {
        self::$settings[$key] = $value;
    }
}