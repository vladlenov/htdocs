<?php
/**
 * User: vladlenov
 */
Config::set('site_name', 'Your site name');
Config::set('languages', array('en','ua'));

//Router. Routs name => method prefix
Config::set('routes', array(
    'default' => '',
    'admin' => 'admin',
    'pages' => '',
    ));

Config::set('default_route', 'default');
Config::set('default_language', 'en');
Config::set('default_controller', 'pages');
Config::set('default_action', 'index');
Config::set('document_root', '/MVCDev/webroot');

Config::set('db.host', 'localhost');
Config::set('db.user', 'root');
Config::set('db.password', '');
Config::set('db.db_name', 'mvc');

Config::set('salt', 'm@y7ef0r5e8ew17hy0u');