<?php
    namespace App\Controllers;
    class HomeController{
        public function index(){
            return view('home');
        }
        public function shop()  {
            return view('baby3');
        }
    }