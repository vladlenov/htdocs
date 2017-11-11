<?php

namespace system;

use App\config\config;

class DB
{
    private static $instance;

    private static function construct()
    {
        $dsnFabric = new dsnFabric();
        $connectionString = $dsnFabric->getDsn(config::getDbConfig()['driver'],
            config::getDbConfig()['host'],
            config::getDbConfig()['db'])->getConnectionString();

        return new \PDO( $connectionString,
            config::getDbConfig()['usersModel'],
            config::getDbConfig()['password']
        );

    }

    public static function get_instance()
    {
        if (is_null(self::$instance)) {
            self::$instance = self::construct();
        }

        return self::$instance;
    }
}