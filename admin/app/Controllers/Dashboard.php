<?php
namespace Admin\App\Controllers;
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
        return view('apps-baby-three');
    }
    public function sucsess_new_categories(){
        echo "ok";
    }
    public function logout(){
        session_start();
        session_destroy();
        header("location: ".BASE_URL);
    }
}