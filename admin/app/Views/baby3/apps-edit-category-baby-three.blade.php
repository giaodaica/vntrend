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
                <h4 class="mb-sm-0">Thêm danh mục tin</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <form action="{{ BASE_URL_ADMIN }}babythree/categories/post-edit-categories/{{ $data_categories_id->id }}" method="post" id="create-category-form" autocomplete="off" class="needs-validation" novalidate>
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="category-name-input">Tên danh mục</label>
                            <input type="text" value="{{ $data_categories_id->categories_name }}" class="form-control" name="categories_name" id="category-name-input" placeholder="Nhập tên danh mục" required >
                            @isset($error)
                            <p class="text-danger">{{ $error['name'] }}</p>
                            @endisset
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="category-name-input">Class Filter</label>
                            <input type="text" value="{{ $data_categories_id->class_filter }}" class="form-control" name="class_filter" id="category-name-input" placeholder="Nhập tên class" required >
                            @isset($error)
                            <p class="text-danger">{{ $error['class'] }}</p>
                            @endisset
                        </div>
                    </div>
                </div>
                <!-- end card -->

                <div class="text-end mb-3">
                    <button type="submit" class="btn btn-success w-sm">Sửa Danh Mục</button>
                </div>
            </div>
            <!-- end col -->
            </form>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <label for="category-status-input" class="form-label">Danh Mục Hiện Tại</label>
                            <ul class="list-unstyled mb-0 filter-list">
                                    @foreach ($data_categories as $renderCate )
                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">{{ $renderCate->categories_name }}</h5>
                                            </div>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                        </div>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
  
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