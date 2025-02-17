<?php
namespace Admin\App\Controllers;

use Admin\App\Models\Categories_baby3;
use Admin\App\Models\Product_baby3;

class Shop_bb3{
    public function handerCreate(){
        $data_categories_bb3 = Categories_baby3::select();
        return view('baby3.apps-add-baby-three',compact('data_categories_bb3'));
    }
    public function handerPostCreate(){
        $data = $_POST;

        $image = ""; // trường hợp người dùng k nhập ảnh
        // xử lí ảnh
        $file = $_FILES['image'];
        if($file['size']>0){
            $image = "img/" .$file['name'];  
            move_uploaded_file($file['tmp_name'],$image);
        }
        //Đưa thuộc tính image vào data 
        $data['image'] = $image;
        $data['content'] = "Chưa có";
       Product_baby3::create($data);
       echo "<script>alert('Thêm thành công');
       </script>";
      
    
    }
}