<?php
/**
 * Написать функцию, которая считает количество уникальных слов в тексте.
 * Слова разделяются пробелами. Текст должен вводиться с формы.
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 07.07.17
 * Time: 13:55
 */
function countUnique ($str) {
    $str = preg_split("/[\s\.\?,:-]+/", $str);
    print_r($str);
    $str = array_unique($str, SORT_STRING);
    $count = count($str);
    return $count;
}
echo countUnique ('В данном тексте мы ищем уникальные слова в тексте, а потом мы их считаем'); //14 слов - 12 уник
