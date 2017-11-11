<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 18.07.17
 * Time: 17:56
 */

if (!isset($_COOKIE['counter'])) {
    setcookie("counter", 0);
}

$counter = $_COOKIE['counter'];
$counter++;
setcookie("counter", $counter);

echo $counter;

