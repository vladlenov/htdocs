<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 19.08.17
 * Time: 19:31
 */

namespace Game\Actions;

/**
 * Class World
 * @package Game\Actions
 */
class World
{
    protected $mapName;
    protected $size;
    public $map = [];

    /**
     * World constructor.
     * @param $mapName
     * @param $size
     */
    public function __construct($mapName, $size)
    {
        $this->mapName = $mapName;
        $this->size = $size;
    }

    /**
     * @param $size
     * @return mixed
     */
    public function createMap()
    {
       for ($x = 0; $x < $this->size; $x++) {
            for ($y = 0; $y < $this->size; $y++) {
                $map[$x][$y] = 0;
            }
        }

        for ($i = 0; $i < $this->size; $i++) {
            $map[0][$i] = 1; //верхняя стена
            $map[$this->size - 1][$i] = 1; //нижняя стена
            $map[$i][0] = 1; //левая стена
            $map[$i][$this->size - 1] = 1; //правая стена
        }
        $this->map = $map;
    }
}