    <?php
/** Извлекаем имя хоста из URL
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 09.07.17
 * Time: 19:19
 */


// Извлекаем имя хоста из URL

preg_match("/^(http:\/\/)?([^\/]+)/i","http://www.php.net/index", $matches);
$host = $matches[2]; // извлекаем две последние части имени хоста
preg_match("/[^\.\/]+\.[^\.\/]+$/", $host, $matches);
echo "domain name is: {$matches[0]}" . PHP_EOL;

?>