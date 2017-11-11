<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 31.08.17
 * Time: 11:06
 */
namespace classes;

class Registry implements ArrayAccess
{
    function offsetExists($offset)
    {
        return isset($this->vars[$offset]);
    }

    function offsetGet($offset)
    {
        return $this->get($offset);
    }

    function offsetSet($offset, $value)
    {
        $this->set($offset, $value);
    }

    function offsetUnset($offset)
    {
        unset($this->vars[$offset]);
    }

    private $vars = array();

    function set($key, $var)
    {
        if (isset($this->vars[$key]) == true) {
            throw new Exception('Unable to set var `' . $key . '`. Already set.');
        }
        $this->vars[$key] = $var;
        return true;
    }

    function get($key)
    {
        if (isset($this->vars[$key]) == false) {
            return null;
        }
        return $this->vars[$key];
    }


    function remove($var)
    {
        unset($this->vars[$key]);
    }
}
