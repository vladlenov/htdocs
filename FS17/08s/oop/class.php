<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 15.08.17
 * Time: 14:45
 * Реализовать базовый класс "Персонаж", с параметрами Имя, ID, сила, ловкость, интелект. Руки.
 * Создать оружие, которое будет иметь силу удара и вес. Сделать возможнным вкладывать в руки мечь.
 * Создать класс "Дуэль", в который будет передаваться два персонажа  и между ними должна происходить драка.
 * Драка заключается в последовательном вызове метода дуэли "атака",
 * в которой будет вычисляться сила удара каждого участника = сила оружия.
 * Каждый удар отнимает  у противника ХП. У кого ХП упадет до 0 - тот проиграл.
 * Предусмотреть оружие "кулак", его нужно ставить по умолчанию, если нчего не вложено в руки и если оружие снимается.
 */
namespace Game;

use Game\Actions\location;
use Game\Actions\World;
use Game\Chars\Dwarf;
use Game\Weapons\Sword;
use Game\Weapons\Saber;
use Game\Actions\Fight;
use Game\Components\DBconnect;
use Game\Components\save2BD;

include "vendor/autoload.php";

//$char1 = new Dwarf('Toilon1', 100);
//$sword = new Sword();
//$char1->setRightHand($sword);
//
//
//$char2 = new Dwarf('Toilon2', 120);
//$saber = new Saber();
//$char2->setRightHand($saber);
//
//
//$fight = new Fight($char1, $char2);
//
//var_dump($char1);
//var_dump($char2);
//
//$map = new World('My world', 10);
//$map->createMap();
//
//
//print_r($map);
//
//$loc = new location(5,8);
//print_r($loc);


//$connection = DBconnect::getInstance()->getConnection();
//$sql = "select * from chars where id = :id ";
//$stm = $connection->prepare($sql);
//$id = 1;
//$stm->bindParam(':id', $id);
//$stm->execute();
//var_dump(DBconnect::getInstance());

$add = new save2BD('Dwarf', 'Toilon3', '110', 'FistWeapon');
//var_dump($add);
$add->save2db();
