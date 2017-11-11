<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 18.08.17
 * Time: 0:56
 */

namespace Game\Chars;

trait HpTrait
{
    protected $hp = 100;

    /**
     * @return mixed
     */
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * @param mixed $hp
     */
    public function setHp($hp)
    {
        $this->hp = $hp;
    }
}
