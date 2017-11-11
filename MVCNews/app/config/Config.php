<?php

namespace app\config;

class Config
{
    public static function getRouterConfig()
    {
        return [
            ['GET', 'news@show', 'news'],
            ['GET', 'news@show', ''],
            ['POST', 'system@setLang', 'system/setLang'],
            ['GET', 'auth@login', 'auth/login'],
            ['POST', 'auth@login', 'auth/login'],
            ['GET', 'auth@register', 'auth/reg'],
            ['POST', 'auth@register', 'auth/reg'],
            ['GET', 'news@addNews', 'news/addNews'],
            ['POST', 'news@addNews', 'news/addNews'],
            ['GET', 'auth@logOut', 'auth/exit'],
        ];
    }

    public static function getDbConfig()
    {
        return [
            'host' => 'localhost',
            'user' => 'root',
            'password' => '',
            'port' => '3306',
            'DB' => 'NEWS',
            'driver' => 'mysqli',
        ];
    }

    public static function systemConfig()
    {
        return [
            'defaultLang' => 'rus',
            'baseUrl' => 'http://localhost/MVCNews/',
        ];
    }
}