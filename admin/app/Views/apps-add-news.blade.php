 @extends('layout')

 <!-- Start right Content here -->
 <!-- ============================================================== -->
 <div class="main-content">

     <div class="page-content">
         <div class="container-fluid">

             <!-- start page title -->
             <div class="row">
                 <div class="col-12">
                     <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                         <h4 class="mb-sm-0">Create Product</h4>

                         <div class="page-title-right">
                             <ol class="breadcrumb m-0">
                                 <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                 <li class="breadcrumb-item active">Create Product</li>
                             </ol>
                         </div>

                     </div>
                 </div>
             </div>
             <!-- end page title -->

             <form action="sucsess-new-post" method="post" id="createproduct-form" autocomplete="off" class="needs-validation" novalidate>
                 <div class="row">
                     <div class="col-lg-8">
                         <div class="card">
                             <div class="card-body">
                                 <div class="mb-3">
                                     <label class="form-label" for="product-title-input">Title(h1) </label>
                                     <input type="text" class="form-control" id="product-title-input" value="" placeholder="Nhập tiêu đề tin" required name="posts_title_h1">

                                     <label class="form-label" for="product-title-input">Title Top </label>
                                     <input type="text" class="form-control" id="product-title-input" value="" placeholder="Nhập tiêu đề tin" required name="posts_title_top">

                                     <label class="form-label" for="product-title-input">Title Mid </label>
                                     <input type="text" class="form-control" id="product-title-input" value="" placeholder="Nhập tiêu đề tin" required name="posts_title_mid">

                                     <label class="form-label" for="product-title-input">Title Bot </label>
                                     <input type="text" class="form-control" id="product-title-input" value="" placeholder="Nhập tiêu đề tin" required name="posts_title_bot">

                                     
                                 </div>
                             </div>
                         </div>
                         <!-- end card -->

                         <div class="card">
                             <div class="card-header">
                                 <h5 class="card-title mb-0">Ảnh</h5>
                             </div>
                             <div class="card-body">
                                 <div class="mb-4">
                                     <h5 class="fs-14 mb-1">Product Image Top</h5>
                                     <p class="text-muted">Add Product main Image Top</p>
                                     <div class="text-center">
                                         <div class="position-relative d-inline-block">
                                             <div class="position-absolute top-100 start-100 translate-middle">
                                                 <label for="product-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select Image">
                                                     <div class="avatar-xs">
                                                         <div class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                             <i class="ri-image-fill"></i>
                                                         </div>
                                                     </div>
                                                 </label>
                                                 <input class="form-control d-none" value="" id="product-image-input" type="file" accept="image/png, image/gif, image/jpeg" name="posts_image_top">
                                             </div>
                                             <div class="avatar-lg">
                                                 <div class="avatar-title bg-light rounded">
                                                     <img src="" id="product-img" class="avatar-md h-auto" />
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>

                             </div>

    <!-- start card image bot -->
    <div class="card-body">
                                 <div class="mb-4">
                                     <h5 class="fs-14 mb-1">Product Image Mid</h5>
                                     <p class="text-muted">Add Product main Image Mid</p>
                                     <div class="text-center">
                                         <div class="position-relative d-inline-block">
                                             <div class="position-absolute top-100 start-100 translate-middle">
                                                 <label for="product-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select Image">
                                                     <div class="avatar-xs">
                                                         <div class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                             <i class="ri-image-fill"></i>
                                                         </div>
                                                     </div>
                                                 </label>
                                                 <input class="form-control d-none" value="" id="product-image-input" type="file" accept="image/png, image/gif, image/jpeg" name="posts_image_mid">
                                             </div>
                                             <div class="avatar-lg">
                                                 <div class="avatar-title bg-light rounded">
                                                     <img src="" id="product-img" class="avatar-md h-auto" />
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>

                             </div>
     <!-- end card -->

                         </div>
                         <!-- end card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="">Content Top</label>
                                    <textarea name="posts_content_top" id="" class="form-control"></textarea>

                                    <label for="">Content Mid</label>
                                    <textarea name="posts_content_mid" id="" class="form-control"></textarea>

                                    <label for="">Content Mid SP</label>
                                    <textarea name="posts_content_mid_sp" id="" class="form-control"></textarea>

                                    <label for="">Content Bot</label>
                                    <textarea name="posts_content_bot" id="" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                         <div class="card">
                             <div class="card-header">
                                 <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                                     <li class="nav-item">
                                         <a class="nav-link active" data-bs-toggle="tab" href="#addproduct-general-info" role="tab">
                                             Thông tin
                                         </a>
                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-link" data-bs-toggle="tab" href="#addproduct-metadata" role="tab">
                                             Meta Data
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                             <!-- end card header -->
                             <div class="card-body">
                                 <div class="tab-content">
                                     <div class="tab-pane active" id="addproduct-general-info" role="tabpanel">
                                         <div class="row">
                                             <div class="col-lg-6">
                                                 <div class="mb-3">
                                                     <label class="form-label" for="manufacturer-name-input">Tác giả</label>
                                                     <input type="text" class="form-control" id="manufacturer-name-input" placeholder="Enter manufacturer name">
                                                 </div>
                                                 <div class="mb-3">
                                                     <label class="form-label" for="manufacturer-name-input">Slug</label>
                                                     <input type="text" class="form-control" id="manufacturer-name-input" placeholder="Enter manufacturer name" name="posts_slug">
                                                 </div>
                                             </div>
                                             <div class="col-lg-6">
                                                 <div class="mb-3">
                                                     <label class="form-label" for="manufacturer-brand-input">Thời gian tạo</label>
                                                     <input type="date" name="posts_create_at" id="" class="form-control">
                                                 </div>
                                                 <div class="mb-3">
                                                     <label class="form-label" for="manufacturer-brand-input">Thời gian sửa</label>
                                                     <input type="date" name="posts_update_at" id="" class="form-control">
                                                 </div>
                                             </div>
                                         </div>
                                         <!-- end row -->

                                         <!-- end row -->
                                     </div>
                                     <!-- end tab-pane -->

                                     <div class="tab-pane" id="addproduct-metadata" role="tabpanel">
                                         <div class="row">
                                             <div class="col-lg-6">
                                                 <div class="mb-3">
                                                     <label class="form-label" for="meta-title-input">Meta title</label>
                                                     <input type="text" class="form-control" placeholder="Enter meta title" id="meta-title-input">
                                                 </div>
                                             </div>
                                             <!-- end col -->

                                             <div class="col-lg-6">
                                                 <div class="mb-3">
                                                     <label class="form-label" for="meta-keywords-input">Meta Keywords</label>
                                                     <input type="text" class="form-control" placeholder="Enter meta keywords" id="meta-keywords-input">
                                                 </div>
                                             </div>
                                             <!-- end col -->
                                         </div>
                                         <!-- end row -->

                                         <div>
                                             <label class="form-label" for="meta-description-input">Meta Description</label>
                                             <textarea class="form-control" id="meta-description-input" placeholder="Enter meta description" rows="3"></textarea>
                                         </div>
                                     </div>
                                     <!-- end tab pane -->
                                 </div>
                                 <!-- end tab content -->
                             </div>
                             <!-- end card body -->
                         </div>
                         <!-- end card -->
                         <div class="text-end mb-3">
                             <button type="submit" class="btn btn-success w-sm">Submit</button>
                         </div>
                     </div>
                     <!-- end col -->

                     <div class="col-lg-4">
                         <div class="card">

                             <div class="card-body">


                                 <div>
                                     <label for="choices-publish-visibility-input" class="form-label">Trạng thái</label>
                                     <select class="form-select" class="posts_status" id="choices-publish-visibility-input" data-choices data-choices-search-false>
                                         <option value="1" selected>Công Khai</option>
                                         <option value="0">Ẩn</option>
                                     </select>
                                 </div>
                             </div>
                             <!-- end card body -->
                         </div>
                         <!-- end card -->

                         <!-- end card -->

                         <div class="card">
                             <div class="card-header">
                                 <h5 class="card-title mb-0">Danh Mục Bài Viết</h5>
                             </div>
                             <div class="card-body">
                                 <p class="text-muted mb-2"> <a href="./add_category" class="float-end text-decoration-underline">Thêm mới danh mục</a>Lựa chọn danh mục</p>
                                 <select class="form-select" id="choices-category-input" name="choices-category-input" data-choices data-choices-search-false>
                                     <option value="Trending">Xu hướng</option>
                                     <option value="Entertainment">Giải trí</option>
                                     <option value="Technology">Công nghệ</option>
                                     <option value="Lifestyle">Đời sống</option>
                                     <option value="Sports">Thể thao</option>
                                     <option value="Health">Sức khỏe</option>
                                     <option value="Fashion">Thời trang</option>
                                     <option value="Gaming">Game</option>
                                     <option value="Viral Stories">Tin nóng</option>

                                 </select>
                             </div>
                             <!-- end card body -->
                         </div>
                         <!-- end card -->

                         <!-- end card -->


                         <!-- end card -->

                     </div>
                     <!-- end col -->
                 </div>
                 <!-- end row -->

             </form>

         </div>
         <!-- container-fluid -->
     </div>
     <!-- End Page-content -->

     <footer class="footer">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-sm-6">
                     <script>
                         document.write(new Date().getFullYear())
                     </script> © Velzon.
                 </div>
                 <div class="col-sm-6">
                     <div class="text-sm-end d-none d-sm-block">
                         Design & Develop by Themesbrand
                     </div>
                 </div>
             </div>
         </div>
     </footer>
 </div>
 <!-- end main content-->