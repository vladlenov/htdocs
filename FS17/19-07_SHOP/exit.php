<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 22.07.17
 * Time: 22:29
 */

session_start();
session_destroy();
header($_SERVER["SERVER_PROTOCOL"] . " 401 Unauthorized");
//header('HTTP/1.0 401 Unauthorized');
header("Location: index.php");

exit;