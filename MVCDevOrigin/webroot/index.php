<?php
/**
 * User: vladlenov
 */
//определение базовых констант разделения директорий в windows и unix
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
define('VIEWS_PATH', ROOT.DS.'views');

require_once(ROOT . DS . 'lib' . DS . 'init.php');

//$uri = $_SERVER['REQUEST_URI'];
//
//print_r($uri);
//
//$router = new Router($_SERVER['REQUEST_URI']);
//
//echo "<pre>";
//print_r('Route: '.$router->getRoute().PHP_EOL);
//print_r('Language: '.$router->getLanguage().PHP_EOL);
//print_r('Controller: '.$router->getController().PHP_EOL);
//print_r('Action to be called: '.$router->getMethodPrefix().$router->getAction().PHP_EOL);
//echo "Params: ";
//print_r($router->getParams());
//var_dump($_SERVER['REQUEST_URI']); exit();

session_start();

App::run($_SERVER['REQUEST_URI']);