<?php

/**
 *  Config File For Handel Route, Database And Request
 * 
 *  Author: Mohammad Rahmani
 *  Email: rto1680@gmail.com
 *  WebPage: mohammadrahmani.com
 *  
 */

// Http Default Url
$scriptName = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
define('HTTP_URL', '/'. substr_replace(trim($_SERVER['REQUEST_URI'], '/'), '', 0, strlen($scriptName)));

// Define Path Application
define('SCRIPT', str_replace('\\', '/', rtrim(__DIR__, '/')) . '/');
define('SYSTEM', SCRIPT . 'System/');
define('CONTROLLERS', SCRIPT . 'Application/Controllers/');
define('MODELS', SCRIPT . 'Application/Models/');
define('VIEWS', SCRIPT . 'Application/Views/');
define('FINDER', SCRIPT . 'Finder/');

// Config Database
define('DATABASE', [
    'Port'   => '3306',
    'Host'   => 'localhost',
    'Driver' => 'PDO',
    'Name'   => 'cms',
    'User'   => 'root',
    'Pass'   => '',
    'Prefix' => ''
]);

// DB_PREFIX
define('DB_PREFIX', '');
