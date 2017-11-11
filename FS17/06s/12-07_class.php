<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 12.07.17
 * Time: 19:43
 */

/*
$file = fopen('db.php', 'a+');

$content = '';

while ($data = fread($file, 64)) {
    $content .= $data;
}
echo $content;

//fgetc();
//fwrite();
//fclose();
 *
 */

//функции по работе с файловой системой

print_r(scandir(__DIR__));

//foreach (is_dir(__DIR__) . '/' . $object) {
//
//}