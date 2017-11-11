<?php

namespace app\controllers;

use system\BaseController;

class ErrorController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     *
     */
    public function handleError(\Exception $e) //почему не actionHandleError?
    {
        $this->sendWebResponse(['error/index'], ["data" => $e->getMessage()], true);
    }
}