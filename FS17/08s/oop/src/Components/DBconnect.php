<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 24.08.17
 * Time: 22:56
 */

namespace Game\Components;

class DBconnect
{
    private static $instance;
    private $db;

    /**
     * DbConnect constructor.
     */
    private function __construct() // Защищаем от создания через new DbConnect
    {
        $dsn = 'mysql:dbname=game;host=localhost';
        $user = 'root';
        $password = 'vladlen';

    try {
        $this->db = new \PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Подключение не удалось: ' . $e->getMessage();
    }
}
    private function __clone() { /* ... @return DbConnect */ }  // Защищаем от создания через клонирование
    private function __wakeup() { /* ... @return DbConnect */ }  // Защищаем от создания через unserialize



    /**
     * @return DB
     */
    static public function getInstance() {
        return
            self::$instance===null ? self::$instance = new self() : self::$instance;
    }

    public function getConnection ()
    {
        if (!isset($this->db)){
            throw new \Exception();
        }
        return $this->db;
    }
}

//$connection = DB::getInstance()->getConnection();
//
//$sql = "select * from chars where id = :id ";
//$stm = $connection->prepare($sql);
//$id = 1;
//$stm->bindParam(':id', $id);
//$stm->execute();