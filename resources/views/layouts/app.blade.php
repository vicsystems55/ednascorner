<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->


<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Your Favorite Vendor">
    <meta name="description" content="{{ $description ?? 'Your gateway to growth, style & success.' }}">

    <!-- ======== Page title ============ -->
    <title>{{ $title ?? 'Your Favorite Vendor' }}</title>

    <!-- << Favicon >> -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">

    <!-- << Bootstrap min.css >> -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- << All Min Css >> -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">

    <!-- << Animate.css >> -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

    <!-- << Magnific Popup.css >> -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <!-- << MeanMenu.css >> -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">

    <!-- << Swiper Bundle.css >> -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">

    <!-- << Nice Select.css >> -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">

    <!-- << Color.css >> -->
    <link rel="stylesheet" href="{{ asset('assets/css/color.css') }}">

    <!-- << Main.css >> -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body class="body-color">

    <!-- Preloader Start -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
            <div class="txt-loading">
                <span data-text-preloader="Y" class="letters-loading">Y</span>
                <span data-text-preloader="F" class="letters-loading">F</span>
                <span data-text-preloader="V" class="letters-loading">V</span>
            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Back To Top Start -->
    <button id="back-top" class="back-to-top">
        <i class="fa-regular fa-arrow-up"></i>
    </button>

    <!--<< Mouse Cursor Start >>-->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="index.html">
                                <img src="assets/img/logo/Logo-black.svg" alt="logo-img">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <p class="text d-none d-xl-block">
                        Nullam dignissim, ante scelerisque the is euismod fermentum odio sem semper the is erat, a
                        feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
                    </p>
                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Main Street, Melbourne, Australia</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="mailto:info@example.com"><span
                                            class="mailto:info@example.com">info@example.com</span></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+11002345909">+11002345909</a>
                                </div>
                            </li>
                        </ul>
                        <div class="header-button mt-4 text-center">
                            <a href="contact.html" class="theme-btn">
                                Consultation <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>

    @include('layouts.header1')

    @yield('content')

    @include('layouts.footer')

    <!-- << All JS Plugins >> -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>

    <!-- << Viewport Js >> -->
    <script src="{{ asset('assets/js/viewport.jquery.js') }}"></script>

    <!-- << Bootstrap Js >> -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- << Nice Select Js >> -->
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>

    <!-- << Waypoints Js >> -->
    <script src="{{ asset('assets/js/jquery.waypoints.js') }}"></script>

    <!-- << Counterup Js >> -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>

    <!-- << Swiper Slider Js >> -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>

    <!-- << MeanMenu Js >> -->
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>

    <!-- << Magnific Popup Js >> -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>

    <!-- << Wow Animation Js >> -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>

    <!-- << Typed Js >> -->
    <script src="{{ asset('assets/js/typed.min.js') }}"></script>

    <!-- << Main.js >> -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>


<!-- Mirrored from ex-coders.com/html/minifolio/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Aug 2025 20:44:08 GMT -->

</html>
