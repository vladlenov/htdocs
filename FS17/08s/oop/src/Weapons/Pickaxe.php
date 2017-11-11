<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 17.08.17
 * Time: 23:01
 */

namespace Game\Weapons;


class Pickaxe extends Weapon implements Diggable
{
    const POWER = 5;
    const WEIGHT = 10;
    const SPEED = 9;

    public function dig()
    {
        echo "I'm digging";
    }
}