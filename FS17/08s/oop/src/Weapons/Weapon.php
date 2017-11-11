<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 17.08.17
 * Time: 22:55
 */

namespace Game\Weapons;


abstract class Weapon
{
    const POWER = 10;
    const WEIGHT = 10;
    const SPEED = 10;

    /**
     * @return mixed
     */
    public function getPower()
    {
        return static::POWER;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return static::WEIGHT;
    }

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return static::SPEED;
    }
}