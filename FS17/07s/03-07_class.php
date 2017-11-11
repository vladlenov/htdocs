<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 03.07.17
 * Time: 19:04
 */

// Функции
//Вариант 1

/** @param array $string
/** @param array $string
/** @param array $string
 */
/*
function strlenOwn (array $string, callable $test, $flag = false)
{
    echo  "string:" . $string . PHP_EOL;
    echo  "flag:" . (int)$flag . PHP_EOL;
    echo  "test:" . $test . PHP_EOL;
}

strlenOwn('abc', true,1);
strlenOwn('abc2',1);
strlenOwn();

//Вариант 2
function strlenOwn (...$params)
{
    print_r($params);
}

strlenOwn('abc', true,1);
strlenOwn('abc2',1);
strlenOwn();

//Вариант 3
function strlenOwn ()
{
echo func_num_args();
print_r(func_get_args());
}

srtlenOwn (1,2,3,4,5);

//Функция пример

function add ($a, $b)
{
    return $a + $b;
}

echo add(1,2);
echo add(2,2);

// Зоны видимости функции - глобальные

// Проверка существования функции

if (!function_exists('add')) {
    function add($a, $b)
    {
        return $a - $b;
    }
}

//Магические константы
const MAX_LEN = 1;
function add ($a, $b)
{
    echo __FUNCTION__;
    echo __FILE__;
    echo __LINE__;
}


$array = [1,2,3,4,5];
function my_count($array)
{
    $i = 0;
    foreach ($array as $value) {
        $i++;
    }
    return $i;
}
echo my_count($array);


// Статические переменные
function my_count()
{
    static $num;
    $num++;
    return $num;
}
echo my_count();
echo my_count();
echo my_count();
echo my_count();
echo my_count();

//Рекурсия (пример вычисления факториала)

function factorial($n)
{
    echo $n.PHP_EOL;
 if ($n == 1 || $n == 0) {
        return 1;
    }   else {
        return factorial($n-1)*$n;
    }
}

echo factorial(10);
*/

function fibona4i($n)
{
    static $callCount;
    static $cache;
    $callCount++;
    //echo $callCount.PHP_EOL; //счётчик количества итераций
    if ($n == 1 || $n == 2) {
        return 1;
    }   else {
        if (!isset($cache[$n-1])) {
            $cache[$n-1] = fibona4i($n - 1);
        }
        $n1 = $cache[$n - 1];
        $n2 = fibona4i($n - 2);
        return $n1 + $n2;
    }
}

echo fibona4i(10);