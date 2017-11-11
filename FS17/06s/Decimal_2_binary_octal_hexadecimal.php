<?php
/**
 * 3. сделать логику переводчик из 10 системы в 2 и 16
   что бы на вход было число, а на выходе двоичное и шеснадцатиричное представление
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 30.06.17
 * Time: 23:12
 */

/* Математическими функциями PHP:
decbin(number); //десятичное число в двоичное
dechex(number); //десятичное число в шестнадцатеричное
decoct(number); //десятичное число в восьмеричное
bindec(number); //двоичное число в десятичное
hexdec(number); //шестнадцатеричное число в десятичное
octdec(number); //восьмеричное число в десятичное
*/

// для проверки, функциями php
$i=378;
echo "$i в двоичной системе = " . base_convert ($i, 10, 2) . PHP_EOL;
echo "$i в восьмеричной системе = " . base_convert ($i, 10, 8) . PHP_EOL;
echo "$i в шестнадцатиричной системе = " . base_convert ($i, 10, 16) . PHP_EOL;
unset ($i);

// десятичное в двоичное, используя алгоритм http://vestikinc.narod.ru/AB/dec_bin_tr.htm
$a = 378;
$b = ''; // пустая строковая переменная
    while ($a != 0) {
        $b = ($a % 2) . $b; //добавляем в начало остаток от деления, как младший бит двоичного числа
        $a = (int)($a / 2); //принимаем целую часть частного за новое делимое
    }
echo $b . PHP_EOL;
unset ($a, $b);

// десятичное в восьмеричное, используя алгоритм http://vestikinc.narod.ru/AB/dec_oct_tr.htm
$a = 378;
$b = ''; // пустая строковая переменная
    while ($a != 0 & $a % 8 < 8) {
        $b = ($a % 8) . $b; //добавляем в начало остаток от деления, как младший бит двоичного числа
        $a = (int)($a / 8); //принимаем целую часть частного за новое делимое
    }
echo $b . PHP_EOL;
unset ($a, $b);

// десятичное в шестнадцатеричное, через двоичное
$a = 378;
$b = ''; // пустая строковая переменная
    while ($a != 0) {
        $b = ($a % 2) . $b; //добавляем в начало остаток от деления, как младший бит двоичного числа
        $a = (int)($a / 2); //принимаем целую часть частного за новое делимое
}
// далее подсмотрел в инете, но разобрался:
    $count = strlen($b);
    while(($count % 4) != 0) { // если количество символов не кратно 4
        $b='0'. $b;            // то добавляем в начало 0
        $count = strlen($b);   // снова вычисляем длину
}
    $c = '';                                     // пустая строковая переменная
    for($d = 0; $d < $count; $d = $d + 4)        //пока счётчик меньше количества символов, прибавляем 4
    {
        $c = $c . strtr(substr($b, $d,4), //добавляем к $c замену 4-х символов $b с позиции $d
            array('0000'=>'0',
                  '0001'=>'1',
                  '0010'=>'2',
                  '0011'=>'3',
                  '0100'=>'4',
                  '0101'=>'5',
                  '0110'=>'6',
                  '0111'=>'7',
                  '1000'=>'8',
                  '1001'=>'9',
                  '1010'=>'A',
                  '1011'=>'B',
                  '1100'=>'C',
                  '1101'=>'D',
                  '1110'=>'E',
                  '1111'=>'F'));
    }
echo $c . PHP_EOL;
unset ($a, $b, $c, $d);

// десятичное в шестнадцатеричное, мой вариант, используя алгоритм http://vestikinc.narod.ru/AB/dec_hex_tr.htm
$a = 378;
$b = ''; // пустая строковая переменная
while ($a != 0) {
    if ($a % 16 > 0 & $a % 16 < 10):
        $b = ($a % 16) . $b;
    elseif ($a % 16 == 10):
        $b = 'A' . $b;
    elseif ($a % 16 == 11):
        $b = 'B' . $b;
    elseif ($a % 16 == 12):
        $b = 'C' . $b;
    elseif ($a % 16 == 13):
        $b = 'D' . $b;
    elseif ($a % 16 == 14):
        $b = 'E' . $b;
    elseif ($a % 16 == 15):
        $b = 'F' . $b;
    endif;
    $a = (int)($a / 16);     //принимаем целую часть частного за новое делимое
}
echo $b . PHP_EOL;