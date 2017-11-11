<?php
/**
 * 3. Вывести в цикле числа от 1 до 10 , перед выводом числа 10 (последний элемент) вывести сообщение
 * - ПОследний элемент - 10. итого результат : 1 2 3 4 5 6 7 8 9 последний элемент: 10.
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 29.06.17
 * Time: 14:10
 */

//вариант 1
$number = 1;
while ($number < 10):
    echo $number, PHP_EOL;
    $number++;
endwhile;
    echo "Последний елемент:10", PHP_EOL;

//вариант 2
$array = range(1, 10);
foreach ($array as $number) {
    if($number == end($array)) {
        echo "Последний елемент:10", PHP_EOL;
    }
    else {
        echo $number, PHP_EOL;
        ;
    }
}
PHP_EOL;

//вариант 3
$array = range(1, 10);
foreach ($array as $number) {
    if(!next($array)) {
        echo "Последний елемент:10";
    }
    else {
        echo $number, PHP_EOL;
    }
}

