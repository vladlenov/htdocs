<?php
// выборка данных и поиск по заданным условиям
namespace App\repositories;
use System\db;

class CategoriesRepository
{

    public function getAll()
    {
        $db = db::get_instance();
        $stmt = $db->prepare("select * from categories");
        $stmt->execute();

        while ($row = $stmt->fetchObject('\App\models\categoriesModel')) {
            $retArr[] = $row;
        }

        return $retArr;
    }
}