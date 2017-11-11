<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 25.09.17
 * Time: 16:06
 */

namespace App\Controllers;
use App\models\usersModel;
use System\BaseController;

class userController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function actionRegister()
    {
        $users = [["login" => "admin"]];
        $this->sendWebResponse(['users'], ['users'=>$users], true);
    }
}