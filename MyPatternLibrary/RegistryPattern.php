<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 24.08.17
 * Time: 23:42
 */

/**
 * Реестр
 */
class Product
{

    /**
     * @var mixed[]
     */
    protected static $data = array();


    /**
     * Добавляет значение в реестр
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public static function set($key, $value)
    {
        self::$data[$key] = $value;
    }

    /**
     * Возвращает значение из реестра по ключу
     *
     * @param string $key
     * @return mixed
     */
    public static function get($key)
    {
        return isset(self::$data[$key]) ? self::$data[$key] : null;
    }

    /**
     * Удаляет значение из реестра по ключу
     *
     * @param string $key
     * @return void
     */
    final public static function removeProduct($key)
    {
        if (array_key_exists($key, self::$data)) {
            unset(self::$data[$key]);
        }
    }
}

/*
 *           USING OF REGISTRY
 */

Product::set('name', 'First product');
print_r(Product::get('name')); // First product