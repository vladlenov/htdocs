<?php

include_once "allSet.php";
include_once "parts/header.php";

if (isset($_POST['action']) && $_POST['action']=="log") {
    $user = getUser($_POST["loginName"]);//вернёт в переменную подмассив пользователя или пустой
    $passwordCheck = password_verify($_POST["loginPass"], $user['pass']); //true \ false

    if ($user['name'] != $_SERVER['PHP_AUTH_USER'] && !empty($user) && $passwordCheck == true) {
        session_start();
        $_SESSION['user_name'] = $_POST["loginName"];
        $_SESSION['basket'] = [];
        header("Location: index.php");
    }
}

    ?>

    <br>
    <br>
<form align="center" method="post" action="">
    <input type="text" name="loginName" value="">
    <input type="password" name="loginPass" value="">
    <input type="submit" class="btn btn-success" value="enter">
    <input type="hidden" name="action" value="log">
</form>
    <br>
    <br>

<? include_once "parts/footer.php"; ?>