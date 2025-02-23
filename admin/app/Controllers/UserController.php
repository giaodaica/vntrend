<?php 
namespace Admin\App\Controllers;

use Admin\App\Models\Users;

class UserController{
        public function index(){
            $data_users = Users::select();
            return view('users.apps-users',compact('data_users'));
        }
        public function delete($id){
            if(isset($id)){
                Users::delete($id);
                header("location: ".BASE_URL_ADMIN."users");
            }
        }
        public function edit($id){
        $data_users = Users::find($id);
        return view('users.apps-edit-users',compact('data_users'));
        }
}