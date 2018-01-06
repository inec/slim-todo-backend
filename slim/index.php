<?php

require '../vendor/autoload.php';


// create new Slim instance
$app = new  \Slim\App;

// add new Route 
$app->get("/", function () {
    echo "<h1>Hello Slim World</h1>";
});

// run the Slim app
$app->run();