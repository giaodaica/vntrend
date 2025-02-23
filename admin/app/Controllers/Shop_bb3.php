<?php

namespace Admin\App\Controllers;

use Admin\App\Models\Categories_baby3;
use Admin\App\Models\Product_baby3;

class Shop_bb3
{
    public function handerCreate()
    {
        $data_categories_bb3 = Categories_baby3::select();
        return view('baby3.apps-add-baby-three', compact('data_categories_bb3'));
    }
    public function handerPostCreate()
    {
        $data = $_POST;
        $data_categories_bb3 = Categories_baby3::select();
        // dd($data);
        $name = trim($data['name']);
        $price = trim($data['price']);
        $title = trim($data['title']);
        $slug = trim($data['slug']);
        $status = $data['status'];
        $content = trim($data['content']);
        $categories_id = $data['categories_id'];
        if ($name == "") {
            $error['name'] = "Tên sản phẩm không được để trống";
        }
        if ($price == "") {
            $error['price'] = "Giá sản phẩm không được để trống";
        }
        if ($title == "") {
            $error['title'] = "Tiêu đề sản phẩm không được để trống";
        }
        if ($slug == "") {
            $error['slug'] = "Đường dẫn phẩm không được để trống";
        }
        if ($status == "") {
            $error['status'] = "Trạng thái sản phẩm không được để trống";
        }
        if ($content == "") {
            $error['content'] = "Mô tả sản phẩm không được để trống";
        }
        if ($categories_id == "") {
            $error['categories_id'] = "Danh mục sản phẩm không được để trống";
        }
        $image = ""; // trường hợp người dùng k nhập ảnh
        // xử lí ảnh
        $file = $_FILES['image'];
        if ($file['size'] > 0) {
            $image = "img/" . $file['name'];
            move_uploaded_file($file['tmp_name'], $image);
        }
        //Đưa thuộc tính image vào data 
        $data['image'] = $image;
        if (!$error) {
            Product_baby3::create($data);
        } else {
            // dd($error);
            return view('baby3.apps-add-baby-three', compact('data', 'error', 'data_categories_bb3'));
        }
        echo "<script>
       alert('Thêm thành công');
       window.location.href = '" . BASE_URL_ADMIN . "babythree" . "';
       </script>";
    }
    public function detail_product_bb3($id)
    {
        $data_product_bb3 = Product_baby3::getTable(['virals_products_baby3.*', 'categories_name'])->joinTable('virals_categories_baby3', 'categories_id', 'id')
            ->andWhere('virals_products_baby3.id', '=', $id)->first();
        // dd($data_product_bb3);
        return view('baby3.apps-detail-baby-three', compact('data_product_bb3'));
    }
    public function delete_product_bb3($id)
    {
        if (isset($id)) {
            Product_baby3::delete($id);
            header("location: " . BASE_URL_ADMIN . "babythree");
        }
    }
    public function edit_product_bb3($id)
    {
        $data_categories_bb3 = Categories_baby3::select();
        $data_product_bb3 = Product_baby3::getTable(['virals_products_baby3.*', 'categories_name'])->joinTable('virals_categories_baby3', 'categories_id', 'id')->andWhere('virals_products_baby3.id', '=', $id)->first();
        return view('baby3.apps-edit-baby-three', compact('data_categories_bb3', 'data_product_bb3'));
    }
    public function sucsess_edit_product_bb3($id)
    {
        $data = $_POST;
        $data_categories_bb3 = Categories_baby3::select();
        $data_product_bb3 = Product_baby3::getTable(['virals_products_baby3.*', 'categories_name'])->joinTable('virals_categories_baby3', 'categories_id', 'id')->andWhere('virals_products_baby3.id', '=', $id)->first();
        // dd($data);
        $name = trim($data['name']);
        $price = trim($data['price']);
        $title = trim($data['title']);
        $slug = trim($data['slug']);
        $status = $data['status'];
        $content = trim($data['content']);
        $categories_id = $data['id'];
        if ($name == "") {
            $error['name'] = "Tên sản phẩm không được để trống";
        }
        if ($price == "") {
            $error['price'] = "Giá sản phẩm không được để trống";
        }
        if ($title == "") {
            $error['title'] = "Tiêu đề sản phẩm không được để trống";
        }
        if ($slug == "") {
            $error['slug'] = "Đường dẫn phẩm không được để trống";
        }
        if ($status == "") {
            $error['status'] = "Trạng thái sản phẩm không được để trống";
        }
        if ($content == "") {
            $error['content'] = "Mô tả sản phẩm không được để trống";
        }
        if ($categories_id == "") {
            $error['id'] = "Danh mục sản phẩm không được để trống";
        }
        $image = ""; // trường hợp người dùng k nhập ảnh
        // xử lí ảnh
        $data_image = Product_baby3::find($id);
        $file = $_FILES['image'];
        if (!isset($_FILES['image']) || $_FILES['image']['error'] !== UPLOAD_ERR_OK) {
            $data['image'] = $data_image->image;
        } else {
            $file = $_FILES['image'];
            if ($file['size'] > 0) {
                $image = "images/" . $file['name'];
                move_uploaded_file($file['tmp_name'], $image);
            }

            $data['image'] = $image;
        }
        if (!isset($error)) {
            Product_baby3::update($data, $id);
            header("location: " . BASE_URL_ADMIN . "babythree");
        } else {
            return view('baby3.apps-edit-baby-three', compact('error', 'data_product_bb3', 'data_categories_bb3'));
        }
    }
    public function categories_babythree()
    {
        $data_categori = Categories_baby3::select();
        // dd($data_categori);
        return view('baby3.apps-category-baby-three', compact('data_categori'));
    }
    public function add_categories_babythree()
    {
        $data_categories = Categories_baby3::select();
        return view('baby3.apps-add-category-baby-three', compact('data_categories'));
    }

