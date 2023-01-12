<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from zcube.in/xevsoft/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jan 2023 12:48:09 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ISAGE/K-B</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('fronts/img/logo-isage.ico') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('fronts/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fronts/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fronts/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('fronts/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fronts/font-flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('fronts/css/dripicons.css') }}">
    <link rel="stylesheet" href="{{ asset('fronts/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('fronts/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('fronts/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('fronts/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fronts/css/responsive.css') }}">
</head>

<body>
    <!-- header -->
    <header class="header-area header-three">
        <div id="header-sticky" class="menu-area">
            <div class="container">
                <div class="second-menu">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="index.html"><img src="{{ asset('fronts/img/logo/f_logo1.png') }}"
                                        alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">

                            <div class="main-menu text-center text-xl-right">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-sub">
                                            <a href="index.html">Home</a>
                                            <ul>
                                                <li><a href="index.html">Home Page 01</a></li>
                                                <li><a href="index-2.html">Home Page 02</a></li>
                                                <li><a href="index-3.html">Home Page 03</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">About Us</a></li>

                                        <li class="has-sub">
                                            <a href="services.html">Services</a>
                                            <ul>
                                                <li> <a href="services.html">Services</a></li>
                                                <li> <a href="single-service.html">Services Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-sub"><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="projects.html">Gallery</a></li>
                                                <li><a href="pricing.html">Pricing</a></li>
                                                <li><a href="faq.html">Faq</a></li>
                                                <li><a href="team.html">Team</a></li>
                                                <li><a href="team-single.html">Team Details</a></li>
                                                <li><a href="shop.html">Shop</a></li>
                                                <li><a href="shop-details.html">Shop Details</a>
                                            </ul>
                                        </li>
                                        <li class="has-sub">
                                            <a href="blog.html">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>


                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div
                            class="col-xl-3 col-lg-3 text-right d-none d-lg-block mt-25 mb-25 text-right text-xl-right">
                            <div class="login">
                                <ul>
                                    <li><a href="#" class="menu-tigger"><i class="fal fa-search"></i></a></li>
                                    <li>
                                        <div class="second-header-btn">
                                            <a href="contact.html" class="btn">Get Started</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- offcanvas -->
        <div class="offcanvas-menu">
            <span class="menu-close"><i class="fas fa-times"></i></span>
            <form role="search" method="get" id="searchform" class="searchform"
                action="http://wordpress.zcube.in/xconsulta/">
                <input type="text" name="s" id="search" value="" placeholder="Search" />
                <button><i class="fa fa-search"></i></button>
            </form>

            <div id="cssmenu2" class="menu-one-page-menu-container">
                <ul id="menu-one-page-menu-1" class="menu">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#home"><span>+8 12
                                3456897</span></a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom"><a
                            href="#howitwork"><span>info@example.com</span></a></li>
                </ul>
            </div>
        </div>
        <div class="offcanvas-overly"></div>
        <!-- offcanvas-end -->
    </header>
    <!-- header-end -->
    <!-- main-area -->
    <main>
        @yield('content')
    </main>
    <!-- main-area-end -->

    <!-- footer -->
    @livewire('pages.footers')
    <!-- footer-end -->

    <!-- JS here -->
    <script src="{{ asset('fronts/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('fronts/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('fronts/js/popper.min.js') }}"></script>
    <script src="{{ asset('fronts/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('fronts/js/slick.min.js') }}"></script>
    <script src="{{ asset('fronts/js/ajax-form.js') }}"></script>
    <script src="{{ asset('fronts/js/paroller.js') }}"></script>
    <script src="{{ asset('fronts/js/wow.min.js') }}"></script>
    <script src="{{ asset('fronts/js/js_isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('fronts/js/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('fronts/js/parallax.min.js') }}"></script>
    <script src="{{ asset('fronts/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('fronts/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('fronts/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('fronts/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('fronts/js/parallax-scroll.js') }}"></script>
    <script src="{{ asset('fronts/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('fronts/js/element-in-view.js') }}"></script>
    <script src="{{ asset('fronts/js/main.js') }}"></script>
</body>

<!-- Mirrored from zcube.in/xevsoft/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jan 2023 12:50:27 GMT -->

</html>
