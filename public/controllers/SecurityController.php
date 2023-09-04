<?php

require_once 'AppController.php';
require_once __DIR__.'../models/User.php';

class SecurityController extends AppController{


    public function login(){


        $user = new User(email: 'sobieski@pk.edu.pl', password: 'admin', name: 'Jan', surname: 'Sobieski' );
        var_dump($_POST);
        die();
    }
}