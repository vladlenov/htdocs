<?php

namespace system\dsn;

class MysqliDsn implements DsnInterface
{
    private $host;
    private $db;

    public function __construct($host, $db)
    {
        $this->host = $host;
        $this->db = $db;
    }

    public function getConnectionString()
    {
        return 'mysql:host=' . $this->host . ';dbname=' . $this->db;
    }
}