<?php
// выборка данных и поиск по заданным условиям
namespace App\repositories;
use System\db;

class ItemsRepository
{

    public function getAll()
    {
        $db = db::get_instance();
        $stmt = $db->prepare("select * from items");
        $stmt->execute();

        while ($row = $stmt->fetchObject('\App\models\itemsModel')) {
            $retArr[] = $row;
        }

        return $retArr;
    }
}