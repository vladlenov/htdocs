<?php
namespace app\models;

use system\DB;
use system\BaseModel;
use system\NotFoundException;

class UsersModel extends BaseModel
{
    public $id;
    public $name;
    public $login;
    public $email;
    public $pass;
    public $ins_date;
    protected $primaryKey = 'login';

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param mixed $pass
     */
    public function setPass($pass)
    {
        $pass = password_hash($pass, PASSWORD_BCRYPT);
        $this->pass = $pass;
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

    public function getUser($login, $pass)
    {
        $fieldsNames = implode(", ", $this->getModelFields());
        $db = DB::get_instance();
        $statement = $db->prepare("select " . $fieldsNames . " from " . $this->getTableName() . " where login = '{$login}'");
//?><!--<pre>--><?//print_r($this->getModelFields()); die(); ?><!--</pre>--><?//
        $statement->execute();
        /** @var UsersModel $user */
        $user = $statement->fetchObject('\app\models\UsersModel');

        if (password_verify($pass, $user->getPass())) {
            return $user;
        } else {
            throw new NotFoundException();
        }
    }

    public function saveUser()
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
//        ?><!--<pre>--><?//print_r($statement); ?><!--</pre>--><?//
            return (bool)$statement->execute();
        }
    }
}