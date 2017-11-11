<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 25.09.17
 * Time: 16:01
 */

namespace App\repositories;


class UsersRepository
{
    public function getAll()
    {
        $db = db::get_instance();
        $stmt = $db->prepare("SELECT * from users");
        $stmt->execute();

        while ($row = $stmt->fetchObject('\App\models\usersModel')) {
            $retArr[] = $row;
        }
        return $retArr;
    }
}