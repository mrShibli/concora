<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/png" href="{{ asset('frontend/images/favicon.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Conqueror Services LLC &#8211; Food Delivery Services </title>

    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:description"
        content="{{ $pageDescription ?? 'Conqueror Services LLC | Food Delivery Services | UAE | KSA | Bahrain | Qatar' }}">
    <meta property="og:image" content="{{ asset('logoicon.png') }}">

    <!--Favicon-->
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Line Awesome CSS -->
    <link href="{{ asset('assets/css/line-awesome.min.css') }}" rel="stylesheet">
    <!-- Animate CSS-->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <!-- Bar Filler CSS -->
    <link href="{{ asset('assets/css/barfiller.css') }}" rel="stylesheet">
    <!-- Magnific Popup Video -->
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
    <!-- Flaticon CSS -->
    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">
    <!-- Slick CSS -->
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet">
    <!-- Nice Select CSS -->
    <link href="{{ asset('assets/css/nice-select.css') }}" rel="stylesheet">
    <!-- Odometer CSS -->
    <link href="{{ asset('assets/css/odometer.min.css') }}" rel="stylesheet">
    <!-- Style CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

    <!-- jquery -->
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>

    <style>
        .main-menu .navbar-nav .nav-link {
            color: #E46628;
        }

        .main-menu .navbar-nav .nav-item .nav-link.active {
            color: #E46628;
        }

        .contact-info a {
            color: #fff;
            text-decoration: none;
            font-weight: 400;
        }
    </style>
    @yield('styles')
</head>

<body>
    <!-- Pre-Loader -->
    <div class="preloader"></div>



    <!-- Header Top Area -->

    <div class="header-top dark-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-12 col-xs-12">
                    <div class="contact-info">

                        <a href="https://www.google.com/maps?client=safari&channel=iphone_bm&sca_esv=14ed951b5469336e&sca_upv=1&cs=0&lsig=AB86z5V4-2PXMOk4bHkqGtE8wT1l&kgs=6d029adbeddd34bd&shndl=-1&shem=lsde,lsp&um=1&ie=UTF-8&fb=1&gl=bd&sa=X&geocode=KdPFnRR-XV8-MdQIh9Y6he5Z&daddr=City+Pharmacy+Building,+M02,+Port+Saeed+-+Al+Khabaisi+-+Dubai+-+United+Arab+Emirates"
                            target="_blank"><i class="las la-map-marker"></i></a>
                        <p><a href="https://www.google.com/maps?client=safari&channel=iphone_bm&sca_esv=14ed951b5469336e&sca_upv=1&cs=0&lsig=AB86z5V4-2PXMOk4bHkqGtE8wT1l&kgs=6d029adbeddd34bd&shndl=-1&shem=lsde,lsp&um=1&ie=UTF-8&fb=1&gl=bd&sa=X&geocode=KdPFnRR-XV8-MdQIh9Y6he5Z&daddr=City+Pharmacy+Building,+M02,+Port+Saeed+-+Al+Khabaisi+-+Dubai+-+United+Arab+Emirates"
                                target="_blank">City
                                Pharmacy Bld, Port Saeed, Dubai</a></p>
                        <i class="las la-envelope"></i>
                        <p><a href="mailto:info@conquerorservices.com">info@conquerorservices.com</a></p>
                        <i class="las la-clock"></i>
                        <p>Working Hour: 09:30 AM - 07:30 PM</p>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-12 col-xs-12 text-end">
                    <div class="header_top_right">
                        <div class="social-area">
                            <a href="https://facebook/com/conquerordelivery"><i class="lab la-facebook-f"></i></a>
                            <a href="http://www.youtube.com/@ConquerorServicesLLC"><i class="lab la-youtube"></i></a>
                            <a href="https://instagram/conquerorservicesllc"><i class="lab la-instagram"></i></a>
                        </div>
                        <div class="quick_link">
                            <ul>
                                <li><a href="#">News & Media</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Get Quote</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Area -->

    <div class="header-area">
        <div class="sticky-area">
            <div class="navigation">
                <div class="container-fluid">
                    <div class="header-inner-box">
                        <div class="logo">
                            <a class="navbar-brand" href="{{ route('mainindex') }}"><img
                                    src="{{ asset('assets/img/logo.png') }}" width="250" alt="experia-logo"></a>
                        </div>

                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                    <span class="navbar-toggler-icon"></span>
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse justify-content-center"
                                    id="navbarSupportedContent">
                                    <ul class="navbar-nav m-auto">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="{{ route('mainindex') }}">Home
                                                <span class="sub-nav-toggler"> </span>
                                            </a>
                                            <!-- <ul class="sub-menu">
                                                <li><a href="index.html">Home - Main</a></li>
                                                <li><a href="index-2.html">Home - Modern</a></li>
                                                <li><a href="index-3.html">Home - Classic</a></li>
                                            </ul> -->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">About us
                                                <span class="sub-nav-toggler"> </span>
                                            </a>
                                            <!-- <ul class="sub-menu">
                                                <li><a href="#">About Us</a></li>
                                                <li><a href="#">Service List</a></li>
                                                <li><a href="#">Conqueror Team</a></li>
                                                <li><a href="#">Helpful FAQ</a></li>
                                                <li><a href="#">Get Quotation</a></li>
                                                <li><a href="#">Pricing Plan</a></li>
                                            </ul> -->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Services<i class="las la-plus"></i>
                                                <span class="sub-nav-toggler"> </span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="#">Standard Food</a>
                                                </li>
                                                <li>
                                                    <a href="#">Express Food</a>
                                                </li>
                                                <li>
                                                    <a href="#">Pallet Food</a>
                                                </li>
                                                <li>
                                                    <a href="#">Over Night Food</a>
                                                </li>
                                                <li>
                                                    <a href="#">International Food</a>
                                                </li>
                                                <li>
                                                    <a href="#">Warehousing</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('career') }}">Career
                                                <span class="sub-nav-toggler"> </span>
                                            </a>
                                            <!-- <ul class="sub-menu">
                                                <li><a href="#">Projects</a>
                                                </li>
                                                <li>
                                                    <a href="#">Project Details</a>
                                                </li>
                                            </ul> -->
                                        </li>

                                        <!-- <li class="nav-item">
                                            <a class="nav-link" href="#">Blog
                                                <span class="sub-nav-toggler"> </span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Blog-Standard</a></li>
                                                <li><a href="#">Blog-Classic</a></li>
                                                <li><a href="#">Blog Details</a></li>
                                            </ul>
                                        </li> -->
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                                        </li>
                                        <li class="nav-item mobile-only">
                                            <a class="nav-link" href="https://conquerorservices.com/login">Login</a>
                                        </li>
                                        
                                        <style>
                                            /* Show the element on mobile devices */
                                            .mobile-only {
                                                display: block;
                                            }
                                        
                                            /* Hide the element on medium and larger screens (>=768px) */
                                            @media (min-width: 768px) {
                                                .mobile-only {
                                                    display: none;
                                                }
                                            }
                                        </style>
                                        

                                    </ul>
                                </div>
                            </nav>
                        </div>

                        <div class="icon-wrapper">
                            <div class="search-icon search-trigger"><img src="{{ asset('assets/img/search.png') }}"
                                    width="39" alt="">
                            </div>
                            <div class="shopping-cart">
                                <a href="{{ route('login') }}" target="_blacnk"> <img
                                        src="{{ asset('assets/img/login-icon.png') }}" width="27"
                                        alt=""> </a>
                            </div>
                        </div>

                        <style>
                            .search-icon.search-trigger {
                                margin-right: 13px;
                                margin-top: 7px;
                            }
                        </style>

                        <div class="phone-number-box">
                            <div class="icon">
                                <a href="https://wa.me/97142833787" target="_blank"><img
                                        src="{{ asset('assets/img/whatsapp.png') }}" width="48" alt="">
                                </a>

                            </div>
                            <div class="phone">
                                <p>Have any questions?</p>
                                <a href="tel:+97142837636">+97142837636</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Search Dropdown Area -->

    <div class="search-popup">
        <span class="search-back-drop"></span>

        <div class="search-inner">
            <div class="container">
                <div class="upper-text">
                    <div class="text">Search for anything.</div>
                    <button class="close-search"><span class="la la-times"></span></button>
                </div>

                <form method="post" action="index.html">
                    <div class="form-group">
                        <input type="search" name="search-field" value="" placeholder="Search..."
                            required="">
                        <button type="submit"><i class="la la-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @yield('containerupdate')

    <!-- Footer Area -->

    <footer class="footer-area">
        <div class="container">
            <div class="footer-up">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="100ms">
                        <div class="logo">
                            <img src="{{ asset('assets/img/logo-white.png') }}" width="550" alt="experia-logo">
                        </div>
                        <div class="contact-info">
                            <p><b>Location:</b> City Pharmacy Bld, Port Saeed, Dubai </p>
                            <p><b>Phone:</b>+97142837636</p>
                            <p><b>E-mail:</b> info@conquerorservices.com</p>
                            <p><b>Working Hour:</b> 09:30 AM - 07:30 PM</p>
                        </div>

                    </div>
                    <div class="col-lg-5 col-md-6 com-sm-12 wow fadeInUp animated" data-wow-delay="200ms">

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <h6>Company</h6>
                                <ul>
                                    <li>
                                        <a href="#">About Us</a>
                                        <a href="#">Meet Our Team</a>
                                        <a href="#">News & Media</a>
                                        <a href="#">Our Project</a>
                                        <a href="{{ route('contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 wow fadeInUp animated" data-wow-delay="300ms">
                                <h6>Services</h6>
                                <ul>
                                    <li>
                                        <a href="#">Standard Food</a>
                                        <a href="#">Express Food</a>
                                        <a href="#">Over Night Food</a>
                                        <a href="#">Pallet Food</a>
                                        <a href="#">International Food</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp animated" data-wow-delay="400ms">
                        <div class="subscribe-form">
                            <h6>Newsletter</h6>
                            <form action="index.html">
                                <input type="email" placeholder="Your email">
                                <button type="submit"><i class="las la-envelope"></i></button>
                            </form>
                            <p>Stay tuned for our latest news</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer Bottom Area  -->

    <div class="footer-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-12">
                    <p class="copyright-line">© 2024 Conqueror Services LLC . All rights reserved.</p>
                </div>
                <div class="col-xl-6 col-lg-5 col-12">
                    <p class="privacy"><a href="{{ route('terms.and.conditions') }}">Terms &amp; Conditions</a> <a
                            href="{{ route('privacy.policy') }}">Privacy
                            Policy</a> </p>
                </div>
                <div class="col-xl-3 col-lg-3 col-12 text-end">
                    <div class="social-area">
                        <a href="https://facebook/com/conquerordelivery"><i class="lab la-facebook-f"></i></a>
                        <a href="http://www.youtube.com/@ConquerorServicesLLC"><i class="lab la-youtube"></i></a>
                        <a href="https://instagram/conquerorservicesllc"><i class="lab la-instagram"></i></a>
                        <a href="https://wa.me/97142833787"><i class="lab la-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Top Area -->
    <a href="#top" class="go-top"><i class="las la-angle-up"></i></a>

    <!-- Popper JS -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Wow JS -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- Way Points JS -->
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <!-- Counter Up JS -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- Slick JS -->
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <!-- Nice Select  -->
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <!-- Sticky JS -->
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <!-- Appear JS -->
    <script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
    <!-- Odometer JS -->
    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
    <!-- Progress Bar JS -->
    <script src="{{ asset('assets/js/jquery.barfiller.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @yield('scripts')
</body>

</html>
