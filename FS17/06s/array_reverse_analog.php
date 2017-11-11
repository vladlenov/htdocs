<?php
/**
 * 2. Создать массив со значениями и вывести его в обратном порядке циклом for
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 30.06.17
 * Time: 15:30
 */

$array = range (1,100);
// print_r(array_reverse($array)) . PHP_EOL; // вывод массива в обратном порядке без цикла for
for ($i=count($array); $i > 0; --$i) {
    echo $i . PHP_EOL;
}
