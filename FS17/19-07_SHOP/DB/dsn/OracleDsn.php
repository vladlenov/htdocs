<?php

namespace DB\dsn;

class OracleDsn implements DsnInterface
{
    private $host;
    private $db;

    /**
     * OracleDsn constructor.
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
        return 'Oracle:host=' . $this->host . ';dbname=' . $this->db;
    }
}