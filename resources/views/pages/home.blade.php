@extends('layouts.app')

@section('content')
    <!-- Hero Section Start -->
    <section class="hero-section hero-1 fix">
        <div class="arrow-right-shape">
            <img src="{{ asset('assets/img/hero/bg-1.png') }}" alt="background shape">
        </div>
        <div class="arrow-shape float-bob-y">
            <img src="{{ asset('assets/img/hero/angle-arrow.png') }}" alt="arrow shape">
        </div>
        <div class="arrow-up">
            <img src="{{ asset('assets/img/hero/arrow.png') }}" alt="arrow up">
        </div>

        <!-- Social Links -->
        <div class="hero-info">
            <a href="#" class="active">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">LinkedIn</a>
            <a href="#">Instagram</a>
        </div>

        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-10">
                    <div class="hero-content">
                        <span class="text-2">
                            <img src="{{ asset('assets/img/shape/star-2.png') }}" alt="star icon">
                            Welcome to YFV
                        </span>
                        <h1>
                            I'm <span class="style-2">Your Favorite Vendor</span><br>
                            <strong class="type-text">Coach • Consultant • Designer • Entrepreneur</strong>
                        </h1>
                        <div class="hero-bottom">
                            <p>Inspiring and empowering individuals & businesses through
                                <strong>coaching, tech & design, fashion, entrepreneurship, and travel experiences.</strong>
                            </p>
                            <div class="hero-btn-wrapper">
                                <a href="{{ route('services') }}" class="theme-btn">
                                    Explore My Services
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                                <a href="{{ route('portfolio') }}" class="video-btn">
                                    <span class="icon"><i class="fa-solid fa-briefcase"></i></span>
                                    <span class="text">View Portfolio</span>
                                </a>
                            </div>
                        </div>
                    </div>
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
                        We’re a team of strategic working globally with largest brands, We believe that progress only
                        you to play things safe.
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

    <!-- Service Section Start -->
    <section class="service-section service-1 section-padding section-bg fix">
        <div class="random-shape float-bob-y">
            <img src="assets/img/shape/random-shape.png" alt="img">
        </div>
        <div class="container">
            <h2 class="sub-title">OUR SERVICES</h2>
            <div class="section-title text-center">
                <span class="wow fadeInUp"><img src="assets/img/shape/star-2.png" alt="img">Our Services<img
                        src="assets/img/shape/star-2.png" alt="img"></span>
                <h2 class="wow fadeInUp" data-wow-delay=".2s">Professional <span>Excellence</span> Across All Fields
                </h2>
            </div>
            <div class="service-wrapper">

                <div class="services-item wow fadeInUp" data-wow-delay=".2s">
                    <div class="head">
                        <span>01</span>
                        <h4><a href="service-details.html">Creative Design</a></h4>
                    </div>
                    <div class="text">
                        <p>Delivering elegant and innovative design solutions for fashion, digital, and lifestyle
                            projects.</p>
                    </div>
                    <div class="link-btn">
                        <i class="fa-solid fa-arrow-right"></i>
                        <a href="service-details.html">Read More</a>
                    </div>
                </div>

                <div class="services-item wow fadeInUp" data-wow-delay=".4s">
                    <div class="head">
                        <span>02</span>
                        <h4><a href="service-details.html">Branding & Digital Strategy</a></h4>
                    </div>
                    <div class="text">
                        <p>Creating impactful brands, digital experiences, and strategies that engage audiences and
                            elevate businesses.</p>
                    </div>
                    <div class="link-btn">
                        <i class="fa-solid fa-arrow-right"></i>
                        <a href="service-details.html">Read More</a>
                    </div>
                </div>

                <div class="services-item wow fadeInUp" data-wow-delay=".6s">
                    <div class="head">
                        <span>03</span>
                        <h4><a href="service-details.html">Business & Entrepreneurship</a></h4>
                    </div>
                    <div class="text">
                        <p>Providing guidance, mentorship, and strategies to help businesses grow sustainably and
                            successfully.</p>
                    </div>
                    <div class="link-btn">
                        <i class="fa-solid fa-arrow-right"></i>
                        <a href="service-details.html">Read More</a>
                    </div>
                </div>

                <div class="services-item mb-0 wow fadeInUp" data-wow-delay=".8s">
                    <div class="head">
                        <span>04</span>
                        <h4><a href="service-details.html">Consulting & Lifestyle Solutions</a></h4>
                    </div>
                    <div class="text">
                        <p>Offering expert advice and practical solutions across travel, lifestyle, and
                            personal/business optimization.</p>
                    </div>
                    <div class="link-btn">
                        <i class="fa-solid fa-arrow-right"></i>
                        <a href="service-details.html">Read More</a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Project Section Start -->
    <section class="project-section section-padding fix">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <span class="wow fadeInUp"><img src="assets/img/shape/star-2.png" alt="img">Project</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">My Featured <span>Protfoilo</span></h2>
                </div>
                <a href="portfolio-details.html" class="theme-btn wow fadeInUp" data-wow-delay=".4s">
                    View All Project
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <div class="project-wrapper">
                <div class="row g-4">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="project-items wow img-custom-anim-top" data-wow-delay=".3s">
                            <div class="image">
                                <img src="assets/img/project/1.jpg" alt="img">
                            </div>
                            <div class="content">
                                <div class="text">
                                    <span>App / Development</span>
                                    <h4><a href="portfolio-details.html">Mobile App for Task Management</a></h4>
                                </div>
                                <div class="icon">
                                    <a href="portfolio-details.html"> <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="project-items wow img-custom-anim-top" data-wow-delay=".6s">
                            <div class="image">
                                <img src="assets/img/project/2.jpg" alt="img">
                            </div>
                            <div class="content">
                                <div class="text">
                                    <span>App / Development</span>
                                    <h4><a href="portfolio-details.html">Online Learning Platform</a></h4>
                                </div>
                                <div class="icon">
                                    <a href="portfolio-details.html"> <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-6">
                        <div class="project-items wow img-custom-anim-top" data-wow-delay=".9s">
                            <div class="image">
                                <img src="assets/img/project/3.jpg" alt="img">
                            </div>
                            <div class="content">
                                <div class="text">
                                    <span>Dashboard / Development</span>
                                    <h4><a href="portfolio-details.html">B2B Dashboard for Data Analytics</a></h4>
                                </div>
                                <div class="icon">
                                    <a href="portfolio-details.html"> <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-6">
                        <div class="project-items wow img-custom-anim-top" data-wow-delay="1.2s">
                            <div class="image">
                                <img src="assets/img/project/4.jpg" alt="img">
                            </div>
                            <div class="content">
                                <div class="text">
                                    <span>Website / Development </span>
                                    <h4><a href="portfolio-details.html">E-commerce Website Redesign</a></h4>
                                </div>
                                <div class="icon">
                                    <a href="portfolio-details.html"> <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section Start -->
    <section class="experience-section section-padding section-bg fix">
        <div class="container">
            <div class="section-title  text-center">
                <span class="wow fadeInUp"><img src="assets/img/shape/star-2.png" alt="img">My Experience<img
                        src="assets/img/shape/star-2.png" alt="img"></span>
                <h2 class="wow fadeInUp" data-wow-delay=".2s">My Work Experience</h2>
            </div>
            <div class="experience-wrapper">
                <div class="experience-items wow fadeInUp" data-wow-delay=".2s">
                    <span>2024</span>
                    <h4>Senior Designer</h4>
                    <h6>Behance</h6>
                </div>
                <div class="experience-items wow fadeInUp" data-wow-delay=".4s">
                    <span>2024</span>
                    <h4>UX Design case study</h4>
                    <h6>Behance</h6>
                </div>
                <div class="experience-items wow fadeInUp" data-wow-delay=".6s">
                    <span>2024</span>
                    <h4>Product Designer v/s Product Manage</h4>
                    <h6>Product Hunt</h6>
                </div>
                <div class="experience-items wow fadeInUp" data-wow-delay=".8s">
                    <span>2024</span>
                    <h4>Xiomi in Product Design (UI/UX)</h4>
                    <h6>Pinterest</h6>
                </div>
            </div>
            <div class="client-wrapper">
                <div class="client-items">
                    <div class="client-item">
                        <div class="icon">
                            <img src="assets/img/client/1.svg" alt="img">
                        </div>
                        <h4 class="number"><span class="count">98</span>% <span class="text">Figma</span></h4>
                    </div>
                    <div class="client-item">
                        <div class="icon">
                            <img src="assets/img/client/2.svg" alt="img">
                        </div>
                        <h4 class="number"><span class="count">90</span>% <span class="text">Photoshop</span></h4>
                    </div>
                    <div class="client-item">
                        <div class="icon">
                            <img src="assets/img/client/3.svg" alt="img">
                        </div>
                        <h4 class="number"><span class="count">79</span>% <span class="text">Illustrator</span>
                        </h4>
                    </div>
                    <div class="client-item">
                        <div class="icon">
                            <img src="assets/img/client/4.svg" alt="img">
                        </div>
                        <h4 class="number"><span class="count">88</span>% <span class="text">Sketch</span></h4>
                    </div>
                    <div class="client-item">
                        <div class="icon">
                            <img src="assets/img/client/5.svg" alt="img">
                        </div>
                        <h4 class="number"><span class="count">93</span>% <span class="text">Adobe_Xd</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Awards Section Start -->
    <section class="awards-section section-padding fix">
        <div class="top-shape">
            <img src="assets/img/shape/new-shape.png" alt="img">
        </div>
        <div class="star-shape float-bob-x">
            <img src="assets/img/shape/star.png" alt="img">
        </div>
        <div class="container">
            <div class="awards-wrapper">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="section-title mb-0">
                            <span class="wow fadeInUp"><img src="assets/img/shape/star-2.png"
                                    alt="img">Awards</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s"><span>Awards</span> & Recognition</h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="awards-item wow fadeInUp" data-wow-delay=".2s">
                            <div class="content">
                                <div class="icon">
                                    <img src="assets/img/icon/1.svg" alt="img">
                                </div>
                                <div class="text">
                                    <h4>Design Leadership Award</h4>
                                    <span>March 26, 2024</span>
                                </div>
                            </div>
                            <div class="icon">
                                <img src="assets/img/icon/5.svg" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="awards-item wow fadeInUp" data-wow-delay=".5s">
                            <div class="content">
                                <div class="icon">
                                    <img src="assets/img/icon/2.svg" alt="img">
                                </div>
                                <div class="text">
                                    <h4>Best Mobile App Design</h4>
                                    <span>March 26, 2024</span>
                                </div>
                            </div>
                            <div class="icon">
                                <img src="assets/img/icon/6.svg" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="awards-item wow fadeInUp" data-wow-delay=".8s">
                            <div class="content">
                                <div class="icon">
                                    <img src="assets/img/icon/3.svg" alt="img">
                                </div>
                                <div class="text">
                                    <h4>Best UI/UX Design Award</h4>
                                    <span>March 26, 2024</span>
                                </div>
                            </div>
                            <div class="icon">
                                <img src="assets/img/icon/7.svg" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="awards-item wow fadeInUp" data-wow-delay="1.1s">
                            <div class="content">
                                <div class="icon">
                                    <img src="assets/img/icon/4.svg" alt="img">
                                </div>
                                <div class="text">
                                    <h4>Creative Awards</h4>
                                    <span>March 26, 2024</span>
                                </div>
                            </div>
                            <div class="icon">
                                <img src="assets/img/icon/8.svg" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section Start -->
    <section class="pricing-section section-padding section-bg fix">
        <div class="container">
            <div class="section-title text-center">
                <span><img src="assets/img/shape/star-2.png" alt="img">Best Pricing</span>
                <h2>My <span>Pricing</span> Plan</h2>
            </div>
            <div class="price-wrapper">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="price-item">
                            <div class="content">
                                <h4>Basic Plan</h4>
                                <h3>$2500<span>/Monthly</span></h3>
                                <p>Description of the tier list will go here, copy should be concise and impactful.</p>
                            </div>
                            <ul class="price-list">
                                <li><i class="fa-solid fa-circle-chevron-right"></i> UI UX Design</li>
                                <li><i class="fa-solid fa-circle-chevron-right"></i> Design Customization
                                </li>
                                <li><i class="fa-solid fa-circle-chevron-right"></i> Design with Figma</li>
                                <li><i class="fa-solid fa-circle-chevron-right"></i> Multipage Design</li>
                                <li><i class="fa-solid fa-circle-chevron-right"></i> Support 6 months</li>
                            </ul>
                            <a href="contact.html" class="theme-btn">
                                Start My Project Now
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="price-item style-2">
                            <div class="content">
                                <h6 class="box">Most Popular </h6>
                                <h4>Standard Plan</h4>
                                <h3>$2500<span>/Monthly</span></h3>
                                <p>Description of the tier list will go here, copy should be concise and impactful.</p>
                            </div>
                            <ul class="price-list">
                                <li><i class="fa-solid fa-circle-chevron-right"></i> UI UX Design</li>
                                <li><i class="fa-solid fa-circle-chevron-right"></i> Design Customization
                                </li>
                                <li><i class="fa-solid fa-circle-chevron-right"></i> Design with Figma</li>
                                <li><i class="fa-solid fa-circle-chevron-right"></i> Multipage Design</li>
                                <li><i class="fa-solid fa-circle-chevron-right"></i> Support 6 months</li>
                            </ul>
                            <a href="contact.html" class="theme-btn">
                                Start My Project Now
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="price-item">
                            <div class="content">
                                <h4>Premium Plan</h4>
                                <h3>$3500<span>/Monthly</span></h3>
                                <p>Description of the tier list will go here, copy should be concise and impactful.</p>
                            </div>
                            <ul class="price-list">
                                <li><i class="fa-solid fa-circle-chevron-right"></i> UI UX Design</li>
                                <li><i class="fa-solid fa-circle-chevron-right"></i> Design Customization
                                </li>
                                <li><i class="fa-solid fa-circle-chevron-right"></i> Design with Figma</li>
                                <li><i class="fa-solid fa-circle-chevron-right"></i> Multipage Design</li>
                                <li><i class="fa-solid fa-circle-chevron-right"></i> Support 6 months</li>
                            </ul>
                            <a href="contact.html" class="theme-btn">
                                Start My Project Now
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section Start -->
    <section class="testimonials-section testimonials-1 section-padding section-bg-2 fix">
        <div class="random-shape float-bob-x">
            <img src="assets/img/shape/random-shape.png" alt="img">
        </div>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="section-title">
                        <span class="wow fadeInUp"><img src="assets/img/shape/star-2.png"
                                alt="img">Testimonials</span>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Our clients awesome <span>Testimonials</span>
                        </h2>
                    </div>
                    <div class="reviews wow fadeInUp" data-wow-delay=".4s">
                        <h2 class="count">4.8</h2>
                        <div class="item">
                            <span>1200+ Clients Rating.</span>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonials-wrapper">
                        <div class="swiper testimonial-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-box-items">
                                        <div class="client-info">
                                            <img src="assets/img/testimonials/1.png" alt="img">
                                            <div class="client-content">
                                                <h5>Daniel Smith</h5>
                                                <p>Senior engineer</p>
                                            </div>
                                        </div>
                                        <div class="testi-content">
                                            <div class="icon">
                                                <img src="assets/img/icon/42.svg" alt="img">
                                            </div>
                                            <p>
                                                This digital agency completely transformed our online presence. Their
                                                expertise, creativity, and attention to detail exceeded all our
                                                expectations. We highly recommend their outstanding services!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-box-items">
                                        <div class="client-info">
                                            <img src="assets/img/testimonials/1.png" alt="img">
                                            <div class="client-content">
                                                <h5>Daniel Smith</h5>
                                                <p>Senior engineer</p>
                                            </div>
                                        </div>
                                        <div class="testi-content">
                                            <div class="icon">
                                                <img src="assets/img/icon/42.svg" alt="img">
                                            </div>
                                            <p>
                                                This digital agency completely transformed our online presence. Their
                                                expertise, creativity, and attention to detail exceeded all our
                                                expectations. We highly recommend their outstanding services!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-box-items">
                                        <div class="client-info">
                                            <img src="assets/img/testimonials/1.png" alt="img">
                                            <div class="client-content">
                                                <h5>Daniel Smith</h5>
                                                <p>Senior engineer</p>
                                            </div>
                                        </div>
                                        <div class="testi-content">
                                            <div class="icon">
                                                <img src="assets/img/icon/42.svg" alt="img">
                                            </div>
                                            <p>
                                                This digital agency completely transformed our online presence. Their
                                                expertise, creativity, and attention to detail exceeded all our
                                                expectations. We highly recommend their outstanding services!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-box-items">
                                        <div class="client-info">
                                            <img src="assets/img/testimonials/1.png" alt="img">
                                            <div class="client-content">
                                                <h5>Daniel Smith</h5>
                                                <p>Senior engineer</p>
                                            </div>
                                        </div>
                                        <div class="testi-content">
                                            <div class="icon">
                                                <img src="assets/img/icon/42.svg" alt="img">
                                            </div>
                                            <p>
                                                This digital agency completely transformed our online presence. Their
                                                expertise, creativity, and attention to detail exceeded all our
                                                expectations. We highly recommend their outstanding services!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-box-items">
                                        <div class="client-info">
                                            <img src="assets/img/testimonials/1.png" alt="img">
                                            <div class="client-content">
                                                <h5>Daniel Smith</h5>
                                                <p>Senior engineer</p>
                                            </div>
                                        </div>
                                        <div class="testi-content">
                                            <div class="icon">
                                                <img src="assets/img/icon/42.svg" alt="img">
                                            </div>
                                            <p>
                                                This digital agency completely transformed our online presence. Their
                                                expertise, creativity, and attention to detail exceeded all our
                                                expectations. We highly recommend their outstanding services!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-dot text-center">
                            <div class="dot"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section Start -->
    <section class="news-section news-1 section-padding section-bg fix d-none">
        <div class="container">
            <div class="section-title text-center">
                <span class="wow fadeInUp"><img src="assets/img/shape/star-2.png" alt="img">My Blog<img
                        src="assets/img/shape/star-2.png" alt="img"></span>
                <h2 class="wow fadeInUp" data-wow-delay=".2s">Latest <span>Blog</span></h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="news-item wow fadeInUp" data-wow-delay=".3s">
                        <div class="thumb">
                            <img src="assets/img/news/1.jpg" alt="img">
                        </div>
                        <div class="content">
                            <ul class="news-meta">
                                <li class="green">Branding</li>
                                <li class="date"><span></span>26 June 2024</li>
                            </ul>
                            <h4><a href="news-details.html">The Role of Prototyping in UI/UX <br> Design</a></h4>
                            <div class="news-btns">
                                <i class="fa-solid fa-arrow-right"></i>
                                <a href="news-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="news-item wow fadeInUp" data-wow-delay=".6s">
                        <div class="thumb">
                            <img src="assets/img/news/2.jpg" alt="img">
                        </div>
                        <div class="content">
                            <ul class="news-meta">
                                <li class="green">Design System</li>
                                <li class="date"><span></span>26 June 2024</li>
                            </ul>
                            <h4><a href="news-details.html">The Psychology Behind Color Choices in UI/UX Design</a>
                            </h4>
                            <div class="news-btns">
                                <i class="fa-solid fa-arrow-right"></i>
                                <a href="news-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="news-item wow fadeInUp" data-wow-delay=".9s">
                        <div class="thumb">
                            <img src="assets/img/news/3.jpg" alt="img">
                        </div>
                        <div class="content">
                            <ul class="news-meta">
                                <li class="green">UI/UX Design</li>
                                <li class="date"><span></span>26 June 2024</li>
                            </ul>
                            <h4><a href="news-details.html">The Importance of User Research in UI/UX Design</a></h4>
                            <div class="news-btns">
                                <i class="fa-solid fa-arrow-right"></i>
                                <a href="news-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news-button text-center">
                <a href="news-details.html" class="theme-btn">View All Blog <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </section>
@endsection
