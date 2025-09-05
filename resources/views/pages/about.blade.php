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
        <!-- Section Header -->
        <div class="section-title-area text-cente">
            <div class="section-title">
                <span class="wow fadeInUp">
                    <img src="assets/img/shape/star-2.png" alt="star icon"> Who We Are
                </span>
                <h2 class="wow fadeInUp" data-wow-delay=".2s">
                    Inspiring Growth, <br>
                    Through <span>Style, Tech & Travel</span>
                </h2>
            </div>
            <div class="content">
                <p>
                    Under the umbrella of <strong>Your Favorite Vendor (YFV)</strong>,
                    we bring together creativity, strategy, and innovation.
                    From empowering individuals and businesses through coaching,
                    to designing timeless fashion, driving retail and e-commerce solutions,
                    and creating seamless travel experiences — we are your gateway to growth,
                    style, and success.
                </p>
                <a href="{{ url('/about') }}" class="theme-btn">
                    More About Us <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="about-wrapper-1">

        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Experience Section Start -->
<section class="experience-section section-padding section-bg fix">
    <div class="container">
        <div class="section-title text-center">
            <span class="wow fadeInUp">
                <img src="{{ asset('assets/img/shape/star-2.png') }}" alt="img">
                My Experience
                <img src="{{ asset('assets/img/shape/star-2.png') }}" alt="img">
            </span>
            <h2 class="wow fadeInUp" data-wow-delay=".2s">My Professional Journey</h2>
        </div>

        <div class="experience-wrapper ">
            <!-- Travel Industry -->
            <div class="experience-items wow fadeInUp" data-wow-delay=".2s">
                <span>2017 – Present</span>
                <h4>Travel & Tourism Professional</h4>
                <h6>7+ Years in the Travel Agency Industry</h6>
            </div>

            <!-- Certifications -->
            <div class="experience-items wow fadeInUp" data-wow-delay=".4s">
                <span>Ongoing</span>
                <h4>Digital Marketing, Sales & Business Development</h4>
                <h6>Certified – Vicsystems Technologies Training Institute</h6>
            </div>

            <!-- Healthcare -->
            <div class="experience-items wow fadeInUp" data-wow-delay=".6s">
                <span>Previous Role</span>
                <h4>Laboratory Consultant</h4>
                <h6>Rhema Teaching Hospital</h6>
            </div>

            <!-- UI/UX Design -->
            <div class="experience-items wow fadeInUp" data-wow-delay=".8s">
                <span>2020 – Present</span>
                <h4>UI/UX Designer & Product Development</h4>
                <h6>Designing Intuitive Interfaces & Digital Experiences</h6>
            </div>

            <!-- Business Development -->
            <div class="experience-items wow fadeInUp" data-wow-delay="1s">
                <span>2021 – Present</span>
                <h4>Business Development Manager</h4>
                <h6>Driving Growth Strategies Across Tech, Retail & Travel</h6>
            </div>
        </div>


    </div>
</section>
<!-- Experience Section End -->



@endsection
