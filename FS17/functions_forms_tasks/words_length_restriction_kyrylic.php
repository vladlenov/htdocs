<?php
/**
 * Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов.
 * Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 07.07.17
 * Time: 13:49
 */

// ошибку с кириллицей выдавало с использованием strlen - заменил на iconv_strlen
function delLongWords ($text, $length) {
    $text = str_replace([',','.',':',';','?','!','(',')'], " ", $text); // заменяем всё на пробелы
    $array = explode(' ', $text);
    foreach ($array as $word) :
        if (iconv_strlen($word) <= $length) :
            $array_result[] = $word;
        endif;
    endforeach;
    $result = implode(" ", $array_result);
    echo $result;
}

delLongWords('Елизавета, Лена, Яна, Сабина, Светлана, Саманта, Ирина, Василиса',  5 );