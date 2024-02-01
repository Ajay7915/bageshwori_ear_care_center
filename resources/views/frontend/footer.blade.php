<!--========================= Footer Area ==============================-->
<footer class="footer-wrapper footer-layout1" data-bg-src="assets/img/bg/bg-shape-4.png">
    <div class="container">
        <div class="footer-top">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-6 col-md-auto text-center text-sm-start">
                    <div class="footer1-logo bg-white">
                        <a href="index.html"><img src="assets/img/logo.svg" alt="Logo"></a>
                    </div>
                </div>
                <div class=" col-sm-6 col-md-auto pt-20 pt-sm-0 pb-20 pb-sm-0 text-center text-sm-end">
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="far fa-basketball-ball"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-lg-3 col-xl-3">
                    <div class="widget footer-widget  ">
                        <h3 class="widget_title">About Us</h3>
                        <div class="vs-widget-about text-white">
                            <p>
                                @isset($about->description)
                                    {!! Str::limit($about->description, 150) !!}
                                @endisset

                            </p>
                            <h4><a class="text-theme hover-white" href="tel:693232512456"><i
                                        class="fas fa-phone-volume me-2 pe-1"></i>
                                    @isset($about->contact_no)
                                        {{ $about->contact_no }}
                                    @endisset
                                </a></h4>
                            <div class="d-flex mt-3 pt-1">
                                <div class="avater-small mr-20">
                                    <img src="assets/img/author/author-2-3.jpg" alt="Avater Image">
                                </div>
                                <div class="media-body align-self-center">
                                    <h5 class="mb-0 font-body lh-1 text-white">Dr .................</h5>
                                    <span class="text-theme fs-xs lh-1">Senior Consultant</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-auto col-xl-auto">
                    <div class="widget footer-widget widget_nav_menu   ">
                        <h3 class="widget_title">Programs</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                @isset($programs)
                                    @foreach ($programs as $service)
                                        <li><a href="#">{{ Str::limit($service->title, 20) }}</a></li>
                                    @endforeach
                                @endisset

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-auto col-xl-auto">
                    <div class="widget footer-widget widget_nav_menu   ">
                        <h3 class="widget_title">Services</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                @isset($services)
                                    @foreach ($services as $service)
                                        <li><a href="#">{{ $service->title }}</a></li>
                                    @endforeach
                                @endisset

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 col-xl-3">
                    <div class="widget footer-widget   ">
                        <h3 class="widget_title">Visiting Hours</h3>
                        <div class="footer-table">
                            <table>
                                <tr>
                                    <td>
                                        @isset($about->opening_time)
                                            {!! $about->opening_time !!}
                                        @endisset
                                    </td>

                                </tr>

                            </table>
                        </div>
                        <div class="address-line">
                            <i class="far fa-map-marker-alt text-theme fs-md"></i>
                            <a href="#" class="text-reset fs-md">
                                @isset($about->address)
                                    {{ $about->address }}
                                @endisset

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright bg-theme">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto text-center text-md-end">
                    <p class="mb-0 text-white">Copyright <i class="fal fa-copyright"></i> 2023 <a class="text-white"
                            href="index.html">Medixi</a>. All rights reserved by <a class="text-white"
                            href="https://themeforest.net/user/vecuro_themes">Vecuro</a>.</p>
                </div>
                <div class="col-auto d-none d-md-block">
                    <ul class="footer-bottom-menu">
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--********************************  Code End  Here ******************************** -->
<!-- Scroll To Top -->
<a href="#" class="scrollToTop scroll-bottom  style2"><i class="fas fa-arrow-alt-up"></i></a>
<!--==============================       All Js File   ============================== -->
<!-- Jquery -->
<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<!-- Slick Slider -->
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<!-- <script src="assets/js/app.min.js"></script> -->
<!-- Layerslider -->
<script src="{{ asset('assets/js/layerslider.utils.js') }}"></script>
<script src="{{ asset('assets/js/layerslider.transitions.js') }}"></script>
<script src="{{ asset('assets/js/layerslider.kreaturamedia.jquery.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- jQuery Datepicker -->
<script src="{{ asset('assets/js/jquery.datetimepicker.min.js') }}"></script>
<!-- Magnific Popup -->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- Isotope Filter -->
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<!-- Parallax Scroll -->
<script src="{{ asset('assets/js/universal-parallax.min.js') }}"></script>
<!-- WOW Animation -->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<!-- Custom Carousel -->
<script src="{{ asset('assets/js/vscustom-carousel.min.js') }}"></script>
<!-- Form Js -->
<script src="{{ asset('assets/js/ajax-mail.js') }}"></script>
<!-- Main Js File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
