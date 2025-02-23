<?php

session_start();

use Admin\App\Controllers\Dashboard;
use Admin\App\Controllers\Shop_bb3;
use Admin\App\Controllers\UserController;
use Phroute\Phroute\RouteCollector;

require_once __DIR__."/vendor/autoload.php";
require_once __DIR__."/app/helpers/handler.php";
require_once __DIR__."/../commons/env.php";
require_once __DIR__."/../commons/function.php";

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

$router->get('babythree/add_new_bb3',[Shop_bb3::class,'handerCreate']);
$router->POST('babythree/sucsess-new-product-bb3',[Shop_bb3::class,'handerPostCreate']);
$router->get('babythree/detail/{id}',[Shop_bb3::class,'detail_product_bb3']);
$router->post('babythree/delete/{id}',[Shop_bb3::class,'delete_product_bb3']);
$router->get('babythree/edit/{id}',[Shop_bb3::class,'edit_product_bb3']);
$router->post('babythree/sucsess-edit-product-bb3/{id}',[Shop_bb3::class,'sucsess_edit_product_bb3']);
$router->get('babythree/categories/',[Shop_bb3::class,'categories_babythree']);
$router->get('babythree/categories/add_new_cate_bb3',[Shop_bb3::class,'add_categories_babythree']);
$router->post('babythree/categories/post-new-categories',[Shop_bb3::class,'post_new_categories']);
$router->post('babythree/categories/delete/{id}',[Shop_bb3::class,'delete_categories']);
$router->get('babythree/categories/edit/{id}',[Shop_bb3::class,'edit_categories']);
$router->post('babythree/categories/post-edit-categories/{id}',[Shop_bb3::class,'post_edit_categories']);

$router->get('users',[UserController::class,'index']);
$router->post('users/delete/{id}',[UserController::class,'delete']);
$router->get('users/edit/{id}',[UserController::class,'edit']);





try {
    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
    
    // Print out the value returned from the dispatched function
    echo $response;
} catch (\Phroute\Phroute\Exception\HttpException $ex) {
    echo "404 Not found!";
}