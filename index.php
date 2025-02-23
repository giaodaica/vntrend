<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/app/helpers/handler.php';
require_once __DIR__ .'/commons/env.php';

use App\Controllers\Baby3Controller;
use App\Controllers\HomeController;
use Phroute\Phroute\RouteCollector;


$url = $_GET['url'] ?? '';

$router = new RouteCollector();
$router->get('/',[HomeController::class,'index']);

$router->get('/babythree',[HomeController::class,'shop']);

$router->get('/babythree/{id}/',[Baby3Controller::class,'baby3_details']);

$router->get('/tintuc',[HomeController::class,'content']);

$router->get('/login',[HomeController::class,'login']);
$router->get('/logout',[HomeController::class,'logout']);
$router->get('/register',[HomeController::class,'register']);
$router->post('/check_register',[HomeController::class,'check_register']);

$router->POST('check_login_admin',[HomeController::class,'check_admin']);







try {
    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
    
    // Print out the value returned from the dispatched function
    echo $response;
} catch (\Phroute\Phroute\Exception\HttpException $ex) {
    echo "404 Not found!";
}