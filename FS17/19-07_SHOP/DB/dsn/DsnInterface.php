<?php

namespace DB\dsn;

interface DsnInterface
{
    public function getConnectionString();
}