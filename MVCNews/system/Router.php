<?php

namespace system;

use app\config\Config;

class Router
{
    private $config;
    private $controller;
    private $method;

    public function __construct()
    {
        $this->config = Config::getRouterConfig();
        $this->parseUrl();
    }

    private function parseUrl()
    {
        $method = $_SERVER["REQUEST_METHOD"];
        if(isset($_SERVER["REDIRECT_URL"])){
            $url = $_SERVER["REDIRECT_URL"];
        } else {
            $url = $_SERVER["REQUEST_URI"];
        }
        $urlParts = explode("/", $url);
        array_shift($urlParts);
        array_shift($urlParts);
        $url = implode("/", $urlParts);
        $data = array_filter($this->config, function ($item) use ($method, $url) {
            if ($item[0] == $method && $item[2] == $url) {
                return $item;
            }
        });

        $parts = explode("@", array_pop($data)[1]);
        if (count($parts) != 2) {
            throw  new \LogicException();
        }
        $this->controller = $parts[0];
        $this->method = $parts[1];
    }

    /**
     * @return mixed
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }
}