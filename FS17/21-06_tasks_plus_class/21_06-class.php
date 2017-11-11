<?php

$matrix1 = [[1,2],
            [3,4]];

$matrix2 = [[10,11], [15,88]];

//$matrix_res[$i][$j] = $matrix1 [$i][$j] + $matrix2[$i][$j];

for ($i = 0; $i < count($matrix1); $i++) {
    for ($j = 0; $j < count($matrix2); $j++) {
        $matrix_res[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
        echo $matrix_res[$i][$j] . ' ';
    }
    echo PHP_EOL;
}