<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 10.09.17
 * Time: 12:07
 */

namespace DB;

use DB\config;
use DB\dsn\dsnFabric;

class DB
{
    private static $instance;

    /**
     * @return \PDO
     */
    private static function construct()
    {
        $dsnFabric = new dsnFabric();
        $connectionString = $dsnFabric->getDsn(config::getDbConfig()['driver'],
            config::getDbConfig()['host'],
            config::getDbConfig()['db'])->getConnectionString();

        return new \PDO($connectionString,
            config::getDbConfig()['user'],
            config::getDbConfig()['password']
        );
    }

    /**
     * @return \PDO
     */
    public static function get_instance()
    {
        if (is_null(self::$instance)) {
            self::$instance = self::construct();
        }
        return self::$instance;
    }
}