<?php
/**
 * 1. Создать массив, занести в него 3 элемента любых.  например, 1,2,3
вывести их следующим образом:
Первый элемент: 1
Второй - 2
Третий - 3
Прямо так текстом и выводить
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 30.06.17
 * Time: 14:29
 */
$array_str = ['Первый', 'Второй', 'Третий'];
foreach (range(1, 3) as $number) {
    echo array_shift($array_str) . " элемент: " . $number . PHP_EOL;
}