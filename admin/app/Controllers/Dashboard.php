<?php
namespace Admin\App\Controllers;

use Admin\App\Models\Categories_baby3;
use Admin\App\Models\Product_baby3;

class Dashboard{
    public function index(){
        return view('home');
    }
    public function news(){
        return view('apps-news');
    }
    public function add_products(){
        return view('apps-add-news');
    }
    public function category(){
        return view('apps-category');
    }
    public function add_category(){
        return view('apps-add-category');
    }
    public function babythree(){
        $data_products = Product_baby3::getTable(['virals_products_baby3.*','categories_name'])->
        joinTable('virals_categories_baby3','categories_id','id')->get();
        return view('baby3.apps-baby-three',compact('data_products'));
    }
    public function sucsess_new_categories(){
        echo "ok";
    }
    public function sucsess_new_post(){
        // echo "1";
    }
    public function logout(){
        session_start();
        session_destroy();
        header("location: ".BASE_URL);
    }
}