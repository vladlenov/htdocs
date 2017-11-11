<?php
/**
 * User: vladlenov
 */

class Lang {
    //  хранит языковые настройки
    protected static $data;
    /*
     * загрузка данных из языковых фалов и запись языковых настроек в аттрибут $data
     */
    public static function load($lang_code){
        $lang_file_path = ROOT.DS.'lang'.DS.strtolower($lang_code).'.php';

        if(file_exists($lang_file_path)) {
            self::$data = include ($lang_file_path);
        } else {
            throw new Exception('Lang file not found' . $$lang_file_path);
        }
    }
    /*
     * принимает ключ и возвращает его значение для загруженного языка
     */
    public static function get($key, $default_value = '') {
        return isset(self::$data[strtolower($key)]) ? self::$data[strtolower($key)] : $default_value;
    }
}