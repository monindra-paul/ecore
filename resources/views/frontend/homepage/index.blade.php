@extends('frontend.layout.app')

@section('title')
    <title>Best Website Designing Company in Kolkata | ECore TechServ - The Soul of Future Technology</title>
@endsection

@section('description')
    <meta name="description"
        content="ECore TechServ provides best Website Designing services in kolkata. Get your one stop solution for Website Development, IT Support, Graphics Designing, Digital Marketing, CCTV Survelliance Security, Hardware & Network Support. ">
@endsection

@section('keyword')
    <meta name="keywords"
        content="Website Designing, Website Development Company in Kolkata, Website Designing Company in Kolkata,IT Support Company,IT Support Company in Kolkata, IT Services in Kolkata,  CCTV Survelliance service provider.">
@endsection


@section('mainsection')
    <div id="wrapper_full" class="content_all_warpper">


        <!----==============content_all_warpper==============--->
        <!--content start-->
        <div id="content" class="site-content">




            <section class="single_banner style_one">
                <div class="image_bg">
                    <img src="{{ asset('assets-front/images/ecore/2.png') }}" class="img-fluid" alt="img">
                </div>
                <div class="image_bg2">
                    {{-- <img src="{{ asset('assets-front/images/slider/banner-single-4-bg.png') }}" class="img-fluid" --}}
                        {{-- alt="img"> --}}
                </div>
                <div class="content_box">
                    <div class="large-container">
                        <div class="row align-items-center pl-3">
                            <div class="col-lg-6" style="padding-left: 35px;">
                                <div class="section_title type_one">
                                    <div class="title_whole">
                                        <h2 class="title">
                                           Best<span style="color:#008bf9;"> Website Designing </span>Company <br> <span style="color:#008bf9;">in Kolkata</span>
                                        </h2>
                                    </div>
                                    <p>
                                        ECore TechServ provides best Website Designing services in kolkata. Get your one stop solution for Website Development, IT Support, Graphic Designing, Digital Marketing, CCTV Survelliance & Hardware Support.
                                    </p>
                                </div>
                                <div class="newsteller_simple">
                                    <div class="input_group">
                                        

                                        <a href="{{url('/about-us')}}" id="home-ec-btn" class="btn  aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">About Us</a>
                                        
                                        <a href="{{url('/remote-support')}}" id="home-ec-btn2" class="btn  aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">Get Support</a>
                                    </div>
                                </div>
                                <div class="review_box d-flex align-items-center">
                                    <div class="rimage">
                                        <img src="{{ asset('assets-front/images/ecore/home/google-icon.webp') }}"
                                            class="img-fluid" alt="img">
                                    </div>
                                    <div class="section_title type_one">
                                        <div class="title_whole">
                                            <h2 class="title"> Excellent 500+ reviews</h2>
                                        </div>
                                        <p>4.8 of 5 <small><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></small></p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="image">
                                    <img src="{{ asset('assets-front/images/ecore/home/ecore-home2.webp') }}"
                                        class="img-fluid" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section_title abso type_one">
                    <div class="title_whole">
                        <h2 class="title"> ECore</h2>
                    </div>
                </div>
            </section>



















            {{-- <!---slider-->
            <section class="slider style_two">
                <div class="owl-carousel owl_nav_block owl_dots_none theme_carousel owl-theme"
                    data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true,  "autoplayHoverPause":true , "autoplayTimeout": 7000, "smartSpeed": 1800, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>
                    <!---sldier-->
                    <div class="slide-item-content">

                        <div class="slide-item content_left">
                            <div class="auto-container">
                                <div class="row align-items-end">
                                    <div class="col-lg-7 col-md-12 col-sm-12">
                                        <div class="slider_content">
                                            <div class="bg_image animate_down">

                                            </div>
                                            <h6 class="animate_up">
                                                <img src="{{ asset('assets-front/images/slider/Icon-green.png') }}"
                                                    class="img-fluid" alt="icon" />
                                                ECore TechServ
                                            </h6>
                                            <h1 class="animate_left">Best Website Design in Kolkata</h1>

                                            <div class="button_all animate_down">
                                                <a href="{{ url('/website-development') }}" class="theme_btn">Know
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-12 col-sm-12">
                                        <div class="image animate_left">
                                            <img src="{{ asset('assets-front/images/slider/slider-image-2-1.png') }}"
                                                class="img-fluid" alt="icon" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shape animate_down">
                            <img src="{{ asset('assets-front/images/slider/slider-2-shape.png') }}" class="img-fluid"
                                alt="icon" />
                        </div>
                    </div>
                    <!---slider-->

                    <!---sldier-->
                    <div class="slide-item-content">

                        <div class="slide-item content_left">
                            <div class="auto-container">
                                <div class="row align-items-end">
                                    <div class="col-lg-7 col-md-12 col-sm-12">
                                        <div class="slider_content">
                                            <div class="bg_image animate_down">

                                            </div>
                                            <h6 class="animate_up">
                                                <img src="{{ asset('assets-front/images/slider/Icon-green.png') }}"
                                                    class="img-fluid" alt="icon" />
                                                ECore TechServ
                                            </h6>
                                            <h1 class="animate_left">Best Digital Marketing Agency in Kolkata</h1>

                                            <div class="button_all animate_down">
                                                <a href="{{ url('/digital-marketing') }}" class="theme_btn">Know More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-12 col-sm-12">
                                        <div class="image animate_left">
                                            <img src="{{ asset('assets-front/images/slider/slider-image-2-1.png') }}"
                                                class="img-fluid" alt="icon" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shape animate_down">
                            <img src="{{ asset('assets-front/images/slider/slider-2-shape.png') }}" class="img-fluid"
                                alt="icon" />
                        </div>
                    </div>
                    <!---slider-->

                    <div class="slide-item-content">

                        <div class="slide-item content_left">
                            <div class="auto-container">
                                <div class="row align-items-end">
                                    <div class="col-lg-7 col-md-12 col-sm-12">
                                        <div class="slider_content">
                                            <div class="bg_image animate_down">

                                            </div>
                                            <h6 class="animate_up">
                                                <img src="{{ asset('assets-front/images/slider/Icon-green.png') }}"
                                                    class="img-fluid" alt="icon" />
                                                ECore TechServ
                                            </h6>
                                            <h1 class="animate_left">Best Graphic Design in Kolkata</h1>

                                            <div class="button_all animate_down">
                                                <a href="{{ url('/graphic-designing') }}" class="theme_btn">Know More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-12 col-sm-12">
                                        <div class="image animate_left">
                                            <img src="{{ asset('assets-front/images/slider/slider-image-2-1.png') }}"
                                                class="img-fluid" alt="icon" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shape animate_down">
                            <img src="{{ asset('assets-front/images/slider/slider-2-shape.png') }}" class="img-fluid"
                                alt="icon" />
                        </div>
                    </div>


                </div>
            </section>
            <!---slider-end---> --}}





            <!-- ***** Main Banner Area Start ***** -->
            {{-- <section class="section main-banner" id="top" data-section="section1">
                <video autoplay muted loop id="bg-video">
                    <source src="{{ asset('assets-front/images/ecore/course-video.mp4') }}" type="video/mp4" />
                </video>

                <div class="video-overlay header-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center9">
                                <div class="caption">
                                    <h6>Great Welcome To</h6>
                                    <h1 style="color: #fff">ECORE TECHSERV</h1>
                                    <h6>The Soulk of Future Technology</h6>
                                    <p>Our business depends on your IT systems. We’re confident that we are the only IT
                                        solutions service business in India.</a>.</p>
                                    <div class="main-button-red">
                                        <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- ***** Main Banner Area End ***** -->











            <section class="content-section ">
                <!---============spacing==========--->

                <!---============spacing==========--->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12  position-relative z_2">

                            <!---============spacing==========--->
                            <div class="pd_bottom_40" style="margin-top: -75px;"></div>
                            <!---============spacing==========--->
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="icon_box_only trans type_one type_two">
                                        <div class="icon_box_in trans">
                                            <div class="icon">
                                                <i class=" flaticon-agile"></i>
                                            </div>
                                            <div class="title_18">
                                                <a href="#">
                                                    Fast Service</a>
                                            </div>
                                            <div class="title_18">
                                                <p>Get instant service when ever you want for any solutions. </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="icon_box_only trans type_one type_two">
                                        <div class="icon_box_in trans">
                                            <div class="icon">
                                                <i class=" flaticon-process"></i>
                                            </div>
                                            <div class="title_18">
                                                <a href="#">
                                                    Cost Effective</a>
                                            </div>
                                            <div class="title_18">
                                                <p>We keep our cost very low, keeping our customers in mind. </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="icon_box_only trans type_one type_two">
                                        <div class="icon_box_in trans">
                                            <div class="icon">
                                                <i class=" flaticon-money-bag"></i>
                                            </div>

                                            <div class="title_18">
                                                <a href="#">
                                                    24 X 7 Support</a>
                                            </div>
                                            <div class="title_18">
                                                <p>We’re driven to becoming the best online support system. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>


                    </div>
                </div>
                <!---============spacing==========--->
                <div class="pd_bottom_70"></div>
                <!---============spacing==========--->
            </section>


            <section class="about-section">
                <!---============spacing==========--->
                <div class="pd_top_90"></div>
                <!---============spacing==========--->
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="image">
                                <img src="{{ asset('assets-front/images/ecore/home/our-mission-home-page2.svg') }}"
                                    class="img-fluid" alt="img" />
                            </div>
                            <!---============spacing==========--->
                            <div class="pd_bottom_40"></div>
                            <!---============spacing==========--->
                        </div>
                        <div class="col-lg-6">
                            <div class="section_title type_two">
                                <h4 class="sm_title">ECore TechServ</h4>
                                <div class="title_whole">
                                    <h2 class="title"> We're on a Mission to
                                        Change Your View of Technical Solution in your Business</h2>
                                </div>
                            </div>
                            <!---============spacing==========--->
                            <div class="pd_bottom_30"></div>
                            <!---============spacing==========--->
                            <div class="position-relative border_left_abolute_5px pd_left_40">
                                ECore Techserv is a values-driven Tech service company dedicated to empowering our
                                customers.
                            </div>
                            <!---============spacing==========--->
                            <div class="pd_bottom_40"></div>
                            <!---============spacing==========--->
                            <div class="row gutter_15px pd_left_40">
                                <div class="col-lg-5">
                                    <div class="theme_btn_all">
                                        <a href="{{ url('/about-us') }}" class="theme_btn color_two rotate big">
                                            About Us <span> <i class=" fi-rr-arrow-small-up"></i></span>
                                        </a>
                                    </div>
                                    <!---============spacing==========--->
                                    <div class="pd_bottom_20"></div>
                                    <!---============spacing==========--->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!---============spacing==========--->
                <div class="pd_bottom_40"></div>
                <!---============spacing==========--->
            </section>


            <section class="service-section-one">
                <!---============spacing==========--->
                <div class="pd_top_90"></div>
                <!---============spacing==========--->
                <div class="container">
                    <div class="row align-items-end text-center">
                        <div class="col-lg-12">
                            <div class="section_title type_one">
                                <h4 class="sm_title">Our Services</h4>
                                <div class="title_whole">
                                    <h2 class="title">Introduce Our Best<br>
                                        Tech Services for Business</h2>
                                </div>
                            </div>
                            <!---============spacing==========--->
                            <div class="pd_bottom_20"></div>
                            <!---============spacing==========--->
                        </div>

                    </div>
                    <!---============spacing==========--->
                    <div class="pd_bottom_20"></div>
                    <!---============spacing==========--->
                    <section class="service_post position-relative">
                        <div class="row">

                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="service_box type_four hover_1_get hover_1 color_three">
                                    <div class="oh ho_1"></div>
                                    <div class="oh ho_2"></div>
                                    <div class="oh ho_3"></div>
                                    <div class="oh ho_4"></div>
                                    <div class="content_box trans">
                                        <div class="top">
                                            <div class="icon trans">
                                                <i class=" flaticon-salary trans"></i>
                                            </div>
                                            <div class="steps trans">1</div>
                                            <h4 class="title_24 trans">
                                                <a href="{{ url('/hardware-support') }}">
                                                    Hardware Support</a>
                                            </h4>
                                        </div>
                                        <div class="line_box">
                                            <div class="line"></div>
                                        </div>
                                        <div class="bottom">
                                            <p class="trans">
                                                Troubleshooting is the process of diagnosing the source of a problem. It is
                                                used to fix problems with hardware, software, and many other products.</p>
                                            <a href="{{ url('/hardware-support') }}" class="rd_more">
                                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M5.60161 0H19.6641C19.9128 0 20.1512 0.0987719 20.327 0.274587C20.5028 0.450403 20.6016 0.68886 20.6016 0.9375V15C20.6016 15.2486 20.5028 15.4871 20.327 15.6629C20.1512 15.8387 19.9128 15.9375 19.6641 15.9375C19.4155 15.9375 19.177 15.8387 19.0012 15.6629C18.8254 15.4871 18.7266 15.2486 18.7266 15V3.2L1.57661 20.35C1.3989 20.5156 1.16384 20.6058 0.920961 20.6015C0.678085 20.5972 0.446354 20.4988 0.274588 20.327C0.102821 20.1553 0.00443133 19.9235 0.000146059 19.6807C-0.00413921 19.4378 0.0860148 19.2027 0.251615 19.025L17.4016 1.875H5.60161C5.35297 1.875 5.11452 1.77623 4.9387 1.60041C4.76289 1.4246 4.66411 1.18614 4.66411 0.9375C4.66411 0.68886 4.76289 0.450403 4.9387 0.274587C5.11452 0.0987719 5.35297 0 5.60161 0Z"
                                                        fill="white"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="service_box type_four hover_1_get hover_1 color_three">
                                    <div class="oh ho_1"></div>
                                    <div class="oh ho_2"></div>
                                    <div class="oh ho_3"></div>
                                    <div class="oh ho_4"></div>
                                    <div class="content_box trans">
                                        <div class="top">
                                            <div class="icon trans">
                                                <i class=" flaticon-management trans"></i>
                                            </div>
                                            <div class="steps trans">2</div>
                                            <h4 class="title_24 trans">
                                                <a href="{{ url('/network-security') }}">Network & Security</a>
                                            </h4>
                                        </div>
                                        <div class="line_box">
                                            <div class="line"></div>
                                        </div>
                                        <div class="bottom">
                                            <p class="trans">
                                                A computer network is a set of computers connected together for sharing
                                                resources. Security is also sucure your network communications.</p>
                                            <a href="{{ url('/network-security') }}" class="rd_more">
                                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M5.60161 0H19.6641C19.9128 0 20.1512 0.0987719 20.327 0.274587C20.5028 0.450403 20.6016 0.68886 20.6016 0.9375V15C20.6016 15.2486 20.5028 15.4871 20.327 15.6629C20.1512 15.8387 19.9128 15.9375 19.6641 15.9375C19.4155 15.9375 19.177 15.8387 19.0012 15.6629C18.8254 15.4871 18.7266 15.2486 18.7266 15V3.2L1.57661 20.35C1.3989 20.5156 1.16384 20.6058 0.920961 20.6015C0.678085 20.5972 0.446354 20.4988 0.274588 20.327C0.102821 20.1553 0.00443133 19.9235 0.000146059 19.6807C-0.00413921 19.4378 0.0860148 19.2027 0.251615 19.025L17.4016 1.875H5.60161C5.35297 1.875 5.11452 1.77623 4.9387 1.60041C4.76289 1.4246 4.66411 1.18614 4.66411 0.9375C4.66411 0.68886 4.76289 0.450403 4.9387 0.274587C5.11452 0.0987719 5.35297 0 5.60161 0Z"
                                                        fill="white"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="service_box type_four hover_1_get hover_1 color_three">
                                    <div class="oh ho_1"></div>
                                    <div class="oh ho_2"></div>
                                    <div class="oh ho_3"></div>
                                    <div class="oh ho_4"></div>
                                    <div class="content_box trans">
                                        <div class="top">
                                            <div class="icon trans">
                                                <i class=" flaticon-business-trip trans"></i>
                                            </div>
                                            <div class="steps trans">3</div>
                                            <h4 class="title_24 trans">
                                                <a href="{{ url('/cctv-surveillance') }}">CCTV Surveillance</a>
                                            </h4>
                                        </div>
                                        <div class="line_box">
                                            <div class="line"></div>
                                        </div>
                                        <div class="bottom">
                                            <p class="trans">
                                                Surveillance is the monitoring of behavior, activities from a distance by
                                                means of electronic equipment, such as closed-circuit television (CCTV).</p>
                                            <a href="{{ url('/cctv-surveillance') }}" class="rd_more">
                                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M5.60161 0H19.6641C19.9128 0 20.1512 0.0987719 20.327 0.274587C20.5028 0.450403 20.6016 0.68886 20.6016 0.9375V15C20.6016 15.2486 20.5028 15.4871 20.327 15.6629C20.1512 15.8387 19.9128 15.9375 19.6641 15.9375C19.4155 15.9375 19.177 15.8387 19.0012 15.6629C18.8254 15.4871 18.7266 15.2486 18.7266 15V3.2L1.57661 20.35C1.3989 20.5156 1.16384 20.6058 0.920961 20.6015C0.678085 20.5972 0.446354 20.4988 0.274588 20.327C0.102821 20.1553 0.00443133 19.9235 0.000146059 19.6807C-0.00413921 19.4378 0.0860148 19.2027 0.251615 19.025L17.4016 1.875H5.60161C5.35297 1.875 5.11452 1.77623 4.9387 1.60041C4.76289 1.4246 4.66411 1.18614 4.66411 0.9375C4.66411 0.68886 4.76289 0.450403 4.9387 0.274587C5.11452 0.0987719 5.35297 0 5.60161 0Z"
                                                        fill="white"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="service_box type_four hover_1_get hover_1 color_three">
                                    <div class="oh ho_1"></div>
                                    <div class="oh ho_2"></div>
                                    <div class="oh ho_3"></div>
                                    <div class="oh ho_4"></div>
                                    <div class="content_box trans">
                                        <div class="top">
                                            <div class="icon trans">
                                                <i class=" flaticon-insurance-2 trans"></i>
                                            </div>
                                            <div class="steps trans">4</div>
                                            <h4 class="title_24 trans">
                                                <a href="{{ url('/website-development') }}">Website Development</a>
                                            </h4>
                                        </div>
                                        <div class="line_box">
                                            <div class="line"></div>
                                        </div>
                                        <div class="bottom">
                                            <p class="trans">
                                                Web design is creates the overall look and feel when you're using a website.
                                                It's the process of planning and building the elements of your website.</p>
                                            <a href="{{ url('/website-development') }}" class="rd_more">
                                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M5.60161 0H19.6641C19.9128 0 20.1512 0.0987719 20.327 0.274587C20.5028 0.450403 20.6016 0.68886 20.6016 0.9375V15C20.6016 15.2486 20.5028 15.4871 20.327 15.6629C20.1512 15.8387 19.9128 15.9375 19.6641 15.9375C19.4155 15.9375 19.177 15.8387 19.0012 15.6629C18.8254 15.4871 18.7266 15.2486 18.7266 15V3.2L1.57661 20.35C1.3989 20.5156 1.16384 20.6058 0.920961 20.6015C0.678085 20.5972 0.446354 20.4988 0.274588 20.327C0.102821 20.1553 0.00443133 19.9235 0.000146059 19.6807C-0.00413921 19.4378 0.0860148 19.2027 0.251615 19.025L17.4016 1.875H5.60161C5.35297 1.875 5.11452 1.77623 4.9387 1.60041C4.76289 1.4246 4.66411 1.18614 4.66411 0.9375C4.66411 0.68886 4.76289 0.450403 4.9387 0.274587C5.11452 0.0987719 5.35297 0 5.60161 0Z"
                                                        fill="white"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="service_box type_four hover_1_get hover_1 color_three">
                                    <div class="oh ho_1"></div>
                                    <div class="oh ho_2"></div>
                                    <div class="oh ho_3"></div>
                                    <div class="oh ho_4"></div>
                                    <div class="content_box trans">
                                        <div class="top">
                                            <div class="icon trans">
                                                <i class=" flaticon-travel-insurance trans"></i>
                                            </div>
                                            <div class="steps trans">5</div>
                                            <h4 class="title_24 trans">
                                                <a href="{{ url('/digital-marketing') }}">Digital Marketing</a>
                                            </h4>
                                        </div>
                                        <div class="line_box">
                                            <div class="line"></div>
                                        </div>
                                        <div class="bottom">
                                            <p class="trans">
                                                Social media marketing is a powerful way for businesses of all sizes to
                                                reach prospects and customers. like Facebook, Instagram, & LinkedIn.</p>
                                            <a href="{{ url('/digital-marketing') }}" class="rd_more">
                                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M5.60161 0H19.6641C19.9128 0 20.1512 0.0987719 20.327 0.274587C20.5028 0.450403 20.6016 0.68886 20.6016 0.9375V15C20.6016 15.2486 20.5028 15.4871 20.327 15.6629C20.1512 15.8387 19.9128 15.9375 19.6641 15.9375C19.4155 15.9375 19.177 15.8387 19.0012 15.6629C18.8254 15.4871 18.7266 15.2486 18.7266 15V3.2L1.57661 20.35C1.3989 20.5156 1.16384 20.6058 0.920961 20.6015C0.678085 20.5972 0.446354 20.4988 0.274588 20.327C0.102821 20.1553 0.00443133 19.9235 0.000146059 19.6807C-0.00413921 19.4378 0.0860148 19.2027 0.251615 19.025L17.4016 1.875H5.60161C5.35297 1.875 5.11452 1.77623 4.9387 1.60041C4.76289 1.4246 4.66411 1.18614 4.66411 0.9375C4.66411 0.68886 4.76289 0.450403 4.9387 0.274587C5.11452 0.0987719 5.35297 0 5.60161 0Z"
                                                        fill="white"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="service_box type_four hover_1_get hover_1 color_three">
                                    <div class="oh ho_1"></div>
                                    <div class="oh ho_2"></div>
                                    <div class="oh ho_3"></div>
                                    <div class="oh ho_4"></div>
                                    <div class="content_box trans">
                                        <div class="top">
                                            <div class="icon trans">
                                                <i class=" flaticon-house trans"></i>
                                            </div>
                                            <div class="steps trans">6</div>
                                            <h4 class="title_24 trans">
                                                <a href="{{ route('service.graphics') }}">Graphics Design</a>
                                            </h4>
                                        </div>
                                        <div class="line_box">
                                            <div class="line"></div>
                                        </div>
                                        <div class="bottom">
                                            <p class="trans">
                                                Graphic design can be used by companies to promote and sell products through
                                                advertising, by websites to convey complicated information through
                                                infographics. </p>
                                            <a href="{{ route('service.graphics') }}" class="rd_more">
                                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M5.60161 0H19.6641C19.9128 0 20.1512 0.0987719 20.327 0.274587C20.5028 0.450403 20.6016 0.68886 20.6016 0.9375V15C20.6016 15.2486 20.5028 15.4871 20.327 15.6629C20.1512 15.8387 19.9128 15.9375 19.6641 15.9375C19.4155 15.9375 19.177 15.8387 19.0012 15.6629C18.8254 15.4871 18.7266 15.2486 18.7266 15V3.2L1.57661 20.35C1.3989 20.5156 1.16384 20.6058 0.920961 20.6015C0.678085 20.5972 0.446354 20.4988 0.274588 20.327C0.102821 20.1553 0.00443133 19.9235 0.000146059 19.6807C-0.00413921 19.4378 0.0860148 19.2027 0.251615 19.025L17.4016 1.875H5.60161C5.35297 1.875 5.11452 1.77623 4.9387 1.60041C4.76289 1.4246 4.66411 1.18614 4.66411 0.9375C4.66411 0.68886 4.76289 0.450403 4.9387 0.274587C5.11452 0.0987719 5.35297 0 5.60161 0Z"
                                                        fill="white"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="service_box type_four hover_1_get hover_1 color_three">
                                    <div class="oh ho_1"></div>
                                    <div class="oh ho_2"></div>
                                    <div class="oh ho_3"></div>
                                    <div class="oh ho_4"></div>
                                    <div class="content_box trans">
                                        <div class="top">
                                            <div class="icon trans">
                                                <i class=" flaticon-house trans"></i>
                                            </div>
                                            <div class="steps trans">6</div>
                                            <h4 class="title_24 trans">
                                                <a href="{{ url('/app-development') }}">App Development</a>
                                            </h4>
                                        </div>
                                        <div class="line_box">
                                            <div class="line"></div>
                                        </div>
                                        <div class="bottom">
                                            <p class="trans">
                                                App development is the creation of software to run on mobile devices and
                                                optimized to take advantage of those products' unique features and
                                                accesibility.</p>
                                            <a href="{{ url('/app-development') }}" class="rd_more">
                                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M5.60161 0H19.6641C19.9128 0 20.1512 0.0987719 20.327 0.274587C20.5028 0.450403 20.6016 0.68886 20.6016 0.9375V15C20.6016 15.2486 20.5028 15.4871 20.327 15.6629C20.1512 15.8387 19.9128 15.9375 19.6641 15.9375C19.4155 15.9375 19.177 15.8387 19.0012 15.6629C18.8254 15.4871 18.7266 15.2486 18.7266 15V3.2L1.57661 20.35C1.3989 20.5156 1.16384 20.6058 0.920961 20.6015C0.678085 20.5972 0.446354 20.4988 0.274588 20.327C0.102821 20.1553 0.00443133 19.9235 0.000146059 19.6807C-0.00413921 19.4378 0.0860148 19.2027 0.251615 19.025L17.4016 1.875H5.60161C5.35297 1.875 5.11452 1.77623 4.9387 1.60041C4.76289 1.4246 4.66411 1.18614 4.66411 0.9375C4.66411 0.68886 4.76289 0.450403 4.9387 0.274587C5.11452 0.0987719 5.35297 0 5.60161 0Z"
                                                        fill="white"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="service_box type_four hover_1_get hover_1 color_three">
                                    <div class="oh ho_1"></div>
                                    <div class="oh ho_2"></div>
                                    <div class="oh ho_3"></div>
                                    <div class="oh ho_4"></div>
                                    <div class="content_box trans">
                                        <div class="top">
                                            <div class="icon trans">
                                                <i class=" flaticon-house trans"></i>
                                            </div>
                                            <div class="steps trans">6</div>
                                            <h4 class="title_24 trans">
                                                <a href="{{ url('/software-development') }}">Software Development</a>
                                            </h4>
                                        </div>
                                        <div class="line_box">
                                            <div class="line"></div>
                                        </div>
                                        <div class="bottom">
                                            <p class="trans">
                                                Software development refers to a set of computer science activities
                                                dedicated to the process of creating, designing, deploying and supporting
                                                software. </p>
                                            <a href="{{ url('/software-development') }}" class="rd_more">
                                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M5.60161 0H19.6641C19.9128 0 20.1512 0.0987719 20.327 0.274587C20.5028 0.450403 20.6016 0.68886 20.6016 0.9375V15C20.6016 15.2486 20.5028 15.4871 20.327 15.6629C20.1512 15.8387 19.9128 15.9375 19.6641 15.9375C19.4155 15.9375 19.177 15.8387 19.0012 15.6629C18.8254 15.4871 18.7266 15.2486 18.7266 15V3.2L1.57661 20.35C1.3989 20.5156 1.16384 20.6058 0.920961 20.6015C0.678085 20.5972 0.446354 20.4988 0.274588 20.327C0.102821 20.1553 0.00443133 19.9235 0.000146059 19.6807C-0.00413921 19.4378 0.0860148 19.2027 0.251615 19.025L17.4016 1.875H5.60161C5.35297 1.875 5.11452 1.77623 4.9387 1.60041C4.76289 1.4246 4.66411 1.18614 4.66411 0.9375C4.66411 0.68886 4.76289 0.450403 4.9387 0.274587C5.11452 0.0987719 5.35297 0 5.60161 0Z"
                                                        fill="white"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="service_box type_four hover_1_get hover_1 color_three">
                                    <div class="oh ho_1"></div>
                                    <div class="oh ho_2"></div>
                                    <div class="oh ho_3"></div>
                                    <div class="oh ho_4"></div>
                                    <div class="content_box trans">
                                        <div class="top">
                                            <div class="icon trans">
                                                <i class=" flaticon-house trans"></i>
                                            </div>
                                            <div class="steps trans">6</div>
                                            <h4 class="title_24 trans">
                                                <a href="{{ url('/cloud-services') }}">Cloud Services</a>
                                            </h4>
                                        </div>
                                        <div class="line_box">
                                            <div class="line"></div>
                                        </div>
                                        <div class="bottom">
                                            <p class="trans">
                                                cloud computing is the delivery of computing services including servers,
                                                storage, databases, networking, software and analytics over the Internet.
                                            </p>
                                            <a href="{{ url('/cloud-services') }}" class="rd_more">
                                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M5.60161 0H19.6641C19.9128 0 20.1512 0.0987719 20.327 0.274587C20.5028 0.450403 20.6016 0.68886 20.6016 0.9375V15C20.6016 15.2486 20.5028 15.4871 20.327 15.6629C20.1512 15.8387 19.9128 15.9375 19.6641 15.9375C19.4155 15.9375 19.177 15.8387 19.0012 15.6629C18.8254 15.4871 18.7266 15.2486 18.7266 15V3.2L1.57661 20.35C1.3989 20.5156 1.16384 20.6058 0.920961 20.6015C0.678085 20.5972 0.446354 20.4988 0.274588 20.327C0.102821 20.1553 0.00443133 19.9235 0.000146059 19.6807C-0.00413921 19.4378 0.0860148 19.2027 0.251615 19.025L17.4016 1.875H5.60161C5.35297 1.875 5.11452 1.77623 4.9387 1.60041C4.76289 1.4246 4.66411 1.18614 4.66411 0.9375C4.66411 0.68886 4.76289 0.450403 4.9387 0.274587C5.11452 0.0987719 5.35297 0 5.60161 0Z"
                                                        fill="white"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>



                    </section>
                </div>

                <!---============spacing==========--->
                <div class="pd_bottom_60"></div>
                <!---============spacing==========--->
            </section>




            <section class="content-section bg_light_2">
                <!---============spacing==========--->
                <div class="pd_top_95"></div>
                <!---============spacing==========--->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9  position-relative z_2">
                            <div class="row">
                                <div class="col-lg-9 pd_right_70">
                                    <div class="section_title type_two">
                                        <h4 class="sm_title"> Our Features</h4>
                                        <div class="title_whole">
                                            <h2 class="title"> Grow Your Business
                                                with Our Features</h2>
                                        </div>
                                        <!---============spacing==========--->
                                        <div class="pd_bottom_5"></div>
                                        <!---============spacing==========--->
                                        <p> Our approach to service is uniquely built around what we know works…and what we
                                            know doesn’t work. With over 100 verified sector in industry and agencies will
                                            rely on old tactics that no longer work, or guess with new tactics that they
                                            hope will stick.</p>
                                    </div>
                                </div>
                            </div>
                            <!---============spacing==========--->
                            <div class="pd_bottom_40"></div>
                            <!---============spacing==========--->
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="icon_box_only trans type_one type_two">
                                        <div class="icon_box_in trans">
                                            <div class="icon">
                                                <i class=" flaticon-agile"></i>
                                            </div>
                                            <div class="title_18">
                                                <a href="#">
                                                    Presentation
                                                </a>
                                            </div>
                                            <p>Get free demo and pre presentation for every projects</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="icon_box_only trans type_one type_two">
                                        <div class="icon_box_in trans">
                                            <div class="icon">
                                                <i class=" flaticon-process"></i>
                                            </div>
                                            <div class="title_18">
                                                <a href="#">
                                                    Analysis</a>
                                            </div>
                                            <p>We have best analyst and reseaech team for you..</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="icon_box_only trans type_one type_two">
                                        <div class="icon_box_in trans">
                                            <div class="icon">
                                                <i class=" flaticon-money-bag"></i>
                                            </div>
                                            <div class="title_18">
                                                <a href="#">
                                                    Expert Advice</a>
                                            </div>
                                            <p>Our experts gives you better suggestion before start.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="icon_box_only trans type_one type_two">
                                        <div class="icon_box_in trans">
                                            <div class="icon">
                                                <i class=" flaticon-cyber-security"></i>
                                            </div>
                                            <div class="title_18">
                                                <a href="#">
                                                    Development
                                                </a>
                                            </div>
                                            <p>After analysis and research we develop your projects.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 ">
                            <div class="image_box_only  type_one  mr_top_minus_10">
                                {{-- <svg width="584" height="361" viewBox="0 0 584 361" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M511.94 27.9446C450.328 34.2751 426.172 86.6367 388.192 42.1471C376.849 28.8672 369.496 15.8049 356.881 7.85635C320.869 -14.8308 288.183 39.7147 254.098 21.6142C232.361 10.0692 201.495 -12.2949 160.749 11.4556C139.809 23.6643 131.75 43.9955 121.113 68.4992C98.9077 119.645 51.9621 120.301 18.0526 171.855C-10.8735 215.844 -1.72306 261.738 34.5651 282.861C76.3006 307.166 118.003 290.991 175.305 284.117C225.771 278.064 241.38 321.316 288.013 349.769C320.203 369.405 356.398 361.394 387.85 339.164C428.965 310.102 443.933 276.977 463.164 237.902C484.401 194.736 514.067 182.433 539.686 166.375C618.882 116.728 578.36 21.1282 511.94 27.9446Z"
                                        fill="#2D947A"></path>
                                </svg> --}}
                                <div class="image one">
                                    <img
                                        src="{{ asset('assets-front/images/ecore/home/Grow-your-business-with-our-features23.svg') }}" />
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <!---============spacing==========--->
                <div class="pd_bottom_70"></div>
                <!---============spacing==========--->
            </section>


            <section class="about-section position-relative">
                <!---============spacing==========--->
                <div class="pd_top_20"></div>
                <!---============spacing==========--->
                <div class="ab_img_left_bottom z_minus_1">
                    <img src="{{ asset('assets-front/images/bg-1.png') }}" class="img-fluid" alt="img" />
                </div>
                <div class="large-container">
                    <div class="row align-items-start">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="image_box">
                                <img src="{{ asset('assets-front/images/ecore/home/business-understand.webp') }}"
                                    class="img-fluid" alt="img" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 pd_left_30">
                            <div class="section_title type_one">
                                <h4 class="sm_title">Our Advantages</h4>
                                <div class="title_whole">
                                    <h2 class="title"> We Understanding
                                        Your Business </h2>
                                </div>
                            </div>
                            <!---============spacing==========--->
                            <div class="mr_bottom_20"></div>
                            <!---============spacing==========--->
                            <div class="fom_tab_box custom_tabs only_tab_content">
                                <ul class="nav nav-tabs links trans" role="tablist">
                                    <li class="nav-item">
                                        <button class="nav-link active" id="aboutuss-tabtab" data-bs-toggle="tab"
                                            data-bs-target="#aboutuss" type="button" role="tab"
                                            aria-controls="aboutuss" aria-selected="false">
                                            Features <svg width="12" height="12" viewBox="0 0 12 12"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 11L11 1M11 1H3.5M11 1V8.5" stroke="white" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </button>
                                    </li>
                                </ul>

                                <div class="s_tabs_content tab-content">
                                    <div class="tab-pane  active" id="aboutuss" role="tabpanel"
                                        aria-labelledby="aboutuss-tabtab">
                                        <div class="tab_content_box">
                                            <div class="content">
                                                ECore TechServ is well known for its SEO services. We provide best and low
                                                cost SEO services &
                                                ECore TechServ is famous for its SEO service.
                                                <br>
                                                We use modern architectures, technical systems and trending technologies to
                                                perform best.
                                            </div>
                                            <div class="d-flex">
                                                <ul>
                                                    <li>
                                                        <svg width="25" height="25" viewBox="0 0 25 25"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="12.5" cy="12.5" r="12.5"
                                                                fill="#36DB9F">
                                                            </circle>
                                                            <g>
                                                                <path
                                                                    d="M11.8363 18.7066C12.2244 19.0994 13.0886 18.9692 13.1817 18.3516C13.7607 14.5175 16.6577 11.2829 18.85 8.23494C19.4579 7.39031 18.0602 6.58795 17.4602 7.42252C15.4568 10.2075 12.9317 13.138 11.9439 16.5174C10.815 15.3637 9.68161 14.221 8.41548 13.2072C7.61364 12.5649 6.46665 13.6965 7.27713 14.3455C8.92674 15.6668 10.3523 17.2076 11.8363 18.7066Z"
                                                                    fill="white"></path>
                                                            </g>
                                                            <defs>
                                                                <clipPath>
                                                                    <rect width="12" height="12" fill="white"
                                                                        transform="translate(7 7)"></rect>
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                        <span>One Stop Solutions
                                                            <p>ECore is one stop source business solution where multiple
                                                                services are offered for your business. </p>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <svg width="25" height="25" viewBox="0 0 25 25"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="12.5" cy="12.5" r="12.5"
                                                                fill="#36DB9F">
                                                            </circle>
                                                            <g>
                                                                <path
                                                                    d="M11.8363 18.7066C12.2244 19.0994 13.0886 18.9692 13.1817 18.3516C13.7607 14.5175 16.6577 11.2829 18.85 8.23494C19.4579 7.39031 18.0602 6.58795 17.4602 7.42252C15.4568 10.2075 12.9317 13.138 11.9439 16.5174C10.815 15.3637 9.68161 14.221 8.41548 13.2072C7.61364 12.5649 6.46665 13.6965 7.27713 14.3455C8.92674 15.6668 10.3523 17.2076 11.8363 18.7066Z"
                                                                    fill="white"></path>
                                                            </g>
                                                            <defs>
                                                                <clipPath>
                                                                    <rect width="12" height="12" fill="white"
                                                                        transform="translate(7 7)"></rect>
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                        <span> Fastest Service
                                                            <p>We asured to client get most fastest services based on
                                                                client's needs and requirements for any solutions.</p>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <svg width="25" height="25" viewBox="0 0 25 25"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="12.5" cy="12.5" r="12.5"
                                                                fill="#36DB9F">
                                                            </circle>
                                                            <g>
                                                                <path
                                                                    d="M11.8363 18.7066C12.2244 19.0994 13.0886 18.9692 13.1817 18.3516C13.7607 14.5175 16.6577 11.2829 18.85 8.23494C19.4579 7.39031 18.0602 6.58795 17.4602 7.42252C15.4568 10.2075 12.9317 13.138 11.9439 16.5174C10.815 15.3637 9.68161 14.221 8.41548 13.2072C7.61364 12.5649 6.46665 13.6965 7.27713 14.3455C8.92674 15.6668 10.3523 17.2076 11.8363 18.7066Z"
                                                                    fill="white"></path>
                                                            </g>
                                                            <defs>
                                                                <clipPath>
                                                                    <rect width="12" height="12" fill="white"
                                                                        transform="translate(7 7)"></rect>
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                        <span>Cost Effective
                                                            <p>We keep our cost very low, keeping our customers in mind. We
                                                                are trying to done every project in clints' budget.</p>
                                                        </span>
                                                    </li>

                                                </ul>
                                                <ul>

                                                    <li>
                                                        <svg width="25" height="25" viewBox="0 0 25 25"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="12.5" cy="12.5" r="12.5"
                                                                fill="#36DB9F">
                                                            </circle>
                                                            <g>
                                                                <path
                                                                    d="M11.8363 18.7066C12.2244 19.0994 13.0886 18.9692 13.1817 18.3516C13.7607 14.5175 16.6577 11.2829 18.85 8.23494C19.4579 7.39031 18.0602 6.58795 17.4602 7.42252C15.4568 10.2075 12.9317 13.138 11.9439 16.5174C10.815 15.3637 9.68161 14.221 8.41548 13.2072C7.61364 12.5649 6.46665 13.6965 7.27713 14.3455C8.92674 15.6668 10.3523 17.2076 11.8363 18.7066Z"
                                                                    fill="white"></path>
                                                            </g>
                                                            <defs>
                                                                <clipPath>
                                                                    <rect width="12" height="12" fill="white"
                                                                        transform="translate(7 7)"></rect>
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                        <span> Experience Team
                                                            <p>We have our most experience team annd it's essential for the
                                                                success of any project in the workplace. </p>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <svg width="25" height="25" viewBox="0 0 25 25"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="12.5" cy="12.5" r="12.5"
                                                                fill="#36DB9F">
                                                            </circle>
                                                            <g>
                                                                <path
                                                                    d="M11.8363 18.7066C12.2244 19.0994 13.0886 18.9692 13.1817 18.3516C13.7607 14.5175 16.6577 11.2829 18.85 8.23494C19.4579 7.39031 18.0602 6.58795 17.4602 7.42252C15.4568 10.2075 12.9317 13.138 11.9439 16.5174C10.815 15.3637 9.68161 14.221 8.41548 13.2072C7.61364 12.5649 6.46665 13.6965 7.27713 14.3455C8.92674 15.6668 10.3523 17.2076 11.8363 18.7066Z"
                                                                    fill="white"></path>
                                                            </g>
                                                            <defs>
                                                                <clipPath>
                                                                    <rect width="12" height="12" fill="white"
                                                                        transform="translate(7 7)"></rect>
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                        <span>Project Work
                                                            <p>Every project is managed with great effort and
                                                                professionalism, so client can esaily trust our project
                                                                management system </p>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <svg width="25" height="25" viewBox="0 0 25 25"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="12.5" cy="12.5" r="12.5"
                                                                fill="#36DB9F">
                                                            </circle>
                                                            <g>
                                                                <path
                                                                    d="M11.8363 18.7066C12.2244 19.0994 13.0886 18.9692 13.1817 18.3516C13.7607 14.5175 16.6577 11.2829 18.85 8.23494C19.4579 7.39031 18.0602 6.58795 17.4602 7.42252C15.4568 10.2075 12.9317 13.138 11.9439 16.5174C10.815 15.3637 9.68161 14.221 8.41548 13.2072C7.61364 12.5649 6.46665 13.6965 7.27713 14.3455C8.92674 15.6668 10.3523 17.2076 11.8363 18.7066Z"
                                                                    fill="white"></path>
                                                            </g>
                                                            <defs>
                                                                <clipPath>
                                                                    <rect width="12" height="12" fill="white"
                                                                        transform="translate(7 7)"></rect>
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                        <span>Online Support
                                                            <p>ECore is always able to give services to customer phisically
                                                                or online. Just connect and get solutions any time. </p>
                                                        </span>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!---============spacing==========--->
                            <div class="pd_bottom_30"></div>
                            <!---============spacing==========--->

                            <!---============spacing==========--->
                            <div class="pd_bottom_70"></div>
                            <!---============spacing==========--->
                        </div>
                    </div>
                </div>
                <div class="ab_img_right_bottom z_minus_1">
                    <img src="{{ asset('assets-front/images/bg-2.png') }}" class="img-fluid" alt="img" />
                </div>
            </section>




            <section>
                <div class="section_title type_one text-center mt-5">
                    <h4 class="sm_title"> What we care</h4>
                    <div class="title_whole">
                        <h2 class="title"> We Are Take Care of <br> Our Customers
                            That’s Makes Us Special</h2>
                    </div>
                </div>
            </section>

            <section class="content-section mt-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pd_right_70">

                            <!---============spacing==========--->
                            <div class="pd_bottom_40"></div>
                            <!---============spacing==========--->
                            <div class="icon_box_only type_five color_two d-flex  trans">
                                <div class="icon">
                                    <i class=" fi-rr-comment-check"></i>
                                </div>
                                <div class="content">
                                    <div class="title_22">
                                        <a href="#">Customer Priority</a>
                                    </div>
                                    <div class="title_22">
                                        <p>We understand our customer value based on their needs and urgency</p>
                                    </div>
                                </div>
                            </div>
                            <!---============spacing==========--->
                            <div class="pd_top_15"></div>
                            <!---============spacing==========--->
                            <div class="divider"></div>
                            <!---============spacing==========--->
                            <div class="pd_bottom_25"></div>
                            <!---============spacing==========--->
                            <div class="icon_box_only type_five color_two d-flex  trans">
                                <div class="icon">
                                    <i class=" fi-rr-comment-check"></i>
                                </div>
                                <div class="content">
                                    <div class="title_22">
                                        <a href="#">Instant Service</a>
                                    </div>
                                    <div class="title_22">
                                        <p>We are trying to give fastest service to our clients with our best team
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!---============spacing==========--->
                            <div class="pd_top_15"></div>
                            <!---============spacing==========--->
                            <div class="divider"></div>
                            <!---============spacing==========--->
                            <div class="pd_bottom_25"></div>
                            <!---============spacing==========--->
                            <div class="icon_box_only type_five color_two d-flex  trans">
                                <div class="icon">
                                    <i class=" fi-rr-comment-check"></i>
                                </div>
                                <div class="content">
                                    <div class="title_22">
                                        <a href="#">Cost Effective</a>
                                    </div>
                                    <div class="title_22">
                                        <p>We keep our cost very low, keeping our customers in mind </p>
                                    </div>
                                </div>
                            </div>
                            <!---============spacing==========--->
                            <div class="pd_top_15"></div>
                            <!---============spacing==========--->
                            <div class="divider"></div>
                            <!---============spacing==========--->
                            <div class="pd_bottom_45"></div>
                            <!---============spacing==========--->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ec_custom_adv">
                            <div class="image_box position-relative z_2 m-t3">
                                <img src="{{ asset('assets-front/images/ecore/home/what-we-care.svg') }} "
                                    class="img-fluid mt-5" alt="img" />
                            </div>
                            <!---============spacing==========--->
                            <div class="pd_bottom_20"></div>
                            <!---============spacing==========--->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pd_right_70">

                            <!---============spacing==========--->
                            <div class="pd_bottom_40"></div>
                            <!---============spacing==========--->
                            <div class="icon_box_only type_five color_two d-flex  trans">
                                <div class="icon">
                                    <i class=" fi-rr-comment-check"></i>
                                </div>
                                <div class="content">
                                    <div class="title_22">
                                        <a href="#">Responsibility</a>
                                    </div>
                                    <div class="title_22">
                                        <p>It's our responsibility to take care of our customer needs and trust</p>
                                    </div>
                                </div>
                            </div>
                            <!---============spacing==========--->
                            <div class="pd_top_15"></div>
                            <!---============spacing==========--->
                            <div class="divider"></div>
                            <!---============spacing==========--->
                            <div class="pd_bottom_25"></div>
                            <!---============spacing==========--->
                            <div class="icon_box_only type_five color_two d-flex  trans">
                                <div class="icon">
                                    <i class=" fi-rr-comment-check"></i>
                                </div>
                                <div class="content">
                                    <div class="title_22">
                                        <a href="#">Customer satisfaction</a>
                                    </div>
                                    <div class="title_22">
                                        <p>We are always trying to satisfied our customers by giving our excellent services
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!---============spacing==========--->
                            <div class="pd_top_15"></div>
                            <!---============spacing==========--->
                            <div class="divider"></div>
                            <!---============spacing==========--->
                            <div class="pd_bottom_25"></div>
                            <!---============spacing==========--->
                            <div class="icon_box_only type_five color_two d-flex  trans">
                                <div class="icon">
                                    <i class=" fi-rr-comment-check"></i>
                                </div>
                                <div class="content">
                                    <div class="title_22">
                                        <a href="#">Feedback Action</a>
                                    </div>
                                    <div class="title_22">
                                        <p>We are always focus on our customer feedback and takes instant action on it.</p>
                                    </div>
                                </div>
                            </div>
                            <!---============spacing==========--->
                            <div class="pd_top_15"></div>
                            <!---============spacing==========--->
                            <div class="divider"></div>
                            <!---============spacing==========--->
                            <div class="pd_bottom_45"></div>
                            <!---============spacing==========--->
                        </div>
                    </div>
                </div>
                <!---============spacing==========--->
                <div class="pd_bottom_50"></div>
                <!---============spacing==========--->
            </section>




            <section class="portfolio-section-one">
                <!---============spacing==========--->

                <!---============spacing==========--->
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-lg-6">
                            <div class="section_title type_one">
                                <h4 class="sm_title"> Our Latest Portfolio</h4>
                                <div class="title_whole">
                                    <h2 class="title"> Take a Look Our Latest Portfolio Insides </h2>
                                </div>
                            </div>
                            <!---============spacing==========--->
                            <div class="pd_bottom_20"></div>
                            <!---============spacing==========--->
                        </div>
                        <div class="col-lg-6"></div>
                    </div>
                    <!---============spacing==========--->
                    <div class="pd_bottom_20"></div>
                    <!---============spacing==========--->
                    <section class="portfolio_v1 portfolio_tabs">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="fliter_group">
                                    <ul class="portfolio_filter clearfix">
                                        {{-- <li data-filter="*" class="current trans"> view All</li>
                                        <li class="trans" data-filter=".portfolio_category-car">Hardware Support</li>
                                        <li class="trans" data-filter=".portfolio_category-fire">CCTV Surveillance</li>
                                        <li class="trans" data-filter=".portfolio_category-house">Website Development
                                        </li>
                                        <li class="trans" data-filter=".portfolio_category-life">Graphic Design</li>
                                        <li class="trans" data-filter=".portfolio_category-medical">App Development</li> --}}

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="portfoliocontainer row" style="position: relative; height: 1328.8px;">
                            <div
                                class="portfolio-wrapper col-xl-4 col-lg-4 col-md-6 col-sm-6 portfolio_category-car portfolio_category-travel">
                                <div class="portfolio_box type_two">
                                    <div class="image_box ">
                                        <img src="{{ asset('assets-front/images/ecore/portfolio/web/apex.webp') }}"
                                            class="img-fluid" alt="img" />
                                        <a data-fancybox="gallery" class="zm_btn trans"
                                            href="{{ asset('assets-front/images/ecore/portfolio/web/apex.webp') }}">
                                            <span class="fi-rs-cursor-plus zoom_icon"></span>
                                        </a>
                                    </div>
                                    <div class="content_box  trans">
                                        <div class="bg trans"></div>
                                        <div class="con">
                                            <h2 class="title_30">
                                                <a href="https://apexbags.in/" target="blank" rel="bookmark">Apex Bags</a>
                                            </h2>
                                            <p>E-commerce</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-wrapper col-xl-4 col-lg-4 col-md-6 col-sm-6 portfolio_category-house">
                                <div class="portfolio_box type_two">
                                    <div class="image_box ">
                                        <img src="{{ asset('assets-front/images/ecore/portfolio/web/uhk.webp') }}"
                                            class="img-fluid" alt="img" />
                                        <a data-fancybox="gallery" class="zm_btn trans"
                                            href="{{ asset('assets-front/images/ecore/portfolio/web/uhk.webp') }}">
                                            <span class="fi-rs-cursor-plus zoom_icon"></span>
                                        </a>
                                    </div>
                                    <div class="content_box  trans">
                                        <div class="bg trans"></div>
                                        <div class="con">
                                            <h2 class="title_30">
                                                <a href="http://gyp-techno.com" target="blank" rel="bookmark">Udvah Solution Pvt. Ltd.</a>
                                            </h2>
                                            <p>Man Power Agency</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div
                                class="portfolio-wrapper col-xl-4 col-lg-4 col-md-6 col-sm-6 portfolio_category-car portfolio_category-fire">
                                <div class="portfolio_box type_two">
                                    <div class="image_box ">
                                        <img src="{{ asset('assets-front/images/ecore/portfolio/web/drsteel.webp') }}"
                                            class="img-fluid" alt="img" />
                                        <a data-fancybox="gallery" class="zm_btn trans"
                                            href="{{ asset('assets-front/images/ecore/portfolio/web/drsteel.webp') }}">
                                            <span class="fi-rs-cursor-plus zoom_icon"></span>
                                        </a>
                                    </div>
                                    <div class="content_box  trans">
                                        <div class="bg trans"></div>
                                        <div class="con">
                                            <h2 class="title_30">
                                                <a href="https://drsteel.in/" target="blank" rel="bookmark">DR Steel</a>
                                            </h2>
                                            <p> Manufaturing Industry </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div
                                class="portfolio-wrapper col-xl-4 col-lg-4 col-md-6 col-sm-6 portfolio_category-medical portfolio_category-travel">
                                <div class="portfolio_box type_two">
                                    <div class="image_box ">
                                        <img src="{{ asset('assets-front/images/ecore/portfolio/web/lokenath.webp') }}"
                                            class="img-fluid" alt="img" />
                                        <a data-fancybox="gallery" class="zm_btn trans"
                                            href="{{ asset('assets-front/images/ecore/portfolio/web/lokenath.webp') }}">
                                            <span class="fi-rs-cursor-plus zoom_icon"></span>
                                        </a>
                                    </div>
                                    <div class="content_box  trans">
                                        <div class="bg trans"></div>
                                        <div class="con">
                                            <h2 class="title_30">
                                                <a href="https://lokenathcomputer.com/" target="blank" rel="bookmark">Lokenath Computer</a>
                                            </h2>
                                            <p> E-commerce</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div
                                class="portfolio-wrapper col-xl-4 col-lg-4 col-md-6 col-sm-6 portfolio_category-car portfolio_category-travel">
                                <div class="portfolio_box type_two">
                                    <div class="image_box ">
                                        <img src="{{ asset('assets-front/images/ecore/portfolio/web/mahaayurvedas.webp') }}"
                                            class="img-fluid" alt="img" />
                                        <a data-fancybox="gallery" class="zm_btn trans"
                                            href="{{ asset('assets-front/images/ecore/portfolio/web/mahaayurvedas.webp') }}">
                                            <span class="fi-rs-cursor-plus zoom_icon"></span>
                                        </a>
                                    </div>
                                    <div class="content_box  trans">
                                        <div class="bg trans"></div>
                                        <div class="con">
                                            <h2 class="title_30">
                                                <a href="https://mahaayurvedas.com/" target="blank" rel="bookmark">Maha Ayurvedas</a>
                                            </h2>
                                            <p>Doctor Consulting with E-commerce</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-wrapper col-xl-4 col-lg-4 col-md-6 col-sm-6 portfolio_category-house">
                                <div class="portfolio_box type_two">
                                    <div class="image_box ">
                                        <img src="{{ asset('assets-front/images/ecore/portfolio/web/bluelagoon.webp') }}"
                                            class="img-fluid" alt="img" />
                                        <a data-fancybox="gallery" class="zm_btn trans"
                                            href="{{ asset('assets-front/images/ecore/portfolio/web/bluelagoon.webp') }}">
                                            <span class="fi-rs-cursor-plus zoom_icon"></span>
                                        </a>
                                    </div>
                                    <div class="content_box  trans">
                                        <div class="bg trans"></div>
                                        <div class="con">
                                            <h2 class="title_30">
                                                <a href="https://drsteel.in" target="blank" rel="bookmark">Blue Lagoon Salon</a>
                                            </h2>
                                            <p>Beauty Parlour</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-wrapper col-xl-4 col-lg-4 col-md-6 col-sm-6 portfolio_category-house">
                                <div class="portfolio_box type_two">
                                    <div class="image_box ">
                                        <img src="{{ asset('assets-front/images/ecore/portfolio/web/gyptechno.webp') }}"
                                            class="img-fluid" alt="img" />
                                        <a data-fancybox="gallery" class="zm_btn trans"
                                            href="{{ asset('assets-front/images/ecore/portfolio/web/gyptechno.webp') }}">
                                            <span class="fi-rs-cursor-plus zoom_icon"></span>
                                        </a>
                                    </div>
                                    <div class="content_box  trans">
                                        <div class="bg trans"></div>
                                        <div class="con">
                                            <h2 class="title_30">
                                                <a href="http://gyp-techno.com" target="blank"
                                                    rel="bookmark">Gyp Techno Solutions</a>
                                            </h2>
                                            <p>Gypsum Industry</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-wrapper col-xl-4 col-lg-4 col-md-6 col-sm-6 portfolio_category-house">
                                <div class="portfolio_box type_two">
                                    <div class="image_box ">
                                        <img src="{{ asset('assets-front/images/ecore/portfolio/web/asquare.webp') }}"
                                            class="img-fluid" alt="img" />
                                        <a data-fancybox="gallery" class="zm_btn trans"
                                            href="{{ asset('assets-front/images/ecore/portfolio/web/asquare.webp') }}">
                                            <span class="fi-rs-cursor-plus zoom_icon"></span>
                                        </a>
                                    </div>
                                    <div class="content_box  trans">
                                        <div class="bg trans"></div>
                                        <div class="con">
                                            <h2 class="title_30">
                                                <a href="https://updatedailynews.com" target="blank"
                                                    rel="bookmark">Asquare Event</a>
                                            </h2>
                                            <p>Event Management</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </section>
                </div>
                <!---============spacing==========--->
                <div class="pd_bottom_60"></div>
                <!---============spacing==========--->
            </section>











            <!-- new test -->


            <!-- new test -->




        </div>
    </div>
@endsection
