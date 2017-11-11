<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 22.07.17
 * Time: 21:29
 */
include_once "allSet.php";

if (isset($_POST['action']) && $_POST['action'] == "reg") :
   $password = password_hash($_POST['userPass'], PASSWORD_DEFAULT);
   // saveUser(["name" =>$_POST['userName'], "pass" => md5()]);
    saveUser(["name" =>$_POST['userName'], 'pass' => $password]);
    $_SESSION['user_name'] = $_POST['userName'];
    $_SESSION['basket'] = [];
    header("Location: index.php");
endif;

include_once "parts/header.php";
include_once "parts/registration.php";