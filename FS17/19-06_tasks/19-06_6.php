<?php

$age = 15;

if (18 <= $age and $age <=59) {
    echo "Вам еще работать и работать";
}

elseif ($age >59) {             // или $age >=60
    echo "Вам пора на пенсию";
}

elseif ($age<18) {              // или $age <=17
    echo "Вам еще рано работать";
}

?>