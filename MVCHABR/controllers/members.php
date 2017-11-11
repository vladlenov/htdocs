<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 31.08.17
 * Time: 13:08
 */
namespace controllers;

class Controller_Members Extends Controller_Base {

    function index() {
        echo 'Default index of the `members` controllers';
    }

    function view() {
        echo 'You are viewing the members/view request';
    }
}