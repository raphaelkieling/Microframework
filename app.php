<?php

require __DIR__.'/vendor/autoload.php';

$router = new Raphael\Router\Router($_SERVER['PATH_INFO'] ?? '/',$_SERVER['REQUEST_METHOD'] ?? 'GET');

$router->get('/hello',function(){
    return "Hello World";
});

$result = $router->run();
var_dump( $result['callback']());