<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 31.08.17
 * Time: 12:46
 */
namespace controllers;


Class Controller_Index Extends Controller_Base {

    function index() {
    echo 'Hello from my MVC system';
        $this->registry['template']->set ('first_name', 'Dennis');
        $this->registry['template']->show('index');
    }
}