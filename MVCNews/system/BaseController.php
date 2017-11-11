<?php

namespace system;

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

    /**
     * @param array $views
     * @param $data
     * @param $includeHeader
     */
    public function sendWebResponse(array $views, $data, $includeHeader)
    {
        if ($includeHeader) $this->view->load("layout/header");
        foreach ($views as $view) {
            $this->view->load($view, $data);
        }
        if ($includeHeader) $this->view->load("layout/footer");
    }
}