<?php

namespace system;

class BaseView
{
    private $content = '';

    /**
     * @param string $name
     * @param array $params
     * @param bool $toVar
     * приходит из sendWebResponce
     */
    public function load($name, array $params = [], $toVar = false)
    {
        extract($params);
        unset($params);
        if ($toVar) {
            ob_start();
            include "app/views/" . $name . ".php";
            return ob_get_clean();

        } else {
            include "app/views/" . $name . ".php";
        }
    }
}