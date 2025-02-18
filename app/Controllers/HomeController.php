<?php
    namespace App\Controllers;

use App\Models\Baby3;
use App\Models\Categorybb3;
use App\Models\Users;

    class HomeController{
        public function index(){
            return view('home');
        }
        public function shop()  {
        $detail_categories  = Categorybb3::select();

            $data_product = Baby3::getTable(['virals_products_baby3.*','categories_name,class_filter'])->
            joinTable('virals_categories_baby3','categories_id','categories_id')->get();
            // db($data_product);
            return view('baby3',compact('data_product','detail_categories'));
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
        $key_limited = $_POST['keylimited'];
        $check_login = (Users::where('users_email','=',$email))->andwhere('key_limit','=',$key_limited)->
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