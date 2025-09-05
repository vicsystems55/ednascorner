<!-- Footer Section Start -->
<footer class="footer-section fix fix">
    <div class="bg-shape">
        <img src="{{ asset('assets/img/footer/bg-shape.png') }}" alt="img">
    </div>

    <!-- Marquee Text -->
    <div class="mycustom-marque">
        <div class="scrolling-wrap style-2">
    <div class="comm">
        <div></div>
        <div class="cmn-textslide">I Believe in</div>
        <div class="cmn-textslide">Working Together</div>
    </div>
    <div class="comm">
        <div></div>
        <div class="cmn-textslide">Let’s Partner</div>
        <div class="cmn-textslide">And Create Impact</div>
    </div>
    <div class="comm">
        <div></div>
        <div class="cmn-textslide">I Grow When</div>
        <div class="cmn-textslide">We Grow Together</div>
    </div>
</div>

    </div>

    <div class="container">
        <div class="footer-widget-wrapper">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="footer-item text-center">
                        <a href="{{ route('home') }}" class="footer-logo wow fadeInUp" data-wow-delay=".3s">
                            <img style="height: 95px;" src="{{ asset('assets/img/logo/logo.png') }}" alt="logo">
                        </a>

                        <ul class="footer-list-items wow fadeInUp" data-wow-delay=".5s">
                            <li><a href="{{ route('about') }}">ABOUT ME</a></li>
                            <li><a href="{{ route('services') }}">SERVICES</a></li>
                            <li><a href="{{ route('portfolio') }}">PORTFOLIO</a></li>
                            <li><a href="#">BLOG</a> {{-- Replace when blog route is ready --}}</li>
                            <li><a href="{{ route('contact') }}">CONTACT ME</a></li>
                        </ul>

                        <ul class="social-icon wow fadeInUp" data-wow-delay=".7s">
                            <li><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i> Twitter</a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i> Linkedin</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="footer-bottom-wrapper">
                <p class="wow fadeInUp" data-wow-delay=".3s">
                    Copyright © <span>{{ date('Y') }}</span>.
                    Site developed by
                    <a href="https://vicsystems.us" target="_blank" rel="noopener">
                        VICSYSTEMS TECHNOLOGIES LTD.
                    </a>
                </p>

                <ul class="footer-list wow fadeInUp" data-wow-delay=".5s">
                    <li><a href="{{ route('terms') }}">Terms & Conditions</a></li>
                    <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
