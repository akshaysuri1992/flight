<?php

require 'vendor/autoload.php';

require 'classes/Greeting.class.php';

//Flight::set('flight.views.path', 'classes/views');

//directly do some in route index
Flight::route('/', 'hello');

function hello(){
    
    echo 'hello world!';
    
}
//directly do some in route index



$greeting = new Greeting();

Flight::route('POST /greeting', array($greeting, 'index'));

Flight::route('GET /greeting', array($greeting, 'home'));

Flight::start();
