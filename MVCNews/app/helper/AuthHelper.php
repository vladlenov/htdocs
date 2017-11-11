<?php

namespace app\helper;

class AuthHelper
{
    public static function isAuth()
    {
        return isset($_SESSION['user_id']);
    }
}