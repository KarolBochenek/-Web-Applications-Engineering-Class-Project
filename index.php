<?php

session_start();

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

$httpMethod = $_SERVER['REQUEST_METHOD'];
if ($httpMethod == 'GET' && $path == 'register') {
    require_once 'public/controllers/RegistrationController.php';
    $controller = new RegistrationController();
    $controller->showRegistrationForm();
} elseif ($httpMethod == 'POST' && $path == 'register') {
    require_once 'public/controllers/RegistrationController.php';
    $controller = new RegistrationController();
    $controller->register();
} else {
    Routing::get('', 'DefaultController');
    Routing::get('items', 'ItemController');
    Routing::post('login', 'SecurityController');
    Routing::get('logout', 'SecurityController');
    Routing::post('additem', 'ItemController');
    Routing::run($path);
}