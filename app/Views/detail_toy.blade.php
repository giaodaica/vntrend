@extends('layout_detail')
<link href="/virals/assets/img/portfolio/lekhe.png" rel="icon">
@section('namepage')
Baby Three / {{ $detail_product->name }}

@endsection

@section('title')
Cửa Hàng
@endsection
@section('title-content')

@endsection

@section('content-text')

@endsection

@section('content')
   <!-- Portfolio Details Section -->
   <section id="portfolio-details" class="portfolio-details section">

<div class="container" data-aos="fade-up">

  <div class="portfolio-details-slider swiper init-swiper">
    <script type="application/json" class="swiper-config">
      {
        "loop": true,
        "speed": 600,
        "autoplay": {
          "delay": 5000
        },
        "slidesPerView": "auto",
        "navigation": {
          "nextEl": ".swiper-button-next",
          "prevEl": ".swiper-button-prev"
        },
        "pagination": {
          "el": ".swiper-pagination",
          "type": "bullets",
          "clickable": true
        }
      }
    </script>
    <div class="swiper-wrapper align-items-center">

      <div class="swiper-slide">
  
      <img src="{{ '/virals/admin/'.$detail_product->image }}" alt="">
    
      </div>

  

    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-pagination"></div>
  </div>

  <div class="row justify-content-between gy-4 mt-4">

    <div class="col-lg-8" data-aos="fade-up">
      <div class="portfolio-description">
     
       <h2>{{ $detail_product->title }}</h2>
        <!-- <p>{{ $detail_product->content }}</p> -->
   

      </div>
    </div>

    <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
      <div class="portfolio-info">
        <h3>Chi Tiết Sản Phẩm</h3>
        <ul>
          <li><strong>Danh Mục</strong> 
          {{ $detail_product->categories_name }}
        
        </li>
          <li><strong>Giá </strong>{{ number_format($detail_product->price)." Đ" }}</li>
          <li><strong>Trạng Thái</strong>{{ $detail_product->status == 1 ? "Còn Hàng" : "Hết Hàng" }}</li>
          <li><strong>Liên Hệ</strong> <a href="#">www.example.com</a></li>
        </ul>
      </div>
    </div>

  </div>

</div>

</section><!-- /Portfolio Details Section -->
@endsection