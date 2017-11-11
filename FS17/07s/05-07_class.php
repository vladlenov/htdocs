<?php
/**
 *
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 05.07.17
 * Time: 18:56
 *  function print_array($ar) {
static $count;

$count = (isset($count)) ? ++$count : 0;

$colors = array('#FFCB72', '#FFB072', '#FFE972', '#F1FF72',
'#92FF69', '#6EF6DA', '#72D9FE');

if ($count > count($colors)) {
echo "Достигнута максимальная глубина погружения!";
$count--;
return;
}

if (!is_array($ar)) {
echo "Passed argument is not an array!<p>";
return; }

echo "<table border=1 cellpadding=0 cellspacing=0 bgcolor=$colors[$count]>";
while(list($k, $v) = each($ar)) {
echo "<tr><td>$k</td><td>$v</td></tr>\n";
if (is_array($v)) {
echo "<tr><td> </td><td>";
print_array($v);
echo "</td></tr>\n";
}
}
echo "</table>";
$count--;
}
 */
/*
function powTest ($a, $grade = 2)
{
    $a = pow($a, $grade);
    // return $a;
}
$a = 2;
powTest ($a, 2);
echo $a;

*/

//Анонимные функции
/*
function processData($array, callable $callback) {
    //return $callback(array_reverse($array));
    array_reverse($array);
    sort($array);
    return $callback($array);
}

$callback = function (array $array) {
    return array_pop($array);
    };

$callback2 = function (array $array) {
    return array_shift($array);
};

$arr = [1, 2, 3];
if (rand(0,1)) {
    echo processData ($arr), $callback;
} else {
    echo processData($arr), $callback2;
}
print_r($arr);

$arr = [['name' => "Test", "price"=>100], ['name'=>'Test2', 'price'=>50]];

$data = array_map (function ($value) use ($price) {
    if ($value['price' > $price]) return $value;
});
unset($price);
$data = array_map($callback,$arr);
print_r($data);

//счётчик памяти ?, области памяти ? базовые понятия

//array [1,2,3] При помощи функции array_map функцией $callback возвести в степень каждый элемент массива

$array_s = [1,2,3];
$grade = 2;
$data = array_map (function ($value) use ($grade) {
    return pow($value, $grade);
}, $array_s);
print_r($data);
*/
$grade = 9;
$array = [2,3,4];

$callback = function ($element) use ($grade) {
    return pow($element, $grade);
};
print_r (array_map($callback, $array));

//разименовывание массивов
//вариант 1
$array = explode(",", "1,2,3,4,5");
echo $array[3].PHP_EOL;
//вариант 2
list ($one, $two, $three) = explode(',', "1,2,3,4,5,");
echo $three.PHP_EOL;;
//вариант 3
$a = explode(',', "1,2,3,4,5")[2];
echo $a;

$str = "qwerty, f";
print_r(str_split($str));
