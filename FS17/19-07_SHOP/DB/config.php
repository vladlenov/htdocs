<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 10.09.17
 * Time: 12:09
 */

namespace DB;


class config
{
    public static function getRouterConfig()
    {
        return [
            ['GET', '@show', '/get-latest'],
            ['GET', '@getSome', '/get-some'],
            ['POST', '@save', '/get-latest']
        ];
    }

    public static function getDbConfig()
    {
        return [
            'host' => 'localhost',
            'user' => 'root',
            'password' => '',
            'port' => '',
            'db' => 'rozetka',
            'driver' => 'mysqli',
        ];
    }
}