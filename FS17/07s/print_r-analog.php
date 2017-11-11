<?php
/**
 *  АНалог функции print_r для вывода информации о массиве на экран.
 * Обратите внимание на второй параметр функции print_r -
 * - флаг вывода информации на экран, либо возврата из функции.
 * Сделать полный аналог функции.
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 06.07.17
 * Time: 22:02
 */

function myPrint_r($array, $return) {
    if ($return == true) {
        return (string)$array;
    } else {
    echo " Array" . PHP_EOL;
    echo " ( " . PHP_EOL;
    foreach ($array as $key => $value) {
        echo "     [$key]".' => ';
        echo "$array[$key]" . PHP_EOL;
    }
    echo ') ';
    }
}

$array = range('a', 'z');
myPrint_r($array, false);
