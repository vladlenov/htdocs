<?php
/**
 * 7. Вывести только четные значения массива произвольных значений.
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 24.06.17
 * Time: 15:45
 */

$arr = [9,8,7,6,5,4,3,2,1,20,19,18,17,16,15,14,13,12,11];

for($i = 0; $i < count($arr); $i++)
{
    if ($arr[$i] % 2 == 0)
    {
        echo "$arr[$i]\n";
    }
}
// надо разобрать с преподавателем это условие if (!($i & 1))