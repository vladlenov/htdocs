<?php

namespace app\repositories;
use app\models\UsersModel;

class UsersRepository
{
    private $model;

    private function getModel()
    {
        if (!isset($this->model)) {
            $this->model = new UsersModel();
        }
        return $this->model;

    }

    public function createUser($name, $email, $login, $pass, $ins_date)
    {
        $this->getModel()->setName($name);
        $this->getModel()->setEmail($email);
        $this->getModel()->setLogin($login);
        $this->getModel()->setPass($pass);
        $this->getModel()->setInsDate($ins_date);
        return $this->getModel()->saveUser();
            }

    public function findUser($login, $pass)
    {
        return $this->getModel()->getByPrimaryKey($login);
//        return $this->getModel()->getUser($login, $pass);
    }
}