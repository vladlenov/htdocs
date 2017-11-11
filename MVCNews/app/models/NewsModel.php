<?php

namespace app\models;
use system\BaseModel;

class NewsModel extends BaseModel
{
    public $id;
    public $title;
    public $data_en;
    public $data_rus;
    public $ins_date;
    protected $primaryKey = 'id';

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDataEn()
    {
        return $this->data_en;
    }

    /**
     * @param mixed $data_en
     */
    public function setDataEn($data_en)
    {
        $this->data_en = $data_en;
    }

    /**
     * @return mixed
     */
    public function getDataRus()
    {
        return $this->data_rus;
    }

    /**
     * @param mixed $data_rus
     */
    public function setDataRus($data_rus)
    {
        $this->data_rus = $data_rus;
    }

    /**
     * @return mixed
     */
    public function getInsDate()
    {
        return $this->ins_date;
    }

    /**
     * @param mixed $ins_date
     */
    public function setInsDate($ins_date)
    {
        $this->ins_date = $ins_date;
    }

    public function getNews($id)
    {
        $fieldsNames = implode(", ", $this->getModelFields());
        $db = DB::get_instance();
        $statement = $db->prepare("select " . $fieldsNames . " from news where id = '{$id}'");
        $statement->execute();
        /** @var NewsModel $user */
        $user = $statement->fetchObject('\app\models\NewsModel');
    }

    public function saveNews()
    {
        $modelFields = $this->getModelFields();
        $fieldsNames = '`' . implode("`, `", array_slice($modelFields, 1)) . '`'; // подготавливаем поля запроса

        $valueFields = array_map( function ($value){
            $value = $this->$value;
            return $value;
    }, $modelFields);
        $valueNames = "'" . implode("', '", array_slice($valueFields, 1)) . '\'';// формируем значения запроса

        if (isset($this->id)) {

        } else {
        $db = DB::get_instance();
        $statement = $db->prepare("INSERT INTO `" . $this->getTableName() . "`(" . $fieldsNames . ") VALUES (" . $valueNames  . ")");
//        ?><!--<pre>--><?//="INSERT INTO `" . $this->getTableName() . "`(" . $fieldsNames . ") VALUES (" . $valueNames  . ")"; die(); ?><!--</pre>--><?//
        return (bool)$statement->execute();
        }
    }
}