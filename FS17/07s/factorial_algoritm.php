<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 27.07.17
 * Time: 16:54
 */

function factorial($n)
{
    echo $n.PHP_EOL;
    if ($n == 1 || $n == 0) {
        return 1;
    }   else {
        return factorial($n-1)*$n;
    }
}

echo factorial(10);