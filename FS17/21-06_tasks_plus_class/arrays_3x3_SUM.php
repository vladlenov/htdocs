<?php
/**
 * 2. Сложить две матрицы 3х3, результат распечатать в виде матрицы
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 24.06.17
 * Time: 14:28
 */

$arr1 =
    [
        [1,1,1],
        [2,2,2],
        [3,3,3]
    ];

$arr2 =
    [
        [1,2,3],
        [1,2,3],
        [1,2,3]
    ];

$arr3 = [];

for($i = 0; $i < count($arr1); $i++)
{
    for($j = 0; $j < count($arr1[$i]); $j++)
    {
        $arr3[$i][$j] = $arr1[$i][$j] + $arr2[$i][$j];
        echo $arr3[$i][$j];
        if($j < count($arr1) - 1) //не выводить запятую после последнего элемента массива
        {
            echo ',';
        }
    }
    echo "\n";
}
