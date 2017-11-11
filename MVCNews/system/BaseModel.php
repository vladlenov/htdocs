<?php
namespace system;

class BaseModel
{

    protected $primaryKey = 'id';
    protected $tableName = "";

    public function getTableName()
    {
        if(empty($this->tableName)){
            $reflection = new \ReflectionClass($this);
            $explodedModelName = explode("\\", $reflection->getName());
            $model = end($explodedModelName);
            $this->tableName = strtolower(substr($model, 0, -5));
        }
        return $this->tableName;
    }

    protected function getModelFields ()
    {
        $reflection = new \ReflectionClass($this);
        $fields = $reflection->getProperties();
        foreach ($fields as $field) {
            if ($field->isPublic()) {
                $retArray[] = $field->getName();
            }
        }
        return $retArray;
    }

    public function getByPrimaryKey($value)
    {
        $fields = $this->getModelFields();
        $fieldsNames = implode(", ", $fields);
        $db = DB::get_instance();
        $statement = $db->prepare("select " . $fieldsNames . " from " . $this->getTableName() . " 
                                             where " . $this->primaryKey . " = '{$value}'");
        ?><pre><?="select ".$fieldsNames." from ".$this->getTableName()." where ".$this->primaryKey." = '{$value}'";?></pre><?
        $statement->execute();
        $reflection = new \ReflectionClass($this);
        return $statement->fetchObject($reflection->getName());
    }
}