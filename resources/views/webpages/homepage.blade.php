@extends('layouts.master')
@section('contents')
            <!--Main Slider Start-->
            <section class="main-slider clearfix">
                <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                    "effect": "fade",
                    "pagination": {
                    "el": "#main-slider-pagination",
                    "type": "bullets",
                    "clickable": true
                    },
                    "navigation": {
                    "nextEl": "#main-slider__swiper-button-next",
                    "prevEl": "#main-slider__swiper-button-prev"
                    },
                    "autoplay": {
                    "delay": 5000
                    }}'>
                    <div class="swiper-wrapper">
    
                        <div class="swiper-slide">
                            <div class="image-layer"
                                style="background-image: url(assets/images/backgrounds/main-slider-1-1.jpg);"></div>
                            <!-- /.image-layer -->
    
                            <div class="main-slider-shape-1 float-bob-x">
                                <img src="assets/images/shapes/main-slider-shape-1.png" alt="">
                            </div>
    
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="main-slider__content">
                                            <h2 class="main-slider__title">Nafuu Loan <br> for the better <br> Loan
                                                <span>Analysis.</span></h2>
                                            <p class="main-slider__text">Nafuu Loan help borrower to understand their financial standing <br> and ability 
                                                to repay a loan before taking Decision. Also It helps <br>
                                                 the borrower to identify areas for improvement in their financial situation <br>
                                                  and make informed decisions about loan applications.</p>
                                            <div class="main-slider__btn-box">
                                                <a href="about.html" class="thm-btn main-slider__btn">Let’s Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="swiper-slide">
                            <div class="image-layer"
                                style="background-image: url(assets/images/backgrounds/main-slider-1-2.jpg);"></div>
                            <!-- /.image-layer -->
    
                            <div class="main-slider-shape-1 float-bob-x">
                                <img src="assets/images/shapes/main-slider-shape-1.png" alt="">
                            </div>
    
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="main-slider__content">
                                            <h2 class="main-slider__title">Nafuu Loan <br> bring Loan <br> Lenders
                                                <span>together.</span></h2>
                                            <p class="main-slider__text">Nafuu Loan Bringing loan lenders together and 
                                                 connecting multiple <br> lenders with potential borrowers
                                                 to provide them with a range of loan options <br></p>
                                            <div class="main-slider__btn-box">
                                                <a href="about.html" class="thm-btn main-slider__btn">Let’s Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        {{-- <div class="swiper-slide">
                            <div class="image-layer"
                                style="background-image: url(assets/images/backgrounds/main-slider-1-3.jpg);"></div>
                            <!-- /.image-layer -->
    
                            <div class="main-slider-shape-1 float-bob-x">
                                <img src="assets/images/shapes/main-slider-shape-1.png" alt="">
                            </div>
    
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="main-slider__content">
                                            <h2 class="main-slider__title">Insurance <br> for the better <br> family
                                                <span>life.</span></h2>
                                            <p class="main-slider__text">Phasellus condimentum laoreet turpis, ut tincid
                                                sodales <br> in. Integer leo arcu, mollis sit amet tempor.</p>
                                            <div class="main-slider__btn-box">
                                                <a href="about.html" class="thm-btn main-slider__btn">Let’s Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
    
                    </div>
    
                    <!-- If we need navigation buttons -->
                    <div class="main-slider__nav">
                        <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                            <i class="icon-right-arrow"></i>
                        </div>
                        <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                            <i class="icon-right-arrow1"></i>
                        </div>
                    </div>
    
                </div>
            </section>
            <!--Main Slider End-->

              <!--Services One Start-->
              <section class="services-one">
                <div class="services-one__top">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5 col-lg-6">
                                <div class="services-one__top-left">
                                    <div class="section-title text-left">
                                        <div class="section-sub-title-box">
                                            <p class="section-sub-title">Our services</p>
                                            <div class="section-title-shape-1">
                                                <img src="{{ asset('assets/images/shapes/section-title-shape-1.png')}}" alt="">
                                            </div>
                                            <div class="section-title-shape-2">
                                                <img src="{{ asset('assets/images/shapes/section-title-shape-2.png')}}" alt="">
                                            </div>
                                        </div>
                                        <h2 class="section-title__title" style="font-size: 38px !important">We bring together Lenders and borrowers</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6">
                                <div class="services-one__top-right">
                                    <p class="services-one__top-text">Nafuu Loan Platform help to bring together Lenders and borrowers for better loan application</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-one__bottom">
                    <div class="services-one__container">
                        <div class="row">
                            <!--Services One Single Start-->
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                <div class="services-one__single">
                                    <div class="service-one__img">
                                        <img src="assets/images/services/services-1-1.jpg" alt="">
                                    </div>
                                    <div class="service-one__content">
                                        <div class="services-one__icon">
                                            <span class="icon-drive"></span>
                                        </div>
                                        <h2 class="service-one__title"><a href="{{ route('mortgage.loans',['type'=>'mortgage loans'])}}">Mortgage Loans</a></h2>
                                        <p class="service-one__text">Financing your dream home with a mortgage loan
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--Services One Single End-->
                            <!--Services One Single Start-->
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                <div class="services-one__single">
                                    <div class="service-one__img">
                                        <img src="assets/images/services/services-1-2.jpg" alt="">
                                    </div>
                                    <div class="service-one__content">
                                        <div class="services-one__icon">
                                            <span class="icon-family"></span>
                                        </div>
                                        <h2 class="service-one__title"><a href="{{ route('mortgage.loans',['type'=>'vehicle loans'])}}">Vehicle Loans</a></h2>
                                        <p class="service-one__text">Driving your aspirations with a vehicle loan
                                        .</p>
                                    </div>
                                </div>
                            </div>
                            <!--Services One Single End-->
                            <!--Services One Single Start-->
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                <div class="services-one__single">
                                    <div class="service-one__img">
                                        <img src="assets/images/services/services-1-3.jpg" alt="">
                                    </div>
                                    <div class="service-one__content">
                                        <div class="services-one__icon">
                                            <span class="icon-home"></span>
                                        </div>
                                        <h2 class="service-one__title"><a href="{{ route('mortgage.loans',['type'=>'home loans'])}}">Home Utilities Loans</a></h2>
                                        <p class="service-one__text">Improving your living space with a home utilities loan.
                                            </p>
                                    </div>
                                </div>
                            </div>
                            <!--Services One Single End-->
                            <!--Services One Single Start-->
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                <div class="services-one__single">
                                    <div class="service-one__img">
                                        <img src="assets/images/services/services-1-4.jpg" alt="">
                                    </div>
                                    <div class="service-one__content">
                                        <div class="services-one__icon">
                                            <span class="icon-heart-beat"></span>
                                        </div>
                                        <h2 class="service-one__title"><a href="{{ route('mortgage.loans',['type'=>'personal loans'])}}">Personal Loans</a>
                                        </h2>
                                        <p class="service-one__text">Unlock financial flexibility with a personal loan
                                            .</p>
                                    </div>
                                </div>
                            </div>
                            <!--Services One Single End-->
                            <!--Services One Single Start-->
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                                <div class="services-one__single">
                                    <div class="service-one__img">
                                        <img src="assets/images/services/services-1-5.jpg" alt="">
                                    </div>
                                    <div class="service-one__content">
                                        <div class="services-one__icon">
                                            <span class="icon-briefcase"></span>
                                        </div>
                                        <h2 class="service-one__title"><a href="{{ route('mortgage.loans',['type'=>'business loans'])}}">Business
                                                Loans</a></h2>
                                        <p class="service-one__text">Fund your business with a business loan and take it to the next level</p>
                                    </div>
                                </div>
                            </div>
                            <!--Services One Single End-->
                            <!--Services One Single Start-->
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                                <div class="services-one__single">
                                    <div class="service-one__img">
                                        <img src="assets/images/services/services-1-6.jpg" alt="">
                                    </div>
                                    <div class="service-one__content">
                                        <div class="services-one__icon">
                                            <span class="icon-fire"></span>
                                        </div>
                                        <h2 class="service-one__title"><a href="{{ route('mortgage.loans',['type'=>'construction loans'])}}">Construction Loans</a></h2>
                                        <p class="service-one__text">Build your vision with a construction loan and turn your plans into reality
                                            .</p>
                                    </div>
                                </div>
                            </div>
                            <!--Services One Single End-->
                            <!--Services One Single Start-->
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="700ms">
                                <div class="services-one__single">
                                    <div class="service-one__img">
                                        <img src="assets/images/services/services-1-7.jpg" alt="">
                                    </div>
                                    <div class="service-one__content">
                                        <div class="services-one__icon">
                                            <span class="icon-ring"></span>
                                        </div>
                                        <h2 class="service-one__title"><a href="{{ route('mortgage.loans',['type'=>'education loans'])}}">Education
                                                Loans</a></h2>
                                        <p class="service-one__text">Invest in your future attain the knowledge and skills.</p>
                                    </div>
                                </div>
                            </div>
                            <!--Services One Single End-->
                            <!--Services One Single Start-->
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="800ms">
                                <div class="services-one__single">
                                    <div class="service-one__img">
                                        <img src="assets/images/services/services-1-8.jpg" alt="">
                                    </div>
                                    <div class="service-one__content">
                                        <div class="services-one__icon">
                                            <span class="icon-plane"></span>
                                        </div>
                                        <h2 class="service-one__title"><a href="{{ route('mortgage.loans',['type'=>'other loans'])}}">Other Loans</a>
                                        </h2>
                                        <p class="service-one__text">Achieve your financial goals with a loan tailored to your needs</p>
                                    </div>
                                </div>
                            </div>
                            <!--Services One Single End-->
                        </div>
                    </div>
                </div>
            </section>
            <!--Services One End-->
    
            <!--Feature One Start-->
            <section class="feature-one">
                <div class="container">
                    <div class="section-title text-center">
                        <div class="section-sub-title-box">
                            <p class="section-sub-title">Why Nafuu Loan</p>
                            <div class="section-title-shape-1">
                                <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                            </div>
                            <div class="section-title-shape-2">
                                <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                            </div>
                        </div>
                        <h2 class="section-title__title">Few Reason to choose us</h2>
                    </div>
                    <div class="feature-one__inner">
                        <div class="row">
                            <!--Feature One Single Start-->
                            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                                <div class="feature-one__single">
                                    <div class="feature-one__single-inner">
                                        <div class="feature-one__icon">
                                            <span class="icon-insurance"></span>
                                        </div>
                                        <div class="feature-one__count"></div>
                                        <div class="feature-one__shape">
                                            <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                                        </div>
                                        <h3 class="feature-one__title"><a href="about.html">Access to lenders</a></h3>
                                        <p class="feature-one__text">We allows you to compare and apply for
                                             loans from multiple lenders, which increases your chances of finding a loan that 
                                             fits your need.</p>
                                    </div>
                                </div>
                            </div>
                            <!--Feature One Single End-->
                            <!--Feature One Single Start-->
                            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                                <div class="feature-one__single">
                                    <div class="feature-one__single-inner">
                                        <div class="feature-one__icon">
                                            <span class="icon-cashback"></span>
                                        </div>
                                        <div class="feature-one__count"></div>
                                        <div class="feature-one__shape">
                                            <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                                        </div>
                                        <h3 class="feature-one__title"><a href="about.html">Convenience</a></h3>
                                        <p class="feature-one__text">We help you to compare and apply for loans from the comfort of your own home <br><br> </p>
                                    </div>
                                </div>
                            </div>
                            <!--Feature One Single End-->
                            <!--Feature One Single Start-->
                            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                                <div class="feature-one__single">
                                    <div class="feature-one__single-inner">
                                        <div class="feature-one__icon">
                                            <span class="icon-house"></span>
                                        </div>
                                        <div class="feature-one__count"></div>
                                        <div class="feature-one__shape">
                                            <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                                        </div>
                                        <h3 class="feature-one__title"><a href="about.html">Better rates</a></h3>
                                        <p class="feature-one__text">We have a large pool of lenders which offers better interest rates. <br><br><br></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                                <div class="feature-one__single">
                                    <div class="feature-one__single-inner">
                                        <div class="feature-one__icon">
                                            <span class="icon-house"></span>
                                        </div>
                                        <div class="feature-one__count"></div>
                                        <div class="feature-one__shape">
                                            <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                                        </div>
                                        <h3 class="feature-one__title"><a href="about.html">Transparent information</a></h3>
                                        <p class="feature-one__text">We provide transparent information about loan products and rates, allowing you to compare and make decision easily</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                                <div class="feature-one__single">
                                    <div class="feature-one__single-inner">
                                        <div class="feature-one__icon">
                                            <span class="icon-house"></span>
                                        </div>
                                        <div class="feature-one__count"></div>
                                        <div class="feature-one__shape">
                                            <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                                        </div>
                                        <h3 class="feature-one__title"><a href="about.html">Time savings</a></h3>
                                        <p class="feature-one__text"> Through Nafuu Loans allow you to compare multiple 
                                            loan options in a short amount of time, saving you time and effort. <br> <br></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                                <div class="feature-one__single">
                                    <div class="feature-one__single-inner">
                                        <div class="feature-one__icon">
                                            <span class="icon-house"></span>
                                        </div>
                                        <div class="feature-one__count"></div>
                                        <div class="feature-one__shape">
                                            <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                                        </div>
                                        <h3 class="feature-one__title"><a href="about.html">Customized loan options</a></h3>
                                        <p class="feature-one__text">Through few information you provide we can
                                             match you with customized loan options that are tailored to your unique financial situation.</p>
                                    </div>
                                </div>
                            </div>
                            <!--Feature One Single End-->
                        </div>
                    </div>
                </div>
            </section>
            <!--Feature One End-->
    
@endsection