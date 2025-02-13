<?php

use Admin\App\Controllers\Dashboard;
use Phroute\Phroute\RouteCollector;

require_once __DIR__."/vendor/autoload.php";
require_once __DIR__."/app/helpers/handler.php";
$router = new RouteCollector();
$url = $_GET['url'] ?? "";
$router->get('/',[Dashboard::class,'index']);
$router->get('/news',[Dashboard::class,'news']);
$router->get('/add_new',[Dashboard::class,'add_products']);
$router->get('/category',[Dashboard::class,'category']);
$router->get('/add_category',[Dashboard::class,'add_category']);
try {
    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
    
    // Print out the value returned from the dispatched function
    echo $response;
} catch (\Phroute\Phroute\Exception\HttpException $ex) {
    echo "404 Not found!";
}