<?php
/**
 * 9. При помощи функций char() и ord() сформировать вывод алфавита в цикле. a-z
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 24.06.17
 * Time: 15:47
 */
for ($ascii = 65; $ascii <= 90; $ascii++) {
    echo chr($ascii);
    echo "\n";
}
