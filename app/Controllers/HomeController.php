<?php
    namespace App\Controllers;

use App\Models\Users;

    class HomeController{
        public function index(){
            return view('home');
        }
        public function shop()  {
            return view('baby3');
        }
        public function content()  {
            return view('content');
        }
        public function login_admin(){
            return view('login_admin');
        }
        public function check_admin(){
        session_start();
        $email = trim(strtolower($_POST['email']));
        $password = trim($_POST['password']);
        $check_login = (Users::where('users_email','=',$email))->
        andwhere('users_password','=',$password)->
        andwhere('users_status', '=','0')->
        get();
        if($check_login){
            $_SESSION['admin'] = "success";
            header("location: ".BASE_URL_ADMIN);
        }else{
            echo "error";
        }
        
        }
      
    }