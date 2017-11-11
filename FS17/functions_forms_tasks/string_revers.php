<?php
/**
 * Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba".
 * Ввод текста реализовать с помощью формы.
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 07.07.17
 * Time: 13:54
 */

// аналог функции strrev

function flipLine ($str) {
    $str = str_split($str);
    $str = array_reverse($str);
    $str = implode('', $str);

    return $str;
}

echo flipLine ('abcde');
