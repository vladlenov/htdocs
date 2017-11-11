<?php
/**
 * Создать форму с элементом textarea.
 * При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 07.07.17
 * Time: 13:48
 */

function top3words ($str) {
    $array = explode(' ', $str); //возвращаем массив строк с пробелом в качестве разделителя
    $array = str_replace([',','.',':',';','?','!','(',')'], " ", $array); // заменяем всё на пробелы
    //Вроде самый простой вариант, но не пойму почему не работает правильно
    //rsort($array, SORT_STRING | SORT_FLAG_CASE); //обратная сортировка строчных данных без учёта регистра
    //echo $array[0] . PHP_EOL;
    //echo $array[1] . PHP_EOL;
    //echo $array[2] . PHP_EOL;

// Вариант 2 - писал не сам, и даже не разобрался до конца - надо разобрать с преподавателем
    usort($array, function ($word1, $word2) {  //сортировка по значениям с анонимной callback функцией сравнения длины
        return (strlen($word2) - strlen($word1));
    });
    $top = array_slice($array, 0, 3);
    $top = implode(', ', $top);
    echo $top;
}
top3words('Елизавета, Лена, Яна, Сабина, Светлана, Ирина, Василиса');

/* Вариант 3 - не работает по-чемуто
function top3words($str) {
    $array = explode(' ', $str);
    $array = str_replace([',','.',':',';','?','!','(',')'], " ", $array); // заменяем всё на пробелы
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array)-1; $j++) {
            if (strlen($array[$j]) > strlen($array[$j++])){
                $top = $array[$j];
                $array[$j] = $array[$j++];
                $array[$j++] = $top;
            }
        }
    }
    $top = array_slice($array, 0, 3);
    return $top;
    print_r($top);
}
top3words('Елизавета, Лена, Яна, Сабина, Светлана, Ирина, Василиса');
*/
