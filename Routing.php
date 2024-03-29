<?php

require_once 'public/controllers/DefaultController.php';
require_once 'public/controllers/SecurityController.php';
require_once 'public/controllers/ItemController.php';
require_once 'public/controllers/RegistrationController.php';

class Routing{

    public static $routes;

    public static function get($url, $controller){
        self::$routes[$url] = $controller;
    }
    public static function post($url, $view) {
        self::$routes[$url] = $view;
    }

    public static function run($url){
        $action = explode("/", $url)[0];
        if(!array_key_exists($action, self::$routes)){
            
            die("Wrong url!");

        }

        $controller = self::$routes[$action];
        $object = new $controller;
        $action = $action ?: 'index';

        $object->$action();
    }
}