<?php

namespace system;

class System
{
    /*
     *
     */
    public static function start()
    {
        try {
            $router = new Router();
            $controller = "app\\controllers\\" . ucfirst($router->getController()) . "Controller";
            $controller = new $controller;
            $method = "action" . $router->getMethod();
            $controller->$method();

        } catch (\Exception $e) {

            $controller = "app\\controllers\\ErrorController";
            $controller = new $controller;
            $controller->handleError($e);
        }
    }
}
