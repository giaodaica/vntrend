@extends('layout')
<div class="main-content">

<div class="page-content">
    <!-- main-product -->

    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Danh Mục</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                            <li class="breadcrumb-item active">Danh Mục</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex mb-3">
                            <div class="flex-grow-1">
                                <h5 class="fs-16">Bộ Lọc</h5>
                            </div>
                            <div class="flex-shrink-0">
                                <a href="#" class="text-decoration-underline" id="clearall">Clear All</a>
                            </div>
                        </div>

                        <div class="filter-choices-input">
                            <input class="form-control" data-choices data-choices-removeItem type="text" id="filter-choices-input" value="Tin Thể Thao" />
                        </div>
                    </div>

                    <div class="accordion accordion-flush filter-accordion">

                        <div class="card-body border-bottom">
                            <div>
                                <p class="text-muted text-uppercase fs-12 fw-medium mb-2">Danh Mục</p>
                                <ul class="list-unstyled mb-0 filter-list">
                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Thể Thao</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Thời tiết</h5>
                                            </div>
                                            <div class="flex-shrink-0 ms-2">
                                                <span class="badge bg-light text-muted">5</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Thời sự</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Công nghệ</h5>
                                            </div>
                                            <div class="flex-shrink-0 ms-2">
                                                <span class="badge bg-light text-muted">5</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Đời sống</h5>
                                            </div>
                                            <div class="flex-shrink-0 ms-2">
                                                <span class="badge bg-light text-muted">6</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->

            <div class="col-xl-9 col-lg-8">
                <div>
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="row g-4">
                                <div class="col-sm-auto">
                                    <div>
                                        <a href="new-categories" class="btn btn-success" id="addproduct-btn"><i class="ri-add-line align-bottom me-1"></i> Thêm Danh Mục</a>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="d-flex justify-content-sm-end">
                                        <div class="search-box ms-2">
                                            <input type="text" class="form-control" id="searchProductList" placeholder="Search Danh Mục...">
                                            <i class="ri-search-line search-icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active fw-semibold" data-bs-toggle="tab" href="#productnav-all" role="tab">
                                                All <span class="badge bg-danger-subtle text-danger align-middle rounded-pill ms-1">12</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#productnav-published" role="tab">
                                                Published <span class="badge bg-danger-subtle text-danger align-middle rounded-pill ms-1">5</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#productnav-draft" role="tab">
                                                Draft
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-auto">
                                    <div id="selection-element">
                                        <div class="my-n1 d-flex align-items-center text-muted">
                                            Select <div id="select-content" class="text-body fw-semibold px-1"></div> Result <button type="button" class="btn btn-link link-danger p-0 ms-3" data-bs-toggle="modal" data-bs-target="#removeItemModal">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card header -->
                        <div class="card-body">

                            <div class="tab-content text-muted">
                                <div class="tab-pane active" id="productnav-all" role="tabpanel">
                                    <div id="table-product-list-all" class="table-card gridjs-border-none"></div>
                                </div>
                                <!-- end tab pane -->

                                <div class="tab-pane" id="productnav-published" role="tabpanel">
                                    <div id="table-product-list-published" class="table-card gridjs-border-none"></div>
                                </div>
                                <!-- end tab pane -->

                                <div class="tab-pane" id="productnav-draft" role="tabpanel">
                                    <div class="py-4 text-center">
                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:72px;height:72px">
                                        </lord-icon>
                                        <h5 class="mt-4">Sorry! No Result Found</h5>
                                    </div>
                                </div>
                                <!-- end tab pane -->
                            </div>
                            <!-- end tab content -->

                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

    </div>
    <!-- end-menu -->
    <!-- container-fluid -->
</div>
<!-- End Page-content -->

<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © Velzon.
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