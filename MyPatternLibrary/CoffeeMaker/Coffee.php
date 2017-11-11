<?php
/**
 * User: vladlenov
 */

class Config
{
    public $CoffeePrice;
    public $MilkPrice;
    public $Currency;

    /**
     * Config constructor.
     * @param int $CoffeePrice
     * @param int $MilkPrice
     */
    public function initial($country)
    {
        return new $country;
    }
}

class Coffee
{
    public $totalPrice;
    public $components = [];
    public $country;

    /**
     * Coffee constructor.
     * @param $country
     */
    public function __construct($country)
    {
        $this->country = $country;
    }
    /**
     * @return array
     */
    public function getReceipt()
    {
        $receipt = '';
        $config = Config::initial($this->country);
        foreach ($this->components as $component){
            $receipt .= key($component)."........".current($component)." ". $config->Currency . PHP_EOL;
        }
        $receipt .= 'Total: ...... '.$this->totalPrice .' ' . $config->Currency;
        return $receipt;
    }
}

abstract class BaseCoffeeDecorator
{
    protected $price = 0;

    public function __construct(Coffee $coffee)
    {
        $config = Config::initial($coffee->country);
        $priceName = $this->name."Price";
        $this->price = $config->$priceName;
        $coffee->components[] = [$this->name => $this->price];
        $coffee->totalPrice += $this->price;
    }
}

class CoffeDecorator extends BaseCoffeeDecorator
{
    protected $name = 'Coffee';
}

class MilkDecorator extends BaseCoffeeDecorator
{
    protected $name = 'Milk';
}


class Americano
{

    public static function recipe($coffee)
    {
        new CoffeDecorator($coffee);
        new CoffeDecorator($coffee);
        new MilkDecorator($coffee);
        return $coffee;
    }
}

class Cappucino
{

    public static function recipe($coffee)
    {
        new CoffeDecorator($coffee);
        new MilkDecorator($coffee);
        new MilkDecorator($coffee);
        return $coffee;
    }
}

class CoffeMachine
{
    public $country;
    public $coffee;
    /**
     * CoffeMachine constructor.
     * @param $country
     */
    public function __construct($country)
    {
        $this->country = $country;
    }

    public function makeCoffee($type)
    {
        $coffee = new Coffee($this->country);
        $thisCoffee = $type::recipe($coffee);
        echo $thisCoffee->getReceipt();
    }
}

class Ukraine extends Config
{
    public $CoffeePrice = 10;
    public $MilkPrice = 5;
    public $Currency = 'UAH';
}

class Spain extends Config
{
    public $CoffeePrice = 1;
    public $MilkPrice = 0.5;
    public $Currency = 'EUR';
}

$coffeeMachine = new CoffeMachine('Spain');
$coffeeMachine->makeCoffee('Cappucino');