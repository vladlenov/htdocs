<?php

namespace System;

class BaseView
{
    private $content = '';

    /**
     * @param string $name
     * @param array $params
     * @param bool $toVar
     */
    public function load($name, array $params = [], $toVar = false)
    {
        extract($params);
        unset($params);
        if ($toVar) {
            ob_start();
            include "App/Views/" . $name . ".php";
            return ob_get_clean();

        } else {
            include "App/Views/" . $name . ".php";
        }
    }

}