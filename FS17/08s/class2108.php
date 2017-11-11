<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 21.08.17
 * Time: 19:17
 */

//class A {
//    public static function who() {
//        echo __CLASS__;
//    }
//    public static function test() {
//        static::who(); //static вместо self
//    }
//}
//
//class B extends A {
//    public static function who() {
//        echo __CLASS__;
//    }
//}
//
//B::test();
//
class DB
{
    public $name;
    public $login;
    public $pass;

    private static $instance;
    private function __construct()
    {
        $this->name = 'sdf';
        $this->login = 'sdf';
        $this->pass = 'sdf';
    }

    public static function get_instance ()
        {
            if (!isset(self::$instance)){
            self::$instance = new self();
            return self::$instance;
            }
        }
}
//
//var_dump(DB::get_instance());


