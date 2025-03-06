<?php

namespace App\Controllers;

use App\Models\Baby3;
use App\Models\Categorybb3;
use App\Models\Users;

class HomeController
{   
   
    public function index()
    {
        $detail_categories  = Categorybb3::select();

        $data_product = Baby3::getTable(['virals_products_baby3.*', 'categories_name,class_filter'])
        ->joinTable('virals_categories_baby3', 'categories_id', 'id')->limit(8,0)->get();
        return view('home', compact('data_product', 'detail_categories'));

        // db($data_product);
    }
    public function shop()
    {
        $detail_categories  = Categorybb3::select();

        $data_product = Baby3::getTable(['virals_products_baby3.*', 'categories_name,class_filter'])
        ->joinTable('virals_categories_baby3', 'categories_id', 'id')->limit(8,0)->get();
        return view('baby3', compact('data_product', 'detail_categories'));
    }
    public function content()
    {
        return view('content');
    }
    public function er404(){
        return view('404');
    }
    public function login()
    {
        if(isset($_SESSION['user'])){
            header("location: ".BASE_URL);
        }
        return view('login_admin');
    }
    public function register()
    {
        if(isset($_SESSION['user'])){
            header("location: ".BASE_URL);

        }
        return view('register');
    }
    public function check_admin()
    {
        $data = $_POST;
        $email = $data['users_email'];
        $password = $data['users_password'];

        if (trim($email) == "") {
            $error['email'] = "Địa chỉ email không được để trống";
        }
        if (trim($password) == "") {
            $error['password'] = "Mật khẩu không được để trống";
        }
        if (isset($error)) {
            return view('login_admin', compact('error'));
        }
        $check_login = Users::where('users_email', '=', $email)->first();

        if ($check_login) {
            $pass = password_verify($password, $check_login->users_password);
            if ($pass) {
                switch ($check_login->users_status) {
                    case 0:
                        $_SESSION['admin'] = "success";
                        $_SESSION['user'] = $check_login->users_email;
                        header("location: " . BASE_URL);
                        break;
                    case 4:
                        $_SESSION['user'] = $check_login->users_email;
                        header("location: " . BASE_URL);
                        break;
                }
            }else{
            $error['msg'] = "Địa chỉ email hoặc mật khẩu không chính xác";
            return view('login_admin', compact('error'));
            }
        } else {
            $error['msg'] = "Địa chỉ email hoặc mật khẩu không chính xác";
            return view('login_admin', compact('error'));
        }
    }
    public function check_register()
    {
        // print_r($_POST);
        // die;
        $data = $_POST;
        $email = $data['users_email'];
        $password = $data['users_password'];
        $check_duplicate_email = Users::where('users_email', '=', $email)->first();
        if ($check_duplicate_email) {
            $error['email'] = "Địa chỉ email đã tồn tại vui lòng chọn địa chỉ khác";
        }
        if ($email == "") {
            $error['email'] = "Địa chỉ email không được bỏ trống";
        }
        if ($password == "") {
            $error['password'] = "Mật khẩu không được bỏ trống";
        }
        if (strlen($password) < 7) {
            $error['password'] = "Mật khẩu phải chứa 6 kí tự trở lên";
        }
        if(!preg_match("/\d/",$password)){
            $error['password'] = "Mật khẩu phải chứa 1 số từ 0-9";
        }
        if(!preg_match('/[A-Z]/',$password)){
            $error['password'] = "Mật khẩu phải chứa 1 ký tự viết hoa";
        }
        if (isset($error)) {
            return view('register', compact('error'));
        }
        if (!isset($error)) {
            $data['users_password'] = password_hash($password, PASSWORD_DEFAULT);
            Users::create($data);
            return view('success');
            
        }
    }
    public function logout()
    {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
            header("location: login");
        }
    }
}
