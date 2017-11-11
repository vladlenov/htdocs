<?php

namespace app\controllers;

use system\BaseController;

class SystemController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Выбор языка
     */
    public function actionSetLang()
    {
        if (isset($_POST['selectedLang'])) {
            setcookie('selectedLang', $_POST['selectedLang'], time() + 99999, '/');
        }
        header("Location: " . $_POST['redirectUrl']);
        exit();
    }

    public function actionAuth()
    {

    }
}