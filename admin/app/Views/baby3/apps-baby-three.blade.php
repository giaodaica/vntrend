@extends('.layout')
@section('title')
Baby Three
@endsection
<div class="main-content">

<div class="page-content">
    <!-- main-product -->

    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Products</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        
        <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Danh Sách Sản Phẩm</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div class="listjs-table" id="customerList">
                                        <div class="row g-4 mb-3">
                                            <div class="col-sm-auto d-flex gap-5">
                                                <div class="">
                                                    <a href="babythree/add_new_bb3">
                                                    <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i>Thêm mới sản phẩm</button>
                                                    </a>
                                                    <button class="btn btn-soft-danger" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                                </div>
                                                <div>
                                                    <a href="babythree/categories">
                                                    <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i>Danh Mục Sản Phẩm</button>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="d-flex justify-content-sm-end">
                                                    <div class="search-box ms-2">
                                                        <input type="text" class="form-control search" placeholder="Search...">
                                                        <i class="ri-search-line search-icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="table-responsive table-card mt-3 mb-1">
                                            <table class="table align-middle table-nowrap" id="customerTable">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th scope="col" style="width: 50px;">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                            </div>
                                                        </th>
                                                        <th class="sort" data-sort="customer_name">Tên Sản Phẩm</th>
                                                        <th class="sort" data-sort="customer_name">Danh Mục</th>
                                                        <th class="sort" data-sort="email">Giá</th>
                                                        <th class="sort" data-sort="phone">Ảnh</th>
                                                        <th class="sort" data-sort="date">Slug</th>
                                                        <th class="sort" data-sort="status">Trạng Thái</th>
                                                        <th class="sort" data-sort="action">Hành Động</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                @foreach ($data_products as $renderProduct )
                                                <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="customer_name">{{ $renderProduct->name }}</td>
                                                        <td class="customer_name">{{ $renderProduct->categories_name }}</td>
                                                        <td class="email">{{ $renderProduct->price }}</td>
                                                        <td class="phone"><img src="{{ $renderProduct->image }}" alt="" width="100"></td>
                                                        <td class="date">{{ $renderProduct->slug }}</td>
                                                        <td class="status"><span class="badge bg-success-subtle text-success text-uppercase">{{ $renderProduct->status == 1 ? "Còn hàng" : "Hết hàng" }}</span></td>
                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                <div class="edit">
                                                                    <a href="{{ BASE_URL_ADMIN."babythree/edit/".$renderProduct->id }}">
                                                                    <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-edit-2-fill"></i></button>
                                                                    </a>
                                                                </div>
                                                                <div class="remove">
                                                                   <form action="{{ BASE_URL_ADMIN."babythree/delete/".$renderProduct->id }}" method="post">
                                                                   <button onclick="return confirm('Bạn muốn xóa sản phẩm này?')" class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"> <i class="ri-delete-bin-fill"></i></button>
                                                                </form>
                                                                </div>
                                                                <div class="detail">
                                                                  <a href="{{ BASE_URL_ADMIN."babythree/detail/".$renderProduct->id }}">  <button class="btn btn-sm btn-info remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Chi tiết</button></a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            <div class="noresult" style="display: none">
                                                <div class="text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                                    <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any orders for you search.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end">
                                            <div class="pagination-wrap hstack gap-2">
                                                <a class="page-item pagination-prev disabled" href="javascript:void(0);">
                                                    Previous
                                                </a>
                                                <ul class="pagination listjs-pagination mb-0"></ul>
                                                <a class="page-item pagination-next" href="javascript:void(0);">
                                                    Next
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end col -->
                    </div>

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