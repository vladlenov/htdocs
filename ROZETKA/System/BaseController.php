<?php

namespace System;

class BaseController
{
    public function __construct()
    {
        $this->view = new BaseView();
    }

    public $view = [];

    /**
     * @return mixed
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * @param mixed $view
     */
    public function setView($view)
    {
        $this->view = $view;
    }

    public function sendWebResponse(array $views, $data, $includeHeader)
    {
        if ($includeHeader) $this->view->load("parts/header");
        foreach ($views as $view) {
            $this->view->load($view, $data);
        }
        if ($includeHeader) $this->view->load("parts/footer");
    }
}