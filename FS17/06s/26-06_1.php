<?php
/**
 * Создать массив 1000 элементов, заполнить его все элементы значением null.
 * Разбить этот массив на массивы размером 100 элементов
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 29.06.17
 * Time: 11:46
 */

$array_start  = array_fill(0, 1000, null);
$array_result = array_chunk($array_start,100,true); //ключи оригинального массива сохранены
print_r ($array_result);
