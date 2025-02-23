@extends('layout')
<link href="assets/img/portfolio/lekhe.png" rel="icon">
@section('namepage')
Baby Three
@endsection

@section('title')
Cửa Hàng
@endsection
@section('title-content')

@endsection

@section('content-text')

@endsection

@section('content')
<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Baby Three</h2>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                @foreach ($detail_categories as $render_data )
                <li data-filter=".{{ $render_data->class_filter }}">{{ $render_data->categories_name }}</li>
                @endforeach
            </ul><!-- End Portfolio Filters -->

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            @foreach ($data_product as $render_data_prd )
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item {{ $render_data_prd->class_filter }}">
                    <div class="portfolio-content h-100">
                        <a href="{{ 'admin/'.$render_data_prd->image }}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ 'admin/'.$render_data_prd->image }}" class="img-fluid" alt="" ></a>
                        <div class="portfolio-info">
                            <h4><a href="{{ 'babythree/'.$render_data_prd->slug }}" title="More Details">{{ $render_data_prd->name }}</a>({{ $render_data_prd->status == 1 ? "Còn Hàng" : "Hết Hàng" }})</h4> 
                            <p>{{ $render_data_prd->title }}</p>
                            
                            <strong>{{ number_format($render_data_prd->price).' Đ' }}</strong>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->
            @endforeach
            </div><!-- End Portfolio Container -->

        </div>

    </div>

</section><!-- /Portfolio Section -->
@endsection