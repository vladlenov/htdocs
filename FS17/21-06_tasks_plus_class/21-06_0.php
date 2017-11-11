<?php
/**
 * 0. Создайте пустой массив, заполните его 3мя произвольными значениями вставляя каждое в начало массива
 * (со сдвигом остальных элементов).
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 24.06.17
 * Time: 13:36
 */
$arr = [];
array_unshift($arr,13);
array_unshift($arr,27);
array_unshift($arr,8);
print_r($arr);