<?php

//This is my CONTROLLER
/** Create a pet order form */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Start a session
session_start();

//require the autoload file
require_once('vendor/autoload.php');

//Create an instance of Base class
$f3 = Base::instance();
$f3->set('DEBUG', 3);

//define a default route(home page)
$f3->route('GET /', function($f3) {

    $f3->set('username', 'jshmo');
    $f3->set('password', sha1('Password01'));
    $f3->set('title', 'Working with Templates');
    $f3->set('ftemp', 67);
    $f3->set('color', 'purple');
    $f3->set('radius', 10);
    echo "Home page";
    $view = new Template();
    echo $view->render('views/info.html');
});

//run fat free
$f3->run();