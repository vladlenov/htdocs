<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 24.08.17
 * Time: 22:50
 */

interface IHead
{
    public function drawHead($x, $y);
}

class RedHead implements IHead
{
    public function drawHead($x, $y) {
        echo 'Your red head in axis x = ' . $x . ' and axis y = ' . $y . '</ br>' . PHP_EOL;
    }
}

class WhiteHead implements IHead
{
    public function drawHead($x, $y) {
        echo 'Your white head in axis x = ' . $x . ' and axis y = ' . $y . '</ br>' . PHP_EOL;
    }
}

interface IBody
{
    public function drawBody($x, $y);
}

class RedBody implements IBody
{
    public function drawBody($x, $y) {
        echo 'Your red body in axis x = ' . $x . ' and axis y = ' . $y . '</ br>' . PHP_EOL;
    }
}

class WhiteBody implements IBody
{
    public function drawBody($x, $y) {
        echo 'Your white body in axis x = ' . $x . ' and axis y = ' . $y . '</ br>' . PHP_EOL;
    }
}

/**
 * Interface ISnowman - this is abstract factory
 */
interface ISnowman
{
    public function drawHead($x, $y);
    public function drawBody($x, $y);
}

/**
 * Class WhiteSnowman - concrete factory
 */
class WhiteSnowman implements ISnowman
{
    protected $head;
    protected $body;

    public function __construct() {
        $this->head = new WhiteHead();
        $this->body = new WhiteBody();
    }
    public function drawHead($x, $y) {
        $this->head->drawHead($x, $y);
    }
    public function drawBody($x, $y) {
        $this->body->drawBody($x, $y);
    }
}
/**
 * Class RedSnowman - concrete factory
 */
class RedSnowman implements ISnowman
{
    protected $head;
    protected $body;

    public function __construct() {
        $this->head = new RedHead();
        $this->body = new RedBody();
    }
    public function drawHead($x, $y) {
        $this->head->drawHead($x, $y);
    }
    public function drawBody($x, $y) {
        $this->body->drawBody($x, $y);
    }
}

function snowman(ISnowman $snowman) {
    $snowman->drawHead(1,1);
    $snowman->drawBody(1,2);
}

$typeSnowman = 'red';
// мы выбираем тип семейства в начале кода
if($typeSnowman == 'red')
    $snowman = new RedSnowman();
else
    $snowman = new WhiteSnowman();

snowman($snowman);