<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 17.08.17
 * Time: 23:11
 */

namespace Game\Actions;
use Game\Weapons\Weapon;
use Game\Chars\BaseChar;


class Fight
{
    private $player1;
    private $player2;

    /**
     * Fight constructor.
     * @param \Game\Chars\BaseChar $player1
     * @param \Game\Chars\BaseChar $player2
     */
    public function __construct($player1, $player2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
        $this->fight();
    }

    /**
     * Fight
     */
    private function fight()
    {
        $i = 0;
        $j = 0;
        while ($this->player1->getHp() > 0 || $this->player2->getHp() > 0) {
            if($this->player1->getHp() <= 0) {
                echo $this->player2->getName() . ' win' . PHP_EOL;
                break;
            } elseif($this->player2->getHp() <= 0) {
                echo $this->player1->getName() . ' win' . PHP_EOL;
                break;
            } else {
                if($i == $this->player1->getRightHand()->getSpeed()) {
                    $this->player1->setHp($this->player1->getHp() - $this->player2->getRightHand()->getPower());
                    $i = 0;
                } else {
                    $i++;
                }
            }
                if ($j == $this->player2->getRightHand()->getSpeed()) {
                    $this->player2->setHp($this->player2->getHp() - $this->player1->getRightHand()->getPower());
                    $j = 0;
                } else  {
                    $j++;
                }
        }
    }
}
