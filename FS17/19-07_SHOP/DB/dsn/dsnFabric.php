<?php

namespace DB\dsn;

use DB\DBEnum;
use DB\dsn\DsnInterface;
use DB\dsn\MysqliDsn;
use DB\dsn\OracleDsn;


class dsnFabric
{
    /**
     * @param $driver
     */
    private function validateDriver($driver)
    {
        if (!DBEnum::isAllowed($driver)) {
            throw new \InvalidArgumentException();
        }
    }

    /**
     * @param $driver
     * @param $host
     * @param $db
     * @return MysqliDsn|OracleDsn
     */
    public function getDsn($driver, $host, $db)
    {
        $this->validateDriver($driver);

        switch ($driver) {
            case DBEnum::Mysqli :
                $class = new MysqliDsn($host, $db);
                break;
            case DBEnum::Oracle :
                $class = new OracleDsn($host, $db);
                break;
        }

        if (!$class instanceof DsnInterface) {
            throw new \InvalidArgumentException();
        }

        return $class;
    }
}