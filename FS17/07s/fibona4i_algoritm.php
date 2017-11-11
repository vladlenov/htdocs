<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 27.07.17
 * Time: 16:53
 */
function fibona4i($n)
{
    static $callCount;
    static $cache;
    $callCount++;
    //echo $callCount.PHP_EOL; //счётчик количества итераций
    if ($n == 1 || $n == 2) {
        return 1;
    }   else {
        if (!isset($cache[$n-1])) {
            $cache[$n-1] = fibona4i($n - 1);
        }
        $n1 = $cache[$n - 1];
        $n2 = fibona4i($n - 2);
        return $n1 + $n2;
    }
}

echo fibona4i(10);