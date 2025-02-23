<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

  <meta charset="utf-8" />
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
  <meta content="Themesbrand" name="author" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="{{ BASE_URL }}assets/images/favicon.ico">

  <!--Swiper slider css-->
  <link href="{{ BASE_URL }}assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ BASE_URL }}assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ BASE_URL }}assets1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ BASE_URL }}assets1/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ BASE_URL }}assets1/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ BASE_URL }}assets1/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ BASE_URL }}assets1/css/main.css" rel="stylesheet">

  <!-- Layout config Js -->
  <script src="{{ BASE_URL }}assets/js/layout.js"></script>
  <!-- Bootstrap Css -->
  <link href="{{ BASE_URL }}assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- Icons Css -->
  <link href="{{ BASE_URL }}assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="{{ BASE_URL }}assets/css/app.min.css" rel="stylesheet" type="text/css" />
  <!-- custom Css-->
  <link href="{{ BASE_URL }}assets/css/custom.min.css" rel="stylesheet" type="text/css" />

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example">

  <!-- Begin page -->
  <div class="layout-wrapper landing">
    <nav class="navbar navbar-expand-lg navbar-landing navbar-light fixed-top" id="navbar">
      <div class="container">
        <a class="navbar-brand" href="{{  BASE_URL  }}">
          <img src="{{ BASE_URL }}assets/images/virals-logo.png" class="card-logo card-logo-dark" alt="logo dark" height="17">
          <img src="{{ BASE_URL }}assets/images/virals-logo.png" class="card-logo card-logo-light" alt="logo light" height="17">
        </a>
        <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="mdi mdi-menu"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
            <li class="nav-item">
              <a class="nav-link active" href="#hero">Trang trủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#wallet">Wallet</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#marketplace">Sản phẩm</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#categories">Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#creators">Creators</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="babythree">Baby Three</a>
            </li>
          </ul>

         

        </div>

        <!-- Menu Content -->
         
      @isset($_SESSION['user'])
      <div class="btn-group">
          <button type="button" class="btn btn-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ $_SESSION['user'] }}
          </button>
          <div class="dropdown-menu">
            <div class="dropdown-header noti-title">
              <h5 class="font-size-13 text-muted text-truncate mn-0">Chào bạn!</h5>
            </div>
            <!-- item-->
            <a class="dropdown-item" href="#">Thông tin cá nhân</a>
            @isset($_SESSION['admin'])
            <a class="dropdown-item" href="admin">Admin</a>
            @endisset
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout">Đăng xuất</a>
          </div>
        </div>
        @else
        <div class="">
            <a href="login" class="btn btn-success">Đăng Nhập</a>
          </div>
      @endisset

      </div>
    </nav>
    <div class="bg-overlay bg-overlay-pattern"></div>
    <!-- end navbar -->

    <!-- start hero section -->
    <section class="section nft-hero" id="hero">
      <!-- <div class="bg-overlay"></div> -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-sm-10">
            <div class="text-center">
              <h1 class="display-4 fw-medium mb-4 lh-base text-white">Khám phá và nghệ thuật<span class="text-success"></span></h1>
              <!-- <p class="lead text-white-50 lh-base mb-4 pb-2">Can artwork be NFT? NFTs (non-fungible tokens) are one-of-a-kind digital assets. Given they're digital in nature, can physical works of art be turned into NFTs?.</p> -->

              <!-- <div class="hstack gap-2 justify-content-center">
                <a href="apps-nft-create.html" class="btn btn-primary">Mentor <i class="ri-arrow-right-line align-middle ms-1"></i></a>
                <a href="apps-nft-explore.html" class="btn btn-danger">Tutor<i class="ri-arrow-right-line align-middle ms-1"></i></a>
              </div> -->
            </div>
          </div><!--end col-->
        </div><!-- end row -->
      </div><!-- end container -->
    </section><!-- end hero section -->

    @yield('content')

    <!-- Start footer -->
    <footer class="custom-footer bg-dark py-5 position-relative">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mt-4">
            <div>
              <div>
                <img src="{{ BASE_URL }}assets/images/virals-logo.png" alt="logo light" height="17">
              </div>
              <!-- <div class="mt-4">
                <p>Premium Multipurpose Admin & Dashboard Template</p>
                <p>You can build any type of web application like eCommerce, CRM, CMS, Project management apps, Admin Panels, etc using Velzon.</p>
              </div> -->
            </div>
          </div>

          <div class="col-lg-7 ms-lg-auto">
            <div class="row">
              <div class="col-sm-4 mt-4">
                <h5 class="text-white mb-0">Chúng tôi</h5>
                <div class="text-muted mt-3">
                  <ul class="list-unstyled ff-secondary footer-list">
                    <li><a href="#">Telegram @giao686</a></li>
                    <!-- <li><a href="#">Gallery</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Timeline</a></li> -->
                  </ul>
                </div>
              </div>
              <div class="col-sm-4 mt-4">
                <h5 class="text-white mb-0">Coming Soon</h5>
                <div class="text-muted mt-3">
                  <ul class="list-unstyled ff-secondary footer-list">
                    <li><a href="#">Lab</a></li>
                    <li><a href="#">ASM</a></li>
                    <li><a href="#">Tutor</a></li>
                    <li><a href="#">Mentor</a></li>
                    <li><a href="#">FPL HN @giao686</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4 mt-4">
                <h5 class="text-white mb-0">Hỗ trợ</h5>
                <div class="text-muted mt-3">
                  <ul class="list-unstyled ff-secondary footer-list">
                    <li><a href="#">Zalo: 0775713230</a></li>
                    <li><a href="#">@giao686</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="row text-center text-sm-start align-items-center mt-5">
          <div class="col-sm-6">

            <div>
              <p class="copy-rights mb-0">
                <script>
                  document.write(new Date().getFullYear())
                </script> © Virals - giaodaica
              </p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="text-sm-end mt-3 mt-sm-0">
              <ul class="list-inline mb-0 footer-social-link">
                <li class="list-inline-item">
                  <a href="javascript: void(0);" class="avatar-xs d-block">
                    <div class="avatar-title rounded-circle">
                      <i class="ri-facebook-fill"></i>
                    </div>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="javascript: void(0);" class="avatar-xs d-block">
                    <div class="avatar-title rounded-circle">
                      <i class="ri-github-fill"></i>
                    </div>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="javascript: void(0);" class="avatar-xs d-block">
                    <div class="avatar-title rounded-circle">
                      <i class="ri-linkedin-fill"></i>
                    </div>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="javascript: void(0);" class="avatar-xs d-block">
                    <div class="avatar-title rounded-circle">
                      <i class="ri-google-fill"></i>
                    </div>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="javascript: void(0);" class="avatar-xs d-block">
                    <div class="avatar-title rounded-circle">
                      <i class="ri-dribbble-line"></i>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- end footer -->

    <!--start back-to-top-->
    <!-- <button onclick="topFunction()" class="btn btn-danger btn-icon landing-back-top" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button> -->
    <!--end back-to-top-->

  </div>
  <!-- end layout wrapper -->


  <!-- JAVASCRIPT -->
  <script src="{{ BASE_URL }}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ BASE_URL }}assets/libs/simplebar/simplebar.min.js"></script>
  <script src="{{ BASE_URL }}assets/libs/node-waves/waves.min.js"></script>
  <script src="{{ BASE_URL }}assets/libs/feather-icons/feather.min.js"></script>
  <script src="{{ BASE_URL }}assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
  <script src="{{ BASE_URL }}assets/js/plugins.js"></script>

  <!--Swiper slider js-->
  <script src="{{ BASE_URL }}assets/libs/swiper/swiper-bundle.min.js"></script>

  <script src="{{ BASE_URL }}assets/js/pages/nft-landing.init.js"></script>
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center bg-danger"><i class="bi bi-arrow-up-short"></i></a>



  <!-- Vendor JS Files -->
  <script src="{{ BASE_URL }}assets1/vendor/aos/aos.js"></script>
  <script src="{{ BASE_URL }}assets1/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ BASE_URL }}assets1/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ BASE_URL }}assets1/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ BASE_URL }}assets1/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="{{ BASE_URL }}assets1/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="{{ BASE_URL }}assets1/js/main.js"></script>
</body>

</html>