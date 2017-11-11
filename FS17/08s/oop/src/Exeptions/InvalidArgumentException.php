<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 19.08.17
 * Time: 18:56
 */

namespace Game\Exeptions;


class InvalidArgumentException extends \Exception
{
    protected $message = "You don't have the weapon, motherfucher!";
}