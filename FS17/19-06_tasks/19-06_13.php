<?php

$s=300; //длина участка в километрах
$t=2;   //время в часах

$speed_1 = $s / $t; //скорость в км/час
$speed_2 = $s*1000 / $t*360; //скорость в м/сек

    echo "Скорость автомобиля составила $speed_1 км/час <br/>";

    echo "Скорость автомобиля составила $speed_2 м/сек <br/>";

?>