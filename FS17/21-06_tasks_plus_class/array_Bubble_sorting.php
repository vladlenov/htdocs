<?php
/**
 * 5. Реализуйте сортировку массива произвольных значений методом пузырька.
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 24.06.17
 * Time: 15:35
 */

$arr = [];
// наполнение
for($i = 0; $i < 1000; $i++)
{
    $rand   = rand(1000,9999);
    $arr[]  = $rand;
}
// сортировка
for($i=0; $i<count($arr); $i++)
{
    for($j=$i+1; $j<count($arr); $j++)
    {
        if($arr[$i]>$arr[$j])
        {
            $temp = $arr[$j];
            $arr[$j] = $arr[$i];
            $arr[$i] = $temp;
        }
    }
}
//вывод результата
for($i = 0; $i < 1000; $i++)
{
    echo "{$arr[$i]}\n";
}