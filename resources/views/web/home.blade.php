<!DOCTYPE html>
<html lang="en">

<head>
    <title>Purple Buzz HTML Template with Bootstrap 5 Beta 1</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{asset('assets/img/apple-icon.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Load Require CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font CSS -->
    <link href="{{asset('assets/css/boxicon.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/templatemo.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">


    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
<!-- Header -->
<nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand h1" href="index.html">
            <i class='bx bx-buildings bx-sm text-dark'></i>
            <span class="text-dark h4">King</span> <span class="text-primary h4">Shop</span>
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
            <div class="flex-fill mx-xl-5 mb-2">
                <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                    <li class="nav-item">
                        <a class="nav-link btn-outline-primary rounded-pill px-3 {{request()->getPathInfo()=='/' ? 'active' : '' }}" href="{{route('web.home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-outline-primary rounded-pill px-3" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-outline-primary rounded-pill px-3" href="work.html">Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-outline-primary rounded-pill px-3" href="pricing.html">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-outline-primary rounded-pill px-3" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="navbar align-self-center d-flex">
                <a class="nav-link" href="#"><i class='bx bx-bell bx-sm bx-tada-hover text-primary'></i></a>
                <a class="nav-link" href="#"><i class='bx bx-cog bx-sm text-primary'></i></a>
                <a class="nav-link" href="#"><i class='bx bx-user-circle bx-sm text-primary'></i></a>
            </div>
        </div>
    </div>
</nav>
<!-- Close Header -->


<!-- Start Banner Hero -->
<div class="banner-wrapper bg-light">
    <div id="index_banner" class="banner-vertical-center-index container-fluid pt-5">

        <!-- Start slider -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">

                    <div class="py-5 row d-flex align-items-center">
                        <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                            <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-5 mx-0 px-0 light-300 typo-space-line">
                                Develop <strong>Strategies</strong> for
                                <br>your business
                            </h1>
                            <p class="banner-body text-muted py-3 mx-0 px-0">
                                Purple Buzz is a corporate HTML template with Bootstrap 5 Beta 1. This CSS template is 100% free to download provided by <a rel="nofollow" href="https://templatemo.com/page/1" target="_parent">TemplateMo</a>. Total 6 HTML pages included in this template. Icon fonts by <a rel="nofollow" href="https://boxicons.com/" target="_blank">Boxicons</a>. Photos are from <a rel="nofollow" href="https://unsplash.com/" target="_blank">Unsplash</a> and <a rel="nofollow" href="https://icons8.com/" target="_blank">Icons 8</a>.
                            </p>
                            <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="#" role="button">Get Started</a>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">

                    <div class="py-5 row d-flex align-items-center">
                        <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                            <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-3 mx-0 px-0 light-300">
                                HTML CSS Template with Bootstrap 5 Beta 1
                            </h1>
                            <p class="banner-body text-muted py-3">
                                You are not allowed to re-distribute this Purple Buzz HTML template as a downloadable ZIP file on any kind of Free CSS collection websites. This is strongly prohibited. Please contact TemplateMo for more information.
                            </p>
                            <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="#" role="button">Get Started</a>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">

                    <div class="py-5 row d-flex align-items-center">
                        <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                            <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-3 mx-0 px-0 light-300">
                                Cupidatat non proident, sunt in culpa qui officia
                            </h1>
                            <p class="banner-body text-muted py-3">
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur. Excepteur sint occaecat.
                            </p>
                            <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="#" role="button">Get Started</a>
                        </div>
                    </div>

                </div>
            </div>
            <a class="carousel-control-prev text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                <i class='bx bx-chevron-left'></i>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                <i class='bx bx-chevron-right'></i>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
        <!-- End slider -->

    </div>
</div>
<!-- End Banner Hero -->

<div class="site-wrap">
    <div class="site-section site-section-sm site-blocks-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
                    <div class="icon mr-4 align-self-start">
                        <span class="icon-truck"></span>
                    </div>
                    <div class="text">
                        <h2 class="text-uppercase">Free Shipping</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon mr-4 align-self-start">
                        <span class="icon-refresh2"></span>
                    </div>
                    <div class="text">
                        <h2 class="text-uppercase">Free Returns</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon mr-4 align-self-start">
                        <span class="icon-help"></span>
                    </div>
                    <div class="text">
                        <h2 class="text-uppercase">Customer Support</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Recent Work -->
<section class="py-5 mb-5">
    <div class="container">
        <div class="recent-work-header row text-center pb-5">
            <h2 class="col-md-6 m-auto h2 semi-bold-600 py-5">Category</h2>
        </div>
        <div class="row gy-5 g-lg-5 mb-4">

            @foreach($category as $item)
                @if(isset($item->childed[0]->products[0]))
                    <!-- Start Recent Work -->
                    <div class="col-md-4 mb-3">
                        <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                            <img class="recent-work-img card-img" src="{{url('images/'.$item->childed[0]->products[0]->image)}}" alt="Card image">
                            <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                                <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                    <h3 class="card-title light-300">{{$item->name}}</h3>
                                </div>
                            </div>
                        </a>
                    </div><!-- End Recent Work -->
                @endif
            @endforeach




        </div>
    </div>
</section>
<!-- End Recent Work -->
<!-- Start Service -->
<section class="service-wrapper py-3">
    <div class="container-fluid pb-3">
        <div class="row">
            <h2 class="h2 text-center col-12 py-5 semi-bold-600">Selling</h2>
            <div class="service-header col-2 col-lg-3 text-end light-300">
                <i class='bx bx-gift h3 mt-1'></i>
            </div>
            <div class="service-heading col-10 col-lg-9 text-start float-end light-300">
                <h2 class="h3 pb-4 typo-space-line">Products that sell a lot</h2>
            </div>
        </div>
    </div>

</section>

<section class="container overflow-hidden py-5">
    <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">

        @foreach($products as $item)
            <!-- Start Recent Work -->
            <div class="col-xl-3 col-md-4 col-sm-6 project ui branding">
                <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                    <img class="service card-img" src="{{url('images/'.$item->image)}}" alt="Card image">
                    <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="service-work-content text-left text-light">
                            <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300">{{$item->name}}</span>
                            <p class="card-text">{{\Illuminate\Support\Str::limit($item->description,50,'...') }}</p>
                        </div>
                    </div>
                </a>
            </div><!-- End Recent Work -->
        @endforeach
    </div>
</section>
<!-- End Service -->

<!-- Start View Work -->
<section class="bg-secondary">
    <div class="container py-5">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-2 col-12 text-light align-items-center">
                <i class='display-1 bx bxs-box bx-lg'></i>
            </div>
            <div class="col-lg-7 col-12 text-light pt-2">
                <h3 class="h4 light-300">Great transformations successful</h3>
                <p class="light-300">Quis ipsum suspendisse ultrices gravida.</p>
            </div>
            <div class="col-lg-3 col-12 pt-4">
                <a href="#" class="btn btn-primary rounded-pill btn-block shadow px-4 py-2">View Our Work</a>
            </div>
        </div>
    </div>
</section>
<!-- End View Work -->

<!-- Start Footer -->
<footer class="bg-secondary pt-4">
    <div class="container">
        <div class="row py-4">

            <div class="col-lg-3 col-12 align-left">
                <a class="navbar-brand" href="index.html">
                    <i class='bx bx-buildings bx-sm text-light'></i>
                    <span class="text-light h5">Purple</span> <span class="text-light h5 semi-bold-600">Buzz</span>
                </a>
                <p class="text-light my-lg-4 my-2">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut.
                </p>
                <ul class="list-inline footer-icons light-300">
                    <li class="list-inline-item m-0">
                        <a class="text-light" target="_blank" href="http://facebook.com/">
                            <i class='bx bxl-facebook-square bx-md'></i>
                        </a>
                    </li>
                    <li class="list-inline-item m-0">
                        <a class="text-light" target="_blank" href="https://www.linkedin.com/">
                            <i class='bx bxl-linkedin-square bx-md'></i>
                        </a>
                    </li>
                    <li class="list-inline-item m-0">
                        <a class="text-light" target="_blank" href="https://www.whatsapp.com/">
                            <i class='bx bxl-whatsapp-square bx-md'></i>
                        </a>
                    </li>
                    <li class="list-inline-item m-0">
                        <a class="text-light" target="_blank" href="https://www.flickr.com/">
                            <i class='bx bxl-flickr-square bx-md'></i>
                        </a>
                    </li>
                    <li class="list-inline-item m-0">
                        <a class="text-light" target="_blank" href="https://www.medium.com/">
                            <i class='bx bxl-medium-square bx-md' ></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                <h3 class="h4 pb-lg-3 text-light light-300">Our Company</h3>
                    <ul class="list-unstyled text-light light-300">
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light" href="index.html">Home</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="about.html">About Us</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="work.html">Work</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="pricing.html">Price</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="contact.html">Contact</a>
                        </li>
                    </ul>
            </div>

            <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                <h2 class="h4 pb-lg-3 text-light light-300">Our Works</h2>
                <ul class="list-unstyled text-light light-300">
                    <li class="pb-2">
                        <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Branding</a>
                    </li>
                    <li class="pb-2">
                        <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Business</a>
                    </li>
                    <li class="pb-2">
                        <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Marketing</a>
                    </li>
                    <li class="pb-2">
                        <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Social Media</a>
                    </li>
                    <li class="pb-2">
                        <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Digital Solution</a>
                    </li>
                    <li class="pb-2">
                        <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Graphic</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                <h2 class="h4 pb-lg-3 text-light light-300">For Client</h2>
                <ul class="list-unstyled text-light light-300">
                    <li class="pb-2">
                        <i class='bx-fw bx bx-phone bx-xs'></i><a class="text-decoration-none text-light py-1" href="tel:010-020-0340">010-020-0340</a>
                    </li>
                    <li class="pb-2">
                        <i class='bx-fw bx bx-mail-send bx-xs'></i><a class="text-decoration-none text-light py-1" href="mailto:info@company.com">info@company.com</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <div class="w-100 bg-primary py-3">
        <div class="container">
            <div class="row pt-2">
                <div class="col-lg-6 col-sm-12">
                    <p class="text-lg-start text-center text-light light-300">
                        © Copyright 2021 Purple Buzz Company. All Rights Reserved.
                    </p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <p class="text-lg-end text-center text-light light-300">
                        Designed by <a rel="sponsored" class="text-decoration-none text-light" href="https://templatemo.com/" target="_blank"><strong>TemplateMo</strong></a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- End Footer -->


<!-- Bootstrap -->
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<!-- Load jQuery require for isotope -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!-- Isotope -->
<script src="{{asset('assets/js/isotope.pkgd.js')}}"></script>
<!-- Page Script -->
<script>
    $(window).load(function() {
        // init Isotope
        var $projects = $('.projects').isotope({
            itemSelector: '.project',
            layoutMode: 'fitRows'
        });
        $(".filter-btn").click(function() {
            var data_filter = $(this).attr("data-filter");
            $projects.isotope({
                filter: data_filter
            });
            $(".filter-btn").removeClass("active");
            $(".filter-btn").removeClass("shadow");
            $(this).addClass("active");
            $(this).addClass("shadow");
            return false;
        });
    });
</script>
<!-- Templatemo -->
<script src="{{asset('assets/js/templatemo.js')}}"></script>
<!-- Custom -->
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>

<script src="{{asset('js/main.js')}}"></script>
</body>

</html>
