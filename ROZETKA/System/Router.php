<?php
namespace System;

use App\Config\config;

class Router
{
    private $server;
    private $config;
    private $controller;
    private $method;

    public function __construct($server)
    {
        $this->config = config::getRouterConfig();
        $this->server = $server;
        $this->parseUrl();
    }

    private function parseUrl()
    {
        $method = $this->server["REQUEST_METHOD"];
        $url = $this->server["REDIRECT_URL"];
        $urlParts = explode("/", $url);

        array_shift($urlParts);
        array_shift($urlParts);
        $url = implode("/", $urlParts);

        $data = array_filter($this->config, function ($item) use ($method, $url)
        {
            if ($item[0] == $method && $item[2] == $url) {
                return $item;
            }
        });

        $parts = explode("@", array_pop($data)[1]);
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