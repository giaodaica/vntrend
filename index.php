<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/app/helpers/handler.php';
use App\Controllers\HomeController;
use Phroute\Phroute\RouteCollector;


$url = $_GET['url'] ?? '';

$router = new RouteCollector();
$router->get('/',[HomeController::class,'index']);

$router->get('/babythree',[HomeController::class,'shop']);

$router->get('/tintuc',[HomeController::class,'content']);




try {
    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
    
    // Print out the value returned from the dispatched function
    echo $response;
} catch (\Phroute\Phroute\Exception\HttpException $ex) {
    echo "404 Not found!";
}