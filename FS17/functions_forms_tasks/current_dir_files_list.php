<?php
/**
 * Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 07.07.17
 * Time: 13:50
 */

$dir = '/home/vladlenov/PhpStormProjects/FS17';
// $files = scandir($dir); //по условию надо создать аналог функции scandir
// print_r($files);

function listdir($dir) {
    echo 'Директория "' . $dir .                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         '" содержит сдедующие файлы:';
    $filepath  = opendir($dir);
    while (($filename = readdir($filepath)) !== false) {
    $filesArray[] = $filename;
    }
    sort($filesArray);
    closedir($filepath);

    foreach ($filesArray as $key => $value) {
        echo "$filesArray[$key]" . PHP_EOL;
    }
}

listdir($dir);
