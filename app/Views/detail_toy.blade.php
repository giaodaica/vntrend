@extends('layout_detail')
@section('content')
@section('title')
{{ $detail_product->name }}
@endsection
<div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row gx-lg-5">
                                        <div class="col-xl-4 col-md-8 mx-auto">
                                            <div class="product-img-slider sticky-side-div">
                                                <div class="swiper product-thumbnail-slider p-2 rounded bg-light">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <img src="{{ "/virals/admin/".$detail_product->image }}" alt="" class="img-fluid d-block" />
                                                        </div>
                                                    </div>
                                                    <div class="swiper-button-next"></div>
                                                    <div class="swiper-button-prev"></div>
                                                </div>
                                                <!-- end swiper thumbnail slide -->
                                             
                                                <!-- end swiper nav slide -->
                                            </div>
                                        </div>
                                        <!-- end col -->

                                        <div class="col-xl-8">
                                            <div class="mt-xl-0 mt-5">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <h4>Full Sleeve Sweatshirt for Men (Pink)</h4>
                                                        <div class="hstack gap-3 flex-wrap">
                                                            <div><a href="#" class="text-primary d-block">Tommy Hilfiger</a></div>
                                                            <div class="vr"></div>
                                                            <div class="text-muted">Seller : <span class="text-body fw-medium">Zoetic Fashion</span></div>
                                                            <div class="vr"></div>
                                                            <div class="text-muted">Published : <span class="text-body fw-medium">26 Mar, 2021</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div>
                                                            <a href="apps-ecommerce-add-product.html" class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="ri-pencil-fill align-bottom"></i></a>
                                                        </div>
                                                    </div>
                                                </div>

                                              

                                                <div class="row mt-4">
                                                    <div class="col-lg-3 col-sm-6">
                                                        <div class="p-2 border border-dashed rounded">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar-sm me-2">
                                                                    <div class="avatar-title rounded bg-transparent text-success fs-24">
                                                                        <i class="ri-money-dollar-circle-fill"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <p class="text-muted mb-1">Giá :</p>
                                                                    <h5 class="mb-0">{{ number_format($detail_product->price) }}</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>

                                             
                                                <!-- end row -->

                                                <div class="mt-4 text-muted">
                                                    <h5 class="fs-14">Mô tả :</h5> 
                                                    <p>{{ $detail_product->title }}</p>
                                                </div>



                                                <div class="product-content mt-5">
                                                    <h5 class="fs-14 mb-3">Chi tiết :</h5>
                                                    <nav>
                                                        <ul class="nav nav-tabs nav-tabs-custom nav-success" id="nav-tab" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" id="nav-speci-tab" data-bs-toggle="tab" href="#nav-speci" role="tab" aria-controls="nav-speci" aria-selected="true">Dặc điểm</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="nav-detail-tab" data-bs-toggle="tab" href="#nav-detail" role="tab" aria-controls="nav-detail" aria-selected="false">Giới thiệu</a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                    <div class="tab-content border border-top-0 p-4" id="nav-tabContent">
                                                        <div class="tab-pane fade show active" id="nav-speci" role="tabpanel" aria-labelledby="nav-speci-tab">
                                                            <div class="table-responsive">
                                                                <table class="table mb-0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row" style="width: 200px;">Danh Mục</th>
                                                                            <td>{{ $detail_product->categories_name }}</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="nav-detail" role="tabpanel" aria-labelledby="nav-detail-tab">
                                                            <div>
                                                                <h5 class="font-size-16 mb-3">{{ $detail_product->name }}</h5>
                                                                <p>{{ $detail_product->content }}</p>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product-content -->

                                                <div class="mt-5">
                                                    <div>
                                                        <h5 class="fs-14 mb-3">Nhận xét</h5>
                                                    </div>
                                                    <div class="row gy-4 gx-0">
                                                        <div class="col-lg-4">
                                                            <div>
                                                              
                                                                
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end col -->

                                                        <div class="col-lg-12">
                                                            <div class="ps-lg-4">
                                                                <div class="d-flex flex-wrap align-items-start gap-3">
                                                                    <h5 class="fs-14">Reviews: </h5>
                                                                </div>

                                                                <div class="me-lg-n3 pe-lg-4" data-simplebar style="max-height: 400px;">
                                                                    <ul class="list-unstyled mb-0">
                                                                        <li class="py-2">
                                                                            <div class="border border-dashed rounded p-3">
                                                                                <div class="d-flex align-items-start mb-3">
                                                                                    <div class="hstack gap-3">
                                                                                        <div class="badge rounded-pill bg-success mb-0">
                                                                                            <i class="mdi mdi-star"></i> 4.2
                                                                                        </div>
                                                                                        <div class="vr"></div>
                                                                                        <div class="flex-grow-1">
                                                                                            <p class="text-muted mb-0"> Superb sweatshirt. I loved it. It is for winter.</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="d-flex flex-grow-1 gap-2 mb-3">
                                                                                    <a href="#" class="d-block">
                                                                                        <img src="{{ BASE_URL }}assets/images/small/img-12.jpg" alt="" class="avatar-sm rounded object-fit-cover">
                                                                                    </a>
                                                                                    <a href="#" class="d-block">
                                                                                        <img src="{{ BASE_URL }}assets/images/small/img-11.jpg" alt="" class="avatar-sm rounded object-fit-cover">
                                                                                    </a>
                                                                                    <a href="#" class="d-block">
                                                                                        <img src="{{ BASE_URL }}assets/images/small/img-10.jpg" alt="" class="avatar-sm rounded object-fit-cover">
                                                                                    </a>
                                                                                </div>

                                                                                <div class="d-flex align-items-end">
                                                                                    <div class="flex-grow-1">
                                                                                        <h5 class="fs-14 mb-0">Henry</h5>
                                                                                    </div>

                                                                                    <div class="flex-shrink-0">
                                                                                        <p class="text-muted fs-13 mb-0">12 Jul, 21</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="py-2">
                                                                            <div class="border border-dashed rounded p-3">
                                                                                <div class="d-flex align-items-start mb-3">
                                                                                    <div class="hstack gap-3">
                                                                                        <div class="badge rounded-pill bg-success mb-0">
                                                                                            <i class="mdi mdi-star"></i> 4.0
                                                                                        </div>
                                                                                        <div class="vr"></div>
                                                                                        <div class="flex-grow-1">
                                                                                            <p class="text-muted mb-0"> Great at this price, Product quality and look is awesome.</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-flex align-items-end">
                                                                                    <div class="flex-grow-1">
                                                                                        <h5 class="fs-14 mb-0">Nancy</h5>
                                                                                    </div>

                                                                                    <div class="flex-shrink-0">
                                                                                        <p class="text-muted fs-13 mb-0">06 Jul, 21</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>

                                                                        <li class="py-2">
                                                                            <div class="border border-dashed rounded p-3">
                                                                                <div class="d-flex align-items-start mb-3">
                                                                                    <div class="hstack gap-3">
                                                                                        <div class="badge rounded-pill bg-success mb-0">
                                                                                            <i class="mdi mdi-star"></i> 4.2
                                                                                        </div>
                                                                                        <div class="vr"></div>
                                                                                        <div class="flex-grow-1">
                                                                                            <p class="text-muted mb-0">Good product. I am so happy.</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-flex align-items-end">
                                                                                    <div class="flex-grow-1">
                                                                                        <h5 class="fs-14 mb-0">Joseph</h5>
                                                                                    </div>

                                                                                    <div class="flex-shrink-0">
                                                                                        <p class="text-muted fs-13 mb-0">06 Jul, 21</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>

                                                                        <li class="py-2">
                                                                            <div class="border border-dashed rounded p-3">
                                                                                <div class="d-flex align-items-start mb-3">
                                                                                    <div class="hstack gap-3">
                                                                                        <div class="badge rounded-pill bg-success mb-0">
                                                                                            <i class="mdi mdi-star"></i> 4.1
                                                                                        </div>
                                                                                        <div class="vr"></div>
                                                                                        <div class="flex-grow-1">
                                                                                            <p class="text-muted mb-0">Nice Product, Good Quality.</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-flex align-items-end">
                                                                                    <div class="flex-grow-1">
                                                                                        <h5 class="fs-14 mb-0">Jimmy</h5>
                                                                                    </div>

                                                                                    <div class="flex-shrink-0">
                                                                                        <p class="text-muted fs-13 mb-0">24 Jun, 21</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                    </div>
                                                    <!-- end Ratings & Reviews -->
                                                </div>
                                                <!-- end card body -->
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
@endsection