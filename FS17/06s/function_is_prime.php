<?php
/** Функция проверки простых чисел
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 04.07.17
 * Time: 22:37
 */

function is_prime ($n)
{
    for($x=2; $x <= sqrt($n); $x++) {
        if($n % $x == 0) {
            return false;
        }
    }
    return true;
}



$list = range(1,100);
foreach($list as $l) {
    var_dump($l, is_prime($l));
}

//алгоритм Эратосфена
define("LIMIT",1000000);
define("SQRT_LIMIT",floor(sqrt(LIMIT)));

$S = str_repeat("\1", LIMIT+1);

for($i=2;$i<=SQRT_LIMIT;$i++){
    if($S[$i]==="\1"){
        for($j=$i*$i; $j<=LIMIT; $j+=$i){
            $S[$j]="\0";
        }
    }
}
