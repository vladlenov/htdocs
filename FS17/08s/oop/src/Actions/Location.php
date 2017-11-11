<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 20.08.17
 * Time: 13:56
 */

namespace Game\Actions;
use \Game\Actions\World;


class location
{
    protected $axis_x;
    protected $axis_y;
    protected $location;

    /**
     * location constructor.
     * @param $x
     * @param $y
     */
    public function __construct($char,$x,$y, )
    {
        $this->char = $shar;
        $this->axis_x = $x;
        $this->axis_y = $y;
        $this->location = array([$this->axis_x][$this->axis_y]);
    }

    /**
     * @return array
     */
    public function getLocation(): array
    {
        return $this->location;
    }
}
