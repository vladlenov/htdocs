<?php

namespace System;

class System
{

    public static function start(array $server)
    {
        $router = new Router($server);
        $controller = "App\\Controllers\\".ucfirst($router->getController())."Controller";
        $controller = new $controller;
        $method = "action".$router->getMethod();
        $controller->$method();
    }
}
