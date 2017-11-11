<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 27.08.17
 * Time: 13:44
 */

namespace Game\Components;
use \Game\Components\DBconnect;

class save2BD
{
    private $sql;

    /**
     * save2BD constructor.
     * @param $class
     * @param $name
     * @param $hp
     * @param $weapon
     */
    public function __construct($class, $name, $hp, $weapon)
    {
        $this->class = $class;
        $this->name = $name;
        $this->hp = $hp;
        $this->weapon = $weapon;
        $sql = "INSERT INTO `chars` (`class`, `name`, `hp`, `weapon`) VALUES ($class, $name, $hp, $weapon)";
        $this->sql = $sql;
    }

    /**
     * try:connect - beginTransaction - prepare - exec - commit
     * catch: rollBack;
     */
    public function save2db()
    {
        try {
            DBconnect::getInstance()->getConnection();
        } catch (Exception $e) {
        die ("Не удалось подключиться: " . $e->getMessage());
        }

        try {
            DBconnect::getInstance()->getConnection()->beginTransaction();
            $stm = DBconnect::getInstance()->getConnection()->prepare($this->sql);
            DBconnect::getInstance()->getConnection()->exec($stm);
            DBconnect::getInstance()->getConnection()->commit();
        } catch (Exception $e) {
            DBconnect::getInstance()->getConnection()->rollBack();
        echo "Ошибка: " . $e->getMessage();
        }
    }
}

$add = new save2BD('Dwarf', 'Toilon3', '110', 'FistWeapon');
//var_dump($add);
$add->save2db();