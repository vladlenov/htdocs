<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 31.08.17
 * Time: 12:45
 */
namespace classes;

abstract class Controller_Base {
    protected $registry;

    function __construct($registry) {
        $this->registry = $registry;
    }

    abstract function index();
}
