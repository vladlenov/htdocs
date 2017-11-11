<?php

namespace app\controllers;

use app\repositories\UsersRepository;
use system\BaseController;
use system\DB;
use app\models\UsersModel;

class AuthController extends BaseController
{
    private $userRepository;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return UsersRepository
     */
    public function getUserRepository()
    {
        if (!isset($this->userRepository)) {
            $this->userRepository = new UsersRepository();
        }
        return $this->userRepository;
    }

    /**
     * @param mixed $userRepository
     */
    public function setUserRepository(UsersRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     *
     */
    public function actionLogin()
    {
        if (array_key_exists('action', $_POST) && $_POST['action'] == "login") {
            if ($user = $this->getUserRepository()->findUser($_POST['login'], $_POST['password'])) {
                $_SESSION['user_id'] = $user->getId();
                $_SESSION['user_name'] = $user->getName();
                header("Location: http://localhost/MVCNews/");
            }
        }
        $this->sendWebResponse(['auth/login'], [], true);
    }

    public function actionRegister()
    {
        if (isset($_POST['action']) && $_POST['action'] == "reg") {
            $this->getUserRepository()->createUser($_POST['name'], $_POST['email'], $_POST['login'], $_POST['password'], $_POST['ins_date']);
        }
        $this->sendWebResponse(['auth/reg'], [], true);
    }

    public function actionlogOut ()
    {
        session_destroy();
        header($_SERVER["SERVER_PROTOCOL"] . " 401 Unauthorized");
        header('HTTP/1.0 401 Unauthorized');
        header("Location: http://localhost/MVCNews/");
    }
}