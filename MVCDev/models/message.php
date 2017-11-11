<?php
/**
 * User: vladlenov
 */

class Message extends Model {
//в аргумент $data передеются данные формы;
// $id если null - добавить элемент, если больше - обновить элемент с указанным id
    public function save($data, $id = null) {
        //проверка, заданы ли обязательные элементы массива
        if (!isset($data['name']) || !isset($data['email']) || !isset($data['message'])) {
            return false;
        }
        // подготовка данных для записи в базу данных, избавляемся от возможных sql-инъекций
        $id = (int)$id;
        $name = $this->db->escape($data['name']);
        $email = $this->db->escape($data['email']);
        $message = $this->db->escape($data['message']);

        if(!$id){ // добавление новой записи
            $sql = "insert into messages set 
                name = '{$name}',
                email = '{$email}',
                message = '{$message}'";
        } else { // обновление существующей
            $sql = "update messages set 
                name = '{$name}',
                email = '{$email}',
                message = '{$message}'
                where is = {$id}";
        }
        return $this->db->query($sql); //возвращаем результат запроса к базе данных
    }
    /*
     * получаем список сообщений
     */
    public function getList(){
        $sql = "select * from messages where 1";
        return $this->db->query($sql);
    }
}