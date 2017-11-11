<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 03.08.17
 * Time: 11:10
 */
$dsn = 'mysql:host=localhost; dbname = homework_310717';
$user = 'root';
$password = 'vladlen';
try {
    $connection = new PDO($dsn, $user, $password);
    var_dump($connection); // object(PDO)#1 (0) { }
} catch (PDOException $e) {
    echo $e->getMessage();
}

$sth = $connection->query('SELECT * FROM users LIMIT 8');

$users = $sth->fetchAll(PDO::FETCH_ASSOC);

print_r($users);

//$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//try {
//    $dbh = new PDO($dsn, $user, $password);
//    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    $sth = $dbh->query('SELECT * FROM student LIMIT 3');
//    $users = $sth->fetchAll(PDO::FETCH_OBJ);
//    print_r($users);
//} catch (PDOException $e) {
//    echo $e->getMessage();
//}