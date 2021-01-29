<?php

//This is my CONTROLLER page

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the auto autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();
$f3->set('Debug',3);

//Define a default route (home page)
$f3->route('GET /', function(){

    //creating a new view using the Template constructor
    $view = new Template();
    //echo the view and invoke its render method and supply the path
    echo $view->render('views/pet-home.html');
});

//Define an order route
$f3->route('GET /order', function() {
    $view = new Template();
    echo $view->render("views/pet-order.html");
});

//Define an order2 route
$f3->route('POST /order2', function() {
    //var_dump($_POST);
    $view = new Template();
    echo $view->render("views/pet-order2.html");
});

//Run fat free
$f3->run();