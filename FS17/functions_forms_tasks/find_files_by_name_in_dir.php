<?php
/**
 * Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.
 * Директория и искомое слово задаются как параметры функции.
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 07.07.17
 * Time: 13:50
 */

$dir = '/home/vladlenov/PhpStormProjects/FS17';
$world='';
function listdir($dir, $world) {
    echo 'Директория "' . $dir . " содержит следующие файлы со словом " . "$world" . ":" . PHP_EOL;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       '" содержит сдедующие файлы:';
    $filepath  = opendir($dir);
    while (($filename = readdir($filepath)) !== false) {
        $filesArray[] = $filename;
    }
    sort($filesArray);
    closedir($filepath);

    $pattern = "/($world)/i";
    foreach ($filesArray as $key => $value) {
        $conditionResult = preg_match($pattern, $filesArray[$key]);
        if ($conditionResult == true) {
            echo "$filesArray[$key]" . PHP_EOL;
        }
    }
}

listdir($dir,'Homework');