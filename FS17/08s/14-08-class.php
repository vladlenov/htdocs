<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 14.08.17
 * Time: 19:06
 */

class NotDiggableExeption extends Exception
{
    protected $message = "Right hand is not diggable!";
}

interface Diggable
{
    public function dig();
}

abstract class Weapon
{
    const POWER = 10;
    const WEIGHT = 5;

    public function getPower()
    {
        return self::POWER;
    }
    public function getWeight()
    {
        return self::WEIGHT;
    }
}



class KatanaWeapon extends Weapon
{
    const POWER = 30;
    const WEIGHT = 8;
}

class LongSwordWeapon extends Weapon
{
    const POWER = 50;
    const WEIGHT = 15;
}

class Pickaxe extends Weapon implements Diggable
{
    const POWER = 5;
    const WEIGHT = 10;

    public function dig()
    {
        echo "I'm digging";
    }
}


abstract class BaseChar
{
    protected $name;
    protected $str;
    protected $dex;
    protected $int;
    protected $right_hand;
    protected $hp;


    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }



    /**
     * @return mixed
     */
    public function getStr()
    {
        return $this->str;
    }

    /**
     * @param mixed $str
     */
    public function setStr($str)
    {
        $this->str = $str;
    }

    /**
     * @return mixed
     */
    public function getDex()
    {
        return $this->dex;
    }

    /**
     * @param mixed $dex
     */
    public function setDex($dex)
    {
        $this->dex = $dex;
    }

    /**
     * @return mixed
     */
    public function getInt()
    {
        return $this->int;
    }

    /**
     * @param mixed $int
     */
    public function setInt($int)
    {
        $this->int = $int;
    }

    /**
     * @return mixed
     */
    public function getRightHand()
    {
        return $this->right_hand;
    }

    /**
     * @param mixed $right_hand
     */
    public function setRightHand(Weapon $right_hand)
    {
        $this->right_hand = $right_hand;
    }

}



class Dwarf extends BaseChar
{

public function dig()
{
    if($this->getRightHand() instanceof Diggable) {
        echo "DIG!";
    } else {
        throw new NotDiggableExeption();
    }
}


}

class Elf extends BaseChar
{

}

$char = new Dwarf('Toilon');
$sword = new Sword();

try {
    $char->dig();
} catch (NotDiggableExeption $e) {
    echo $e->getMessage();
} catch (Exception $e) {
    echo "General error";
} finally {
    echo "!!!";
}

$char->setRightHand($sword);