    public function post_new_categories()
    {
        $data = $_POST;
        // dd($data);
        $data_categories = Categories_baby3::select();
        $name = trim($_POST['categories_name']);
        $class = $data['class_filter'];
        $check_duplicate = Categories_baby3::where('categories_name', '=', $name)->first();
        $check_duplicate_ft = Categories_baby3::where('class_filter', '=', $data['class_filter'])->first();
        // dd($check_duplicate);
        if ($name == "") {
            $error['name'] = "Tên danh mục không được để trống";
        }
        if ($check_duplicate) {
            $error['name'] = "Tên danh mục đã có vui lòng chọn tên khác";
        }
        if ($class == "") {
            $error['class'] = "Lớp lọc sản phẩm không được để trống";
        }
        if ($check_duplicate_ft) {
            $error['class'] = "Lớp lọc sản phẩm không được trùng nhau";
        }
        if (!isset($error)) {
            Categories_baby3::create($data);
            header("location: " . BASE_URL_ADMIN . "babythree/categories");
        } else {
            return view('baby3.apps-add-category-baby-three', compact('error', 'data_categories'));
        }
    }
    public function delete_categories($id)
    {
        if (isset($id)) {
            Categories_baby3::delete($id);
            header('location: ' . BASE_URL_ADMIN . "babythree/categories");
        }
    }
    public function edit_categories($id){
        $data_categories = Categories_baby3::select();
        $data_categories_id = Categories_baby3::find($id);
        return view('baby3.apps-edit-category-baby-three',compact('data_categories_id','data_categories'));
    }
    public function post_edit_categories($id){
        $data = $_POST;
        // dd($data);
        $data_old = Categories_baby3::find($id);
        $name_cat_old = $data_old->categories_name;
        $data_categories = Categories_baby3::select();
        $data_categories_id = Categories_baby3::find($id);
        $name = trim($_POST['categories_name']);
        $class = $data['class_filter'];
        $check_duplicate = Categories_baby3::where('categories_name', '=', $name)->first();
        $check_duplicate_ft = Categories_baby3::where('class_filter', '=', $data['class_filter'])->first();
        // dd($check_duplicate);
        if ($name == "") {
            $error['name'] = "Tên danh mục không được để trống";
        }
        if ($name_cat_old == $data['categories_name']) {
            $data['categories_name'] == $name_cat_old;
        }else if($check_duplicate){
            $data['categories_name'] = $_POST['categories_name'];
            $error['name'] = "Tên danh mục đã có vui lòng chọn tên khác";
        }
        if ($class == "") {
            $error['class'] = "Lớp lọc sản phẩm không được để trống";
        }

        if ($data_old->class_filter == $data['class_filter']) {
            $data['class_filter'] == $data_old->class_filter;
        }else if($check_duplicate_ft){
            $data['class_filter'] = $_POST['class_filter'];
            $error['class'] = "Bộ lọc sản phẩm không được trùng nhau";
        }

        if (!isset($error)) {
            Categories_baby3::update($data,$id);
            header("location: " . BASE_URL_ADMIN . "babythree/categories");
        } else {
            return view('baby3.apps-edit-category-baby-three', compact('error', 'data_categories','data_categories_id'));
        }
    }
}
