<?php
/**
 * 1. Напишите аналог функции max для массива.
 * На вход произвольный вектор значений, на выходе - значение максимального элеманта массива.
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 06.07.17
 * Time: 15:55
 */

$array = range($a=rand(10,100), $b=rand(100, 200), rand(1,10)); //заполнения массива случайными числами
shuffle($array);
print_r($array);//для визуальной проверки


function findmax($array) {
    $max = 0;
    for ($i = 1; $i < count($array); $i++)
        if ($array[$i] > $max)
            $max = $array[$i];
    echo $max;
}
findmax($array).PHP_EOL;