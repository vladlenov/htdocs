<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 25.09.17
 * Time: 15:54
 */

namespace App\models;
use System\BaseModel;
use System\db;


class usersModel extends BaseModel
{
    public $id;
    public $login;
    public $email;
    public $role;
    public $password;

    public function register() {
        $db = db::get_instance();
        $pass = password_hash($this->password, PASSWORD_BCRYPT);
        $insert = $db->prepare("INSERT INTO `users` (`id`, `login`, `email`, `role`, `password`) 
                          VALUES ($this->id, $this->login, $this->email, $this->role, $pass)");
        $insert->execute();
    }
}