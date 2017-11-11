<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 17.08.17
 * Time: 23:07
 */

namespace Game\Chars;
use Game\Weapons\FistWeapon;
use Game\Weapons\Weapon;
use Game\Exeptions\InvalidArgumentException;

abstract class BaseChar
{
    use HpTrait;
    protected $name;
    protected $str;
    protected $dex;
    protected $intelligence;
    protected $right_hand;

    /**
     * BaseChar constructor.
     * @param $name
     * @param $hp
     */
    public function __construct($name, $hp)
    {
        $this->name = (string)$name;
        $this->hp = $hp;
        $this->right_hand = new FistWeapon();
    }

    /**
     * @param mixed $hp
     */
    public function setHp($hp)
    {
        $this->hp = $hp;
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
     * @param mixed $agility
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
     * @return Weapon
     */
    public function getRightHand()
    {
        return $this->right_hand;
    }

    /**
     * @param mixed $right_hand
     */
    public function setRightHand($right_hand)
    {
        if ($right_hand instanceof Weapon) {
            $this->right_hand = $right_hand;
        } elseif (!$right_hand) {
            $this->right_hand = new FistWeapon();
        } else {
            throw new InvalidArgumentException();
        }
    }
}