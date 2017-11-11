<?php

namespace system;

use app\config\Config;

class DB
{
    private static $instance;

    private static function construct()
    {
        $dsnFabric = new DsnFabric();
        $connectionString = $dsnFabric->genDsn(Config::getDbConfig()['driver'],
            Config::getDbConfig()['host'],
            Config::getDbConfig()['DB'])->getConnectionString();

        return new \PDO($connectionString,
//            Config::getDbConfig()['name'],
//            Config::getDbConfig()['email'],
            Config::getDbConfig()['user'],
            Config::getDbConfig()['password']);
    }

    public static function get_instance()
    {
        if (is_null(self::$instance)) {
            self::$instance = self::construct();
        }

        return self::$instance;
    }

}