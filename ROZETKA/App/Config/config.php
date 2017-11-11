<?php

namespace App\Config;

class config
{

    public static function getRouterConfig()
    {
        return [
            ['GET', 'categories@show', 'categories'],
            ['GET', 'items@show', 'items'],
            ['GET', 'users@show', 'users'],
        ];
    }

    public static function getDbConfig()
    {
        return [
            'host' => 'localhost',
            'usersModel' => 'root',
            'password' => '',
            'port' => '3306',
            'db' => 'rozetka',
            'driver' => 'mysqli',
        ];
    }
}