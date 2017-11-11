<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 22.07.17
 * Time: 14:11
 */
$g = 'test';
$c = function($a, $b) use($g){
    echo $a . $b .  $g;
};
$g = 'test2';
var_dump($c);

//Очень удобно применять анонимные функции и для фильтрации
$x = array_filter($data, function($v){ return $v > 0; });
//vs
$x = array();
foreach($data as $v)
{
    if($v > 0){$x[] = $v}
}

//реализации валидаторов:
$notEmpty = function($v){ return strlen($v) > 0 ? true : “Значение не может быть пустым”; };
$greaterZero = function($v){ return $v > 0 ? true : “Значение должно быть больше нуля”; };

function getRangeValidator($min, $max){
    return function($v) use ($min, $max){
        return ($v >= $min && $v <= $max)
            ? true
            : “Значение не попадает в промежуток”;
	};
}

//Кеширование
$someHtml = $this->cashe->get(‘users.list’, function() use($app){
    $users = $app->db->table(‘users)->all();
    return $app->template->render(‘users.list’, $users);
}, 1000);
//Здесь метод get проверяет валидность кеша по ключу ‘users.list’ и если он не валиден, то
// обращается к функции за данными. Третий параметр определяет длительность хранения данных.


//Инициализация по требованию. Допустим, у нас есть сервис Mailer, который мы вызываем в некоторых методах.
// Перед использованием он должен быть сконфигурирован. Чтобы не инициализировать его каждый раз,
// будем использовать ленивое создание объекта.
//Где-то в конфигурационном файле.
$service->register(‘Mailer’, function(){
    return new Mailer(‘user’, ‘password’, ‘url’);
});
//Где-то в контроллере
$this->service(‘Mailer’)->mail(...);
//Инициализация объекта произойдет только перед самым первым использованием.
