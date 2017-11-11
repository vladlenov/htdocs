<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 17.08.17
 * Time: 22:50
 */

namespace Game\Exeptions;


class NotDiggableExeption extends \Exception
{
    protected $message = "Right hand not diggable";
}