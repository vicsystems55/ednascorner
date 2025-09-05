@extends('layouts.app')

@section('content')
<!-- Breadcrumb-Section Start -->
<section class="breadcrumb-wrapper fix bg-cover" style="background-image: url({{ asset('assets/img/breadcrumb/bg.jpg') }});">
    <!-- Decorative shapes -->
    <div class="star-shape float-bob-x">
        <img src="{{ asset('assets/img/shape/star.png') }}" alt="decoration">
    </div>
    <div class="arrow-shape">
        <img src="{{ asset('assets/img/breadcrumb/arrow.png') }}" alt="decoration">
    </div>

    <div class="container">
        <div class="row">
            <div class="page-heading text-center">
                <h2>About Me</h2>
                <ul class="breadcrumb-list">
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li><i class="fa-solid fa-angle-right"></i></li>
                    <li class="active">About Me</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Marquee Section Start -->
<section class="marquee-section section-bg fix">
    <div class="marquee-container">
        <div class="marquee-wrapper">
            <!-- First loop -->
            <div class="marquee-content">
                <div class="marquee-text">
                    <img src="{{ asset('assets/img/star/star-2.png') }}" alt="star">
                    <h3>Coaching & Mentorship</h3>
                </div>
                <div class="marquee-text">
                    <img src="{{ asset('assets/img/star/star-2.png') }}" alt="star">
                    <h3>Tech & Design Solutions</h3>
                </div>
                <div class="marquee-text">
                    <img src="{{ asset('assets/img/star/star-2.png') }}" alt="star">
                    <h3>Fashion & Lifestyle</h3>
                </div>
                <div class="marquee-text">
                    <img src="{{ asset('assets/img/star/star-2.png') }}" alt="star">
                    <h3>Entrepreneurship Support</h3>
                </div>
                <div class="marquee-text">
                    <img src="{{ asset('assets/img/star/star-2.png') }}" alt="star">
                    <h3>Travel Experiences</h3>
                </div>
            </div>

            <!-- Duplicate loop for seamless scroll -->
            <div class="marquee-content">
                <div class="marquee-text">
                    <img src="{{ asset('assets/img/star/star-2.png') }}" alt="star">
                    <h3>Coaching & Mentorship</h3>
                </div>
                <div class="marquee-text">
                    <img src="{{ asset('assets/img/star/star-2.png') }}" alt="star">
                    <h3>Tech & Design Solutions</h3>
                </div>
                <div class="marquee-text">
                    <img src="{{ asset('assets/img/star/star-2.png') }}" alt="star">
                    <h3>Fashion & Lifestyle</h3>
                </div>
                <div class="marquee-text">
                    <img src="{{ asset('assets/img/star/star-2.png') }}" alt="star">
                    <h3>Entrepreneurship Support</h3>
                </div>
                <div class="marquee-text">
                    <img src="{{ asset('assets/img/star/star-2.png') }}" alt="star">
                    <h3>Travel Experiences</h3>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- About Section Start -->
    <section class="about-section fix section-padding">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <span class="wow fadeInUp"><img src="assets/img/shape/star-2.png" alt="img">We Are We</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">
                        Solving Problems With <br> lntuitive
                        <span>Design</span>
                    </h2>
                </div>
                <div class="content">
                    <p>
                        We’re a team of strategic working globally with largest brands, We believe that progress only you to play things safe.
                    </p>
                     <a href="about.html" class="theme-btn">More About ME
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="about-wrapper-1">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="about-box-item">
                            <h2><span class="count">10</span>+</h2>
                            <h3>
                                Years of My <br>
                                 <span>Experience...</span>
                            </h3>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="about-box-item style-2">
                            <h2><span class="count">1400</span>k</h2>
                            <h3>
                                Clients Satisfied <br>
                                 <span>Worldwide...</span>
                            </h3>
                        </div>
                    </div>
                     <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="about-box-item">
                            <h2><span class="count">500</span>k</h2>
                            <h3>
                                Successfully <br>
                                 <span> Project Done...</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
