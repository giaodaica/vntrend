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

    <form action="post-new-categories" method="post" id="create-category-form" autocomplete="off" class="needs-validation" novalidate>
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="category-name-input">Tên danh mục</label>
                            <input type="text" class="form-control" id="category-name-input" placeholder="Nhập tên danh mục" required name="categories_post">
                        </div>
                    </div>
                </div>
                <!-- end card -->

                <div class="text-end mb-3">
                    <button type="submit" class="btn btn-success w-sm">Thêm danh mục</button>
                </div>
            </div>
            <!-- end col -->
            </form>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <label for="category-status-input" class="form-label">Danh Mục Hiện Tại</label>
                            
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