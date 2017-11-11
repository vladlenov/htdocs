<?php

namespace app\repositories;
use app\models\NewsModel;
use Composer\DependencyResolver\Transaction;
use system\DB;
use system\Traslation;
use system\BaseModel;

class NewsRepository
{
    private $model;

    private function getModel()
    {
        if (!isset($this->model)) {
            $this->model = new NewsModel();
        }
        return $this->model;
    }

//    public function getAll()
//    {
//        $db = DB::get_instance();
//        $statement = $db->prepare("SELECT * FROM news");
//        $statement->execute();
//
//        while ($row = $statement->fetchObject('\app\models\NewsModel')) {
//            $dataField = "data_" . traslation::getCurrentLanguage();
//            $row->data = $row->$dataField;
//            $retArr[] = $row;
//        }
//        return $retArr;
//    }

    public function getNews($id)
    {
        return $this->getModel()->getByPrimaryKey($id);
    }


    public function createNews($title, $data_en, $data_rus, $ins_date)
    {
        $this->getModel()->setTitle($title);
        $this->getModel()->setDataEn($data_en);
        $this->getModel()->setDataRus($data_rus);
        $this->getModel()->setInsDate($ins_date);
        return $this->getModel()->saveNews();
    }
}