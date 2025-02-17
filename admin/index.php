<?php

session_start();

use Admin\App\Controllers\Dashboard;
use Admin\App\Controllers\Shop_bb3;
use Phroute\Phroute\RouteCollector;

require_once __DIR__."/vendor/autoload.php";
require_once __DIR__."/app/helpers/handler.php";
require_once __DIR__."/../commons/env.php";

if(!isset($_SESSION['admin'])){
    header("location: ".BASE_URL);
}
 
$router = new RouteCollector();
$url = $_GET['url'] ?? "";
$router->get('/',[Dashboard::class,'index']);
$router->get('/news',[Dashboard::class,'news']);
$router->get('/add_new',[Dashboard::class,'add_products']);
$router->get('/category',[Dashboard::class,'category']);
$router->get('/new-categories',[Dashboard::class,'add_category']);
$router->get('/babythree',[Dashboard::class,'babythree']);
$router->get('/auth-logout',[Dashboard::class,'logout']);
$router->POST('post-new-categories',[Dashboard::class,'sucsess_new_categories']);
$router->POST('sucsess-new-post',[Dashboard::class,'sucsess_new_post']);
$router->get('add_new_bb3',[Shop_bb3::class,'handerCreate']);
$router->POST('sucsess-new-product-bb3',[Shop_bb3::class,'handerPostCreate']);



try {
    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
    
    // Print out the value returned from the dispatched function
    echo $response;
} catch (\Phroute\Phroute\Exception\HttpException $ex) {
    echo "404 Not found!";
}