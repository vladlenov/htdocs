<?php

namespace system;

use system\dsn\DsnInterface;
use system\dsn\MysqliDsn;
use system\dsn\OracleDsn;


class DsnFabric
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

    public function genDsn($driver, $host, $db)
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

        if (!$class instanceof dsnInterface) {
            throw new \InvalidArgumentException();
        }

        return $class;
    }

}