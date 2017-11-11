<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 26.06.17
 * Time: 19:13
 */

/*
$array = "26-06-2017";
print_r(explode('/',$array));

$str = "26/06/2017";
list($day, $month, $year) = explode("/", $str);
echo $day,"", $month,"", $year;
if ($year < 1900) {
    echo "You are to old";
}

echo implode (" & ", explode (",", $array));
*/

/*$menu = [
    'computers' =>
    [
        'apple', 'dell', 'hp'
    ],
    'phones' =>
    [
        'nokia', 'samsung'
    ]
];

foreach ($menu as $key => $value) : ?>

    <ul>
        <li><?=$key?></li>
        <?php foreach ($value as $product) : ?>
        <ul> <?= $product ?> </ul>
    <?php endforeach; ?>
        <ul>;


$employers = [
    ['fio' => 'Ivanov', 'salary' => 10000, 'adress' => 'Pobeda, 30'],
    ['fio' => 'Ivanov2', 'salary' => 34500, 'adress' => 'Pobeda, 31'],
    ['fio' => 'Ivanov3', 'salary' => 22200, 'adress' => 'Pobeda, 32'],
];
?>

    <table>
        <?php foreach ($employers as $key => $value) : ?>
       <tr>
           <td> <?= $value ['fio'] ?> </td>
           <td> <?= $value ['salary'] ?> </td>
           <td> <?= $value ['adress'] ?> </td>
       </tr>;
        <?php endforeach; ?>
    </table>;


$employers = [
['fio' => 'Ivanov', 'salary' => 10000, 'adress' => 'Pobeda, 30'],
['fio' => 'Ivanov2', 'salary' => 34500, 'adress' => 'Pobeda, 31'],
['fio' => 'Ivanov3', 'adress' => 'Pobeda, 32'],
];
?>


<table>
    <?php foreach ($employers as $key => $value) : ?>
        <tr>
            <td> <php?= $value ['fio'] ?> </td>
            <td> <php?= $value ['salary'] ?> </td>
            <td> <php?= $value ['adress'] ?> </td>
        </tr>;
    <?php endforeach; ?>
</table>

<?php

if (array_key_exists('salary', $employears[2])) {
    echo "0";
} else {
    echo $employers[2]['salary'];
}

if (count($employers)) > 0) {}

if (!empty($employers)) {}
*/


for ($a=1; $a < 10; $a++) {
    for ($b = 1; $b < 10; $b++) {
        $c=$a*$b;
        echo "$a*$b=$c\n";
    }
}

foreach ($employers as $temp) {
    print_r($emp);
    print_r(next($employers));
}
current ($employers); //почитать-понять
next ($employers);//почитать-понять
key ($employers);//почитать-понять
rewind ($employers);//почитать-понять

$a = [1,2,3,4,5,6];

foreach ($a as $key=>$emp) {
    if ($key==2) {
        $a[5] = 10;
    }
    echo $emp.PHP_EOL;
}
print_r($a);

/*
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
*/

$words = array("the ", "quick ", "brown ", "fox ",
    "jumped ", "over ", "the ", "lazy ", "dog ");
shuffle($words);
foreach ($words as $word) {
    echo $word;
};

unset($word);
