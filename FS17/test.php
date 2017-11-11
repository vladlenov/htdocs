<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 18.08.17
 * Time: 14:35
 */

//$map = [];
//for($x = 0; $x < 10; $x++){
//    for($y = 0; $y < 10; $y++){
//        $map[$x][$y] = 0;
//    }
//}
//
//for($i = 0; $i < 10; $i++){
//    $map[0][$i] = 1; //верхняя стена
//    $map[9][$i] = 1; //нижняя стена
//    $map[$i][0] = 1; //левая стена
//    $map[$i][9] = 1; //правая стена
//}
//
//print_r($map);
//
//class Base {
//    const SELF = 42 + 1;
//}
//echo Base::SELF;

$iterator = new DirectoryIterator(__DIR__);
while($iterator->valid()) {
    $file = $iterator->current();
    echo $iterator->key() . " => " . $file->getFilename() . "\n";
    $iterator->next();
}