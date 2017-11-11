<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 31.08.17
 * Time: 11:00
 */

include ('includes\startup.php');

$db = new PDO('mysql:host=localhost;dbname=demo', '[user]', '[password]');
$registry->set ('db', $db);

$template = new Template($registry);
$registry->set ('template', $template);

$router = new Router($registry);
$registry->set ('router', $router);
$router->setPath (site_path . 'controllers');

$router->delegate();