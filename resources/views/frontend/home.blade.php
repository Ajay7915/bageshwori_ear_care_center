@extends('frontend.header')
@section('title', 'BECC-Home')
@section('content')
    <!--==============================     Hero Area    ==============================-->
    <section class="vs-hero-wrapper position-relative  ">
        <div class="vs-hero-carousel" data-navprevnext="true" data-height="800" data-container="1900"
            data-slidertype="responsive">
            <div class="ls-slide" data-ls="duration: 13000; transition2d: 5;">
                <img src="documents/carousels/{{$carousel->home}}" alt="Hero Image" class="ls-bg">
                <h1 class="text-title ls-l ls-responsive" data-ls-mobile="left: 100px; top: 120px; font-size: 120px;"
                    data-ls-tablet="left: 100px; top: 80px; font-size: 92px;"
                    data-ls-laptop="left: 100px; top: 120px; font-size: 82px;"
                    style="left: 335px; top: 208px; font-size: 72px; font-weight: 700;"
                    data-ls="delayin: 600; easingin: easeInOutSine; texttransitionin: true; textstartatin: transitioninstart; textdurationin: 2000; texttypein: words_asc; textshiftin: 200; textoffsetyin: -100; offsetyout: -100; durationout: 2000; ">
                    We always put the</h1>
                <h1 class="text-white ls-l ls-responsive" data-ls-mobile="left: 100px;  top: 285px; font-size: 120px;"
                    data-ls-tablet="left: 100px; top: 210px; font-size: 92px;"
                    data-ls-laptop="left: 100px; top: 230px; font-size: 82px;"
                    style="left: 335px; top: 290px; font-size: 72px; font-weight: 700;"
                    data-ls="delayin: 0; easingin: easeInOutSine; texttransitionin: true; textstartatin: transitioninstart; textdurationin: 2000; texttypein: words_asc; textshiftin: 200; textoffsetyin: -100; offsetyout: -100; durationout: 2000; ">
                    patients first</h1>
                <p class="ls-l text-white ls-responsive ls-hide-sm" data-ls-mobile="left: 100px; "
                    data-ls-tablet=" left: 100px; top: 360px; font-size: 34px; width: 1000px; line-height: 52px;"
                    data-ls-laptop="left: 100px; top: 380px; font-size: 26px; width: 800px; line-height: 48px;"
                    style="left: 335px; top: 400px; width: 605px; font-size: 16px; font-weight: 400; white-space: normal; letter-spacing: 0.02em; line-height: 28px;"
                    data-ls="delayin: 800; texttransitionin: true; textstartatin: transitioninstart; texttypein: lines_asc; textshiftin: 100; textoffsetyin: 100; textdurationin: 2000; offsetyout: 100; durationout: 2000; ">
                    Conveniently drive go forward architectures with future-proof growth strategies. Energistically
                    supply low-risk high-yield process improvements for mission-critical testing procedures</p>
                <div class="ls-btn ls-l ls-responsive" data-ls-mobile="left: 100px; "
                    data-ls-tablet="left: 100px; top: 580px;" data-ls-laptop="left: 100px; top: 580px;"
                    style="left: 335px; top: 518px;"
                    data-ls="offsetyin: 200; durationin: 2000; delayin: 1400; offsetyout: 300; durationout: 2000; offsetyout: 100; durationout: 2000; ">
                    <a href="{{ route('service') }}" class="vs-btn style3 hover-white">View All Services<i
                            class="fas fa-bolt"></i></a>
                </div>
            </div>
            <div class="ls-slide" data-ls="duration: 13000; transition2d: 5;">
                <img src="documents/carousels/{{$carousel->about}}" alt="Hero Image" class="ls-bg">
                <h1 class="text-title ls-l ls-responsive" data-ls-mobile="left: 100px; top: 120px; font-size: 120px;"
                    data-ls-tablet="left: 100px; top: 80px; font-size: 92px;"
                    data-ls-laptop="left: 100px; top: 120px; font-size: 82px;"
                    style="left: 335px; top: 208px; font-size: 72px; font-weight: 700;"
                    data-ls="delayin: 600; easingin: easeInOutSine; texttransitionin: true; textstartatin: transitioninstart; textdurationin: 2000; texttypein: words_asc; textshiftin: 200; textoffsetyin: -100; offsetyout: -100; durationout: 2000; ">
                    Best Treatment for</h1>
                <h1 class="text-white ls-l ls-responsive" data-ls-mobile="left: 100px;  top: 285px; font-size: 120px;"
                    data-ls-tablet="left: 100px; top: 210px; font-size: 92px;"
                    data-ls-laptop="left: 100px; top: 230px; font-size: 82px;"
                    style="left: 335px; top: 290px; font-size: 72px; font-weight: 700;"
                    data-ls="delayin: 0; easingin: easeInOutSine; texttransitionin: true; textstartatin: transitioninstart; textdurationin: 2000; texttypein: words_asc; textshiftin: 200; textoffsetyin: -100; offsetyout: -100; durationout: 2000; ">
                    healthy life</h1>
                <p class="ls-l text-white ls-responsive ls-hide-sm" data-ls-mobile="left: 100px; "
                    data-ls-tablet=" left: 100px; top: 360px; font-size: 34px; width: 1000px; line-height: 52px;"
                    data-ls-laptop="left: 100px; top: 380px; font-size: 26px; width: 800px; line-height: 48px;"
                    style="left: 335px; top: 400px; width: 605px; font-size: 16px; font-weight: 400; white-space: normal; letter-spacing: 0.02em; line-height: 28px;"
                    data-ls="delayin: 800; texttransitionin: true; textstartatin: transitioninstart; texttypein: lines_asc; textshiftin: 100; textoffsetyin: 100; textdurationin: 2000; offsetyout: 100; durationout: 2000; ">
                    Conveniently drive go forward architectures with future-proof growth strategies. Energistically
                    supply low-risk high-yield process improvements for mission-critical testing procedures</p>
                <div class="ls-btn ls-l ls-responsive" data-ls-mobile="left: 100px; "
                    data-ls-tablet="left: 100px; top: 580px;" data-ls-laptop="left: 100px; top: 580px;"
                    style="left: 335px; top: 518px;"
                    data-ls="offsetyin: 200; durationin: 2000; delayin: 1400; offsetyout: 300; durationout: 2000; offsetyout: 100; durationout: 2000; ">
                    <a href="service.html" class="vs-btn style3 hover-white">View All Services<i
                            class="fas fa-bolt"></i></a>
                </div>
            </div>
            <div class="ls-slide" data-ls="duration: 13000; transition2d: 5;">
                <img src="documents/carousels/{{$carousel->service}}" alt="Hero Image" class="ls-bg">
                <h1 class="text-title ls-l ls-responsive" data-ls-mobile="left: 100px; top: 120px; font-size: 120px;"
                    data-ls-tablet="left: 100px; top: 80px; font-size: 92px;"
                    data-ls-laptop="left: 100px; top: 120px; font-size: 82px;"
                    style="left: 335px; top: 208px; font-size: 72px; font-weight: 700;"
                    data-ls="delayin: 600; easingin: easeInOutSine; texttransitionin: true; textstartatin: transitioninstart; textdurationin: 2000; texttypein: words_asc; textshiftin: 200; textoffsetyin: -100; offsetyout: -100; durationout: 2000; ">
                    Best Medics, Doctors</h1>
                <h1 class="text-white ls-l ls-responsive" data-ls-mobile="left: 100px;  top: 285px; font-size: 120px;"
                    data-ls-tablet="left: 100px; top: 210px; font-size: 92px;"
                    data-ls-laptop="left: 100px; top: 230px; font-size: 82px;"
                    style="left: 335px; top: 290px; font-size: 72px; font-weight: 700;"
                    data-ls="delayin: 0; easingin: easeInOutSine; texttransitionin: true; textstartatin: transitioninstart; textdurationin: 2000; texttypein: words_asc; textshiftin: 200; textoffsetyin: -100; offsetyout: -100; durationout: 2000; ">
                    and physicians</h1>
                <p class="ls-l text-white ls-responsive ls-hide-sm" data-ls-mobile="left: 100px; "
                    data-ls-tablet=" left: 100px; top: 360px; font-size: 34px; width: 1000px; line-height: 52px;"
                    data-ls-laptop="left: 100px; top: 380px; font-size: 26px; width: 800px; line-height: 48px;"
                    style="left: 335px; top: 400px; width: 605px; font-size: 16px; font-weight: 400; white-space: normal; letter-spacing: 0.02em; line-height: 28px;"
                    data-ls="delayin: 800; texttransitionin: true; textstartatin: transitioninstart; texttypein: lines_asc; textshiftin: 100; textoffsetyin: 100; textdurationin: 2000; offsetyout: 100; durationout: 2000; ">
                    Conveniently drive go forward architectures with future-proof growth strategies. Energistically
                    supply low-risk high-yield process improvements for mission-critical testing procedures</p>
                <div class="ls-btn ls-l ls-responsive" data-ls-mobile="left: 100px; "
                    data-ls-tablet="left: 100px; top: 580px;" data-ls-laptop="left: 100px; top: 580px;"
                    style="left: 335px; top: 518px;"
                    data-ls="offsetyin: 200; durationin: 2000; delayin: 1400; offsetyout: 300; durationout: 2000; offsetyout: 100; durationout: 2000; ">
                    <a href="service.html" class="vs-btn style3 hover-white">View All Services<i
                            class="fas fa-bolt"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--==============================    Service Area    ==============================-->
    <section class="vs-service-wrapper space-top space-md-bottom">
        <div class="container">
            <div class="row  text-center justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="section-title">
                        <span class="h3 text-theme sec-subtitle">Latest Jobs</span>
                        <h2 class="h1 ">Our Services</h2>
                        <p>Proactively revolutionize granular customer service after pandemic internal or "organic"
                            sources proactive human capital rather.</p>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel wow fadeIn" data-wow-delay="0.3s" data-slide-show="3">
                <div class="col-xl-4 mb-25">
                    <div class="service-box ">
                        <div class="sr-img">
                            <img src="assets/img/service/sr-2-1.jpg" alt="Service Image" class="w-100">
                        </div>
                        <div class="sr-icon">
                            <i class="flaticon-computer-mouse"></i>
                        </div>
                        <div class="sr-content">
                            <h3 class="h4"><a class="text-reset" href="service.html">Medical Advices &
                                    Checkup</a></h3>
                            <p class="fs-xs">Continually evisculate goal-oriented portals rather than prospective
                                channels. excellent customize life</p>
                        </div>
                        <a href="service.html" class="icon-btn style4"><i class="far fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 mb-25">
                    <div class="service-box ">
                        <div class="sr-img">
                            <img src="assets/img/service/sr-2-2.jpg" alt="Service Image" class="w-100">
                        </div>
                        <div class="sr-icon">
                            <i class="flaticon-blood-pressure"></i>
                        </div>
                        <div class="sr-content">
                            <h3 class="h4"><a class="text-reset" href="service.html">Cardiovascular for
                                    Women's</a></h3>
                            <p class="fs-xs">Continually evisculate goal-oriented portals rather than prospective
                                channels. excellent customize life</p>
                        </div>
                        <a href="service.html" class="icon-btn style4"><i class="far fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 mb-25">
                    <div class="service-box ">
                        <div class="sr-img">
                            <img src="assets/img/service/sr-2-3.jpg" alt="Service Image" class="w-100">
                        </div>
                        <div class="sr-icon">
                            <i class="flaticon-stethoscope-1"></i>
                        </div>
                        <div class="sr-content">
                            <h3 class="h4"><a class="text-reset" href="service.html">Heart Checkup or
                                    Cardiovascular</a></h3>
                            <p class="fs-xs">Continually evisculate goal-oriented portals rather than prospective
                                channels. excellent customize life</p>
                        </div>
                        <a href="service.html" class="icon-btn style4"><i class="far fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 mb-25">
                    <div class="service-box ">
                        <div class="sr-img">
                            <img src="assets/img/service/sr-2-4.jpg" alt="Service Image" class="w-100">
                        </div>
                        <div class="sr-icon">
                            <i class="flaticon-quality-of-life"></i>
                        </div>
                        <div class="sr-content">
                            <h3 class="h4"><a class="text-reset" href="service.html">Laboratory & Pathology
                                    Drag</a></h3>
                            <p class="fs-xs">Continually evisculate goal-oriented portals rather than prospective
                                channels. excellent customize life</p>
                        </div>
                        <a href="service.html" class="icon-btn style4"><i class="far fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================       About Area        ==============================-->
    <section class="vs-about-wrapper space">
        <div class="parallax" data-parallax-image="assets/img/bg/bg-7.jpg"></div>
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-6 mb-40 mb-lg-0">
                    <div class="vs-surface wow" data-wow-delay="0.3s">
                        <div class="about-img3 position-relative">
                            <img src="assets/img/about/about-4-1.jpg" alt="About Image" class="w-100">
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                class="popup-video play-btn style2 position-center"><i class="fas fa-play"></i></a>
                            <div class="exp-box-bottom bg-white">
                                <div class="exp-year text-theme">
                                    <span class="counter">187</span>+
                                </div>
                                <p class="exp-text text-title mb-0">Years of Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-content mb-2 ">
                        <span class="sec-subtitle text-theme h3 mb-2 mb-sm-0">Medical & General Care!</span>
                        <div class="row">
                            <div class="col-xl-10">
                                <h2 class="h1 mb-3">Surprise your body with <span class="text-theme">extra
                                        care.</span></h2>
                            </div>
                            <div class="col-xl-10">
                                <p class="mb-4">Rapidiously evisculate user-centric functionalities for highly
                                    efficient interfaces. Competently leverage other's scalable technology before
                                    synergistic manufactured products.</p>
                            </div>
                        </div>
                        <div class="media-style1">
                            <div class="media-icon"><i class="fas fa-phone"></i></div>
                            <div class="media-body">
                                <h3 class="media-title">CALL ANYTIME 24/7</h3>
                                <p class="media-text"><a href="tel:+4412345996">+44-1234-5996</a></p>
                            </div>
                        </div>
                        <a href="about.html" class="vs-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================        Skill Area        ==============================-->
    <section class="vs-skill-wrapper  ">
        <div class="container">
            <div class="skill-wrap1 bg-white">
                <div class="row justify-content-center justify-content-lg-between">
                    <div class="col-md-6 col-lg-auto  mb-30">
                        <div class="d-xl-flex text-center text-xl-start skill-box">
                            <span class="ripple-icon hover-style2  align-self-start mb-20 mb-xl-0 mr-20"><i
                                    class="flaticon-discuss"></i></span>
                            <div class="media-body">
                                <h2 class="mt-n2 mb-0 text-theme">30+</h2>
                                <p class="text-title fs-md fw-medium mt-1 mt-xl-0 mb-2 mb-xl-2">Years Of Experience</p>
                                <p class="fs-xs mb-0">Incubate extensive scenarios without top-line quality vectors.
                                    Authoritatively engage</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-auto  mb-30">
                        <div class="d-xl-flex text-center text-xl-start skill-box">
                            <span class="ripple-icon  hover-style2 align-self-start mb-20 mb-xl-0 mr-20"><i
                                    class="flaticon-medical-equipment"></i></span>
                            <div class="media-body">
                                <h2 class="mt-n2 mb-0 text-theme">100+</h2>
                                <p class="text-title fs-md fw-medium mt-1 mt-xl-0 mb-2 mb-xl-2">Experienced Doctor's
                                </p>
                                <p class="fs-xs mb-0">Incubate extensive scenarios without top-line quality vectors.
                                    Authoritatively engage</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-auto  mb-30">
                        <div class="d-xl-flex text-center text-xl-start skill-box">
                            <span class="ripple-icon  hover-style2 align-self-start mb-20 mb-xl-0 mr-20"><i
                                    class="flaticon-healthcare"></i></span>
                            <div class="media-body">
                                <h2 class="mt-n2 mb-0 text-theme">200+</h2>
                                <p class="text-title fs-md fw-medium mt-1 mt-xl-0 mb-2 mb-xl-2">Happy Patients</p>
                                <p class="fs-xs mb-0">Incubate extensive scenarios without top-line quality vectors.
                                    Authoritatively engage</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================        Appointment Form Area        ==============================-->
    <section class="appointment-wrapper space-top space-md-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 mb-30">
                    <div class="about-content">
                        <span class="sec-subtitle text-theme h3 mb-2 mb-sm-0">Medical &amp; General Care!</span>
                        <h2 class="h1 mb-3">We’re Here For You</h2>
                        <div class="row">
                            <div class="col-xl-10 mb-md-2 pb-md-1">
                                <p class="mb-md-4">Proactively revolutionize granular customer service after pandemic
                                    internal or "organic" sources. Distinctively impact proactive human capital rather
                                    than client-centered benefits. </p>
                            </div>
                            <div class="col-md-6 col-lg-5 col-xl-4">
                                <ul class="vs-list list-unstyled text-title">
                                    <li>99% success rate </li>
                                    <li>100% Confidential</li>
                                    <li>Affordable Fees</li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-lg-5 col-xl-5">
                                <ul class="vs-list list-unstyled text-title">
                                    <li>Free Consultation</li>
                                    <li>Expert surveillance agents</li>
                                    <li>Over 50 years experience</li>
                                </ul>
                            </div>
                        </div>
                        <ul class="offer-counter counter-list list-unstyled" data-offer-date="12/08/2024">
                            <li>
                                <div class="day count-number ">00</div>
                                <span class="count-name">Days</span>
                            </li>
                            <li>
                                <div class="hour count-number ">00</div>
                                <span class="count-name">Hours</span>
                            </li>
                            <li>
                                <div class="minute count-number ">00</div>
                                <span class="count-name">Minutes</span>
                            </li>
                            <li>
                                <div class="seconds count-number ">00</div>
                                <span class="count-name">Seconds</span>
                            </li>
                        </ul>
                        <div class="vs-code-box mt-20">
                            Use Code: <span class="text-theme">Native</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 mb-30 pt-30 pt-xl-0">
                    <form action="#" class="form-wrap1 bg-white wow fadeInUp" data-wow-delay="0.3s">
                        <div class="form-title-box bg-title">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <h2 class="h4 mb-1 text-white">Book An Appointment</h2>
                                    <p class="mb-0 text-white-light">Please Call Us To Ensure</p>
                                </div>
                                <div class="col-auto d-none d-sm-block">
                                    <a href="tel:0088123456789" class="ripple-icon style2"><i
                                            class="fas fa-phone"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="form-box">
                            <div class="row">
                                <div class="col-xl-6 form-group">
                                    <select class="form-select style2">
                                        <option hidden disabled selected>Select Services</option>
                                        <option>Aerospace Medicine</option>
                                        <option>Bariatric Surgery</option>
                                        <option>Infectious Diseases</option>
                                        <option>Laboratory Medicine</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 form-group">
                                    <select class="form-select style2">
                                        <option hidden disabled selected>Choose Doctor</option>
                                        <option>Aerospace Medicine</option>
                                        <option>Bariatric Surgery</option>
                                        <option>Infectious Diseases</option>
                                        <option>Laboratory Medicine</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 form-group">
                                    <input type="text" class="form-control  style2" placeholder="Your Name">
                                    <i class="fal small fa-user"></i>
                                </div>
                                <div class="col-xl-6 form-group">
                                    <input type="email" class="form-control  style2" placeholder="Email Address">
                                    <i class="fal small fa-envelope"></i>
                                </div>
                                <div class="col-xl-6 form-group">
                                    <input type="number" class="form-control  style2" placeholder="Your Phone">
                                    <i class="fal small fa-phone"></i>
                                </div>
                                <div class="col-xl-6 form-group">
                                    <input type="text" class="dateTime-pick form-control  style2"
                                        placeholder="Select Date & Time">
                                    <i class="fal small fa-calendar-alt"></i>
                                </div>
                                <div class="col-xl-12 text-center">
                                    <button type="submit" class="vs-btn style2">Make Appointment<i
                                            class="far fa-calendar-alt"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--==============================         Project Area      ==============================-->
    <section class="vs-project-wrapper position-relative space-top pb-50" data-bg-color="#f9f9f9">
        <div class="project-shape" data-bg-src="assets/img/bg/bg-shape-7.jpg"></div>
        <div class="container z-index-common">
            <div class="row  text-center justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="section-title">
                        <span class="h3 text-theme sec-subtitle">Case Study</span>
                        <h2 class="h1 text-white">Latest Projects</h2>
                        <p class="text-white">Proactively revolutionize granular customer service after pandemic
                            internal or "organic" sources proactive human capital rather.</p>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel wow fadeInUp" data-wow-delay="0.3s" data-slide-show="3">
                <div class="col-xl-4">
                    <div class="vs-project-box mb-30">
                        <div class="project-img">
                            <img src="assets/img/project/pro-1-1.jpg" alt="Project Image" class="w-100">
                        </div>
                        <div class="project-content">
                            <span class="project-cat fs-xs">New Surgeon</span>
                            <h4 class="project-name">Heart Surgery</h4>
                            <a href="assets/img/project/pro-1-1.jpg" class="icon-btn style4 popup-image"><i
                                    class="fal fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-project-box mb-30">
                        <div class="project-img">
                            <img src="assets/img/project/pro-1-2.jpg" alt="Project Image" class="w-100">
                        </div>
                        <div class="project-content">
                            <span class="project-cat fs-xs">Development</span>
                            <h4 class="project-name">Neurosurgeon</h4>
                            <a href="assets/img/project/pro-1-2.jpg" class="icon-btn style4 popup-image"><i
                                    class="fal fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-project-box mb-30">
                        <div class="project-img">
                            <img src="assets/img/project/pro-1-3.jpg" alt="Project Image" class="w-100">
                        </div>
                        <div class="project-content">
                            <span class="project-cat fs-xs">Top Ranked</span>
                            <h4 class="project-name">Ophthalmic </h4>
                            <a href="assets/img/project/pro-1-3.jpg" class="icon-btn style4 popup-image"><i
                                    class="fal fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-project-box mb-30">
                        <div class="project-img">
                            <img src="assets/img/project/pro-1-4.jpg" alt="Project Image" class="w-100">
                        </div>
                        <div class="project-content">
                            <span class="project-cat fs-xs">New Special</span>
                            <h4 class="project-name">Oculoplastic</h4>
                            <a href="assets/img/project/pro-1-4.jpg" class="icon-btn style4 popup-image"><i
                                    class="fal fa-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div data-bg-src="assets/img/bg/bg-shape-8.jpg">
        <!-- Middle Box Area -->
        <section class="vs-middle-box-wrapper space-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-6 mb-30 mb-lg-0">
                        <div class="vs-middle-box d-md-flex text-center text-md-start bg-theme">
                            <div class="media-icon mb-20 mb-md-0 mr-20">
                                <img src="assets/img/icons/icon-1-1.png" alt="Icon">
                            </div>
                            <div class="media-body align-self-center">
                                <span class="text-white fs-xs">Health Services</span>
                                <h4 class="text-white mb-0">Known the truth for Peace of Mind</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="vs-middle-box d-md-flex text-center text-md-start bg-title">
                            <div class="media-icon mb-20 mb-md-0 mr-20">
                                <img src="assets/img/icon/icon-1-1-001.png" alt="Icon">
                            </div>
                            <div class="media-body align-self-center">
                                <span class="text-theme fs-xs">Professinal Consult</span>
                                <h4 class="text-title mb-0 text-white">Medicine Suggestion for diseases</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--==============================
        Testimonial Area
        ==============================-->
        <section class="testimonial-wrapper space-bottom">
            <div class="container">
                <div class="row  text-center justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="section-title">
                            <span class="h3 text-theme sec-subtitle">Testimonial</span>
                            <h2 class="h1 ">Patient Says</h2>
                            <p>Proactively revolutionize granular customer service after pandemic internal or "organic"
                                sources proactive human capital rather.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="row vs-carousel wow fadeInUp" data-wow-delay="0.3s" data-slide-show="2">
                            <div class="col-xl-6">
                                <div class="testimonial-box mb-30 bg-white">
                                    <div class="content">
                                        <p class="fs-md">Uniquely strategize 2.0 portals after fully researched
                                            vortals. Quickly repurpose front-end metrics through</p>
                                    </div>
                                    <div class="author-img">
                                        <div class="avater-line"></div>
                                        <div class="avater">
                                            <img src="assets/img/author/author-2-1.jpg" alt="Author Image">
                                        </div>
                                    </div>
                                    <div class="author-info">
                                        <div class="info">
                                            <h3 class="fs-20 name">Moris Jonson</h3>
                                            <span class="fs-xs degi text-theme">CEO, Hosak Int. Ltd.</span>
                                        </div>
                                        <div class="testi-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                                <span style="width:100%">Rated <strong class="rating">5.00</strong>
                                                    out of 5</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="testimonial-box mb-30 bg-white">
                                    <div class="content">
                                        <p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                            do eiusmod tempor incididunt ut labore et</p>
                                    </div>
                                    <div class="author-img">
                                        <div class="avater-line"></div>
                                        <div class="avater">
                                            <img src="assets/img/author/author-2-2.jpg" alt="Author Image">
                                        </div>
                                    </div>
                                    <div class="author-info">
                                        <div class="info">
                                            <h3 class="fs-20 name">Peter Parker</h3>
                                            <span class="fs-xs degi text-theme">HR, Tech Master Ltd.</span>
                                        </div>
                                        <div class="testi-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                                <span style="width:100%">Rated <strong class="rating">5.00</strong>
                                                    out of 5</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="testimonial-box mb-30 bg-white">
                                    <div class="content">
                                        <p class="fs-md">From its medieval origins to the digital era, learn
                                            everything there is to know about ubiquitous ipsum passage </p>
                                    </div>
                                    <div class="author-img">
                                        <div class="avater-line"></div>
                                        <div class="avater">
                                            <img src="assets/img/author/author-2-3.jpg" alt="Author Image">
                                        </div>
                                    </div>
                                    <div class="author-info">
                                        <div class="info">
                                            <h3 class="fs-20 name">David Smith</h3>
                                            <span class="fs-xs degi text-theme">Founder, Ajaira LTD.</span>
                                        </div>
                                        <div class="testi-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                                <span style="width:100%">Rated <strong class="rating">5.00</strong>
                                                    out of 5</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--==============================        Blog Area        ==============================-->
    <section class="vs-blog-wrapper space-top space-md-bottom">
        <div class="container">
            <div class="row  text-center justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="section-title">
                        <span class="h3 text-theme sec-subtitle">Blog Posts</span>
                        <h2 class="h1 ">Latest News</h2>
                        <p>Proactively revolutionize granular customer service after pandemic internal or "organic"
                            sources proactive human capital rather.</p>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel wow fadeInUp" data-wow-delay="0.3s" data-slide-show="3" data-lg-slide-show="2">
                <div class="col-xl-4">
                    <div class="vs-blog blog-card">
                        <div class="blog-img">
                            <img src="assets/img/blog/b-1-1.jpg" alt="Blog Image" class="w-100">
                            <div class="blog-date">
                                <div class="day">22</div>
                                Jan 2023
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="far fa-folder"></i>Mental Health</a>
                                <a href="blog.html"><i class="fal fa-user"></i>David Smith</a>
                            </div>
                            <h3 class="blog-title h5 font-body lh-base"><a href="blog.html">Services enable process is
                                    tobe after user-centric schemas now</a></h3>
                            <a href="blog.html" class="link-btn">Read More<i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-blog blog-card">
                        <div class="blog-img">
                            <img src="assets/img/blog/b-1-2.jpg" alt="Blog Image" class="w-100">
                            <div class="blog-date">
                                <div class="day">23</div>
                                Mar 2023
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="far fa-folder"></i>Therapy</a>
                                <a href="blog.html"><i class="fal fa-user"></i>Vivi Marian</a>
                            </div>
                            <h3 class="blog-title h5 font-body lh-base"><a href="blog.html">From its medieval origins
                                    to the digital era everything there</a></h3>
                            <a href="blog.html" class="link-btn">Read More<i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-blog blog-card">
                        <div class="blog-img">
                            <img src="assets/img/blog/b-1-3.jpg" alt="Blog Image" class="w-100">
                            <div class="blog-date">
                                <div class="day">28</div>
                                Dec 2023
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="far fa-folder"></i>Acupressure </a>
                                <a href="blog.html"><i class="fal fa-user"></i>Moris John</a>
                            </div>
                            <h3 class="blog-title h5 font-body lh-base"><a href="blog.html">Latin derived from
                                    Cicero's 1st-century BC text De Fini now with</a></h3>
                            <a href="blog.html" class="link-btn">Read More<i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-blog blog-card">
                        <div class="blog-img">
                            <img src="assets/img/blog/b-1-4.jpg" alt="Blog Image" class="w-100">
                            <div class="blog-date">
                                <div class="day">22</div>
                                Jan 2023
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="far fa-folder"></i>Mental Health</a>
                                <a href="blog.html"><i class="fal fa-user"></i>David Smith</a>
                            </div>
                            <h3 class="blog-title h5 font-body lh-base"><a href="blog.html">Creation timelines the
                                    standard lorem ipsum passage vary</a></h3>
                            <a href="blog.html" class="link-btn">Read More<i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
       
@endsection
