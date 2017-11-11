<?php

namespace DB\dsn;

class MysqliDsn implements DsnInterface
{
    private $host;
    private $db;

    /**
     * MysqliDsn constructor.
     * @param $host
     * @param $db
     */
    public function __construct($host, $db)
    {
        $this->host = $host;
        $this->db = $db;
    }

    /**
     * @return string from interface DsnInterface
     */
    public function getConnectionString()
    {
        return 'mysql:host=' . $this->host . ';dbname=' . $this->db;
    }
}