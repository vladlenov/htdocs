<?php
/**
 * Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова,
 * которые есть и в первом и во втором поле ввода.
 * Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b),
 * которая будет возвращать массив с общими словами.
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 07.07.17
 * Time: 13:47
 */


function getCommonWords($a, $b){
    $a = explode(' ',$a); //разбиваем строки в массив
    $b = explode(' ',$b);
    for ($i = 0; $i < count($a); $i++) {
        $с = false;
        for ($j = 0; $j < count($b); $j++) {
            if($a[$i] === $b[$j]) {
                $result[] = $a[$i];
                $с = true;
                break;
            }
        }
            if($с == false)  {
                echo "Совпадения не найдены" . PHP_EOL;
        }
    }
    return $result;
}

$a = 'Алёна и Елена поспорили у кого имя красивее';
$b = 'Елена и Алёна спросили у прохожего';
print_r (getCommonWords($a,$b));