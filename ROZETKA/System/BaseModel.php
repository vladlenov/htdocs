<?php
namespace System;

class BaseModel
{
    private $primaryKey = 'id';
    private $tablename = "";

    public function getTableName()
    {
        $model = end(explode("\\", __CLASS__));
        return substr($model, 0, 10);
    }



/**
    public function save()
    {
        $db = DB::get_instance();
        if ( $this->{$this->primaryKey} !='' ) {
            $stmt = $db->prepare("update ".$this->tablename." set name='".$this->name."', catId='".$this->catId."',
              description='".$this->description."' where id = ".$this->id);

        } else {
            $stmt = $db->prepare("insert into ".$this->tablename."  (name, catId, description) 
              values ('".$this->name."','".$this->catId."','".$this->description."') ");

        }
        $stmt->execute();
    } */
}