<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';


// create new Slim instance
$app = new  \Slim\App;

// add new Route 
$app->get("/", function () {
   echo "<h1>Hello Slim World</h1>";
});

//$app->run();

$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});
$app->run();