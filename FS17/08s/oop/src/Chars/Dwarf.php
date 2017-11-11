<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 17.08.17
 * Time: 23:09
 */

namespace Game\Chars;


class Dwarf extends BaseChar
{
    public function dig()
    {
        if ($this->getRightHand() instanceof Diggable) {
            echo "DIG!";
        } else {
            throw new NotDiggableExeption();
        }
    }
}