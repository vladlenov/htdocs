<?php
/**
 * 3. Для матрицы 2х2 найти ее опредилитель
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 24.06.17
 * Time: 14:46
 */
$arr1 =
    [
        [1,2],
        [3,4],
    ];
$det = $arr1[0][0]*$arr1[1][1] - $arr1[1][0]*$arr1[0][1];

echo "$det\n";
