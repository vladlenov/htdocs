<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 26.07.17
 * Time: 14:29
 */

include_once "allSet.php";
include_once "parts/header.php";

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo '<br><p align="center">Вы нажали кнопку Cancel - обновите старницу и повторите ввод</p>';
    exit;
} else {
    $user = getUser($_SERVER['PHP_AUTH_USER']);
    $passwordCheck = password_verify($_SERVER['PHP_AUTH_PW'], $user['pass']);
    if ($_SERVER['PHP_AUTH_USER'] == $user['name'] && $passwordCheck == true) {
        session_start();
        $_SESSION['user_name'] = $_SERVER['PHP_AUTH_USER'];
        $_SESSION['basket'] = [];
        header("Location: index.php");
    }
}

include_once "parts/footer.php";