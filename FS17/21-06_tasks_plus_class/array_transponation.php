<?php
/**
 * 1. Дана матрица 3x3.  Произвести ее транспонирование (поменять местами строки со столбцами)
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 24.06.17
 * Time: 13:52
 */

$arr1 =
[
    [1,1,1],
    [2,2,2],
    [3,3,3]
];
$arr2 = [];

for($i = 0; $i < count($arr1); $i++)
{
    for($j = 0; $j < count($arr1[$i]); $j++)
    {
        echo $arr1[$i][$j];
        if($j < count($arr1) - 1) //не выводить запятую после последнего элемента массива
        {
            echo ',';
        }
        $arr2[$j][$i] = $arr1[$i][$j]; //формула транспонирования
    }
    echo "\n";
}
$arr1 = $arr2;
echo "\n";
for($i = 0; $i < count($arr1); $i++)
{
    for($j = 0; $j < count($arr1[$i]); $j++)
    {
        echo $arr1[$i][$j];
        if($j < count($arr1) - 1) //не выводить запятую после последнего элемента массива
        {
            echo ',';
        }
    }
    echo "\n";
}
