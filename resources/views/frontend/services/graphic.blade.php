@extends('frontend.layout.app')



@section('title')
    <title>ECore TechServ provides the best Logo Designing, Social Media Post , T-Shirt Designing, Graphics Designing in Kolkata</title>
@endsection

@section('description')
    <meta name="description"
        content="ECore TechServ's Graphics Designing Services fullfill your designing requirments like - Logo Designing, Social Media Post Designing, T-Shirt Designing etc.">
@endsection

@section('keyword')
    <meta name="keywords"
        content="Graphics Designing in Kolkata, Logo Designing, T-Shirt Designing, Illustration, Social media post designing.">
@endsection


@section('mainsection')
    <section class="content-section">
        <!---============spacing==========--->
        <div class="pd_top_50"></div>
        <!---============spacing==========--->
        <div class="auto-container">
            <div class="row align-items-center">

                <div class="col-lg-6">

                    <div class="image">
                        <img src="{{ asset('assets-front/images/ecore/graphics/graphics-home.svg') }}" class="img-fluid"
                            alt="img" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="col-lg-12 vankine" id="ecore_cs_breadcrumb">
                        <ul class="breadcrumb m-auto">
                            <li><a href="{{url('/')}}">Home</a> </li>
                            <li class="">Services</li>
                            <li class=""><a href="#">Graphic Designing</a></li>
                        </ul>
                    </div>
                    <div class="section_title type_two">
                        <h4 class="sm_title">Graphic Designing</h4>
                        <div class="title_whole">
                            <h2 class="title">
                                Best Graphics Designing Services in Kolkata
                            </h2>
                        </div>
                        <p> ECore TechServ Best is a Graphic Design Company that has a rich team of Young and Experienced
                            Designers who come
                            together to give company a brand name through services.
                        </p>
                    </div>
                    <!---============spacing==========--->
                    <div class="pd_bottom_40"></div>
                    <!---============spacing==========--->
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="theme_btn_all">
                                <a href="tel:03335575768" class="theme_btn big color_two rotate">
                                    Call Now <span> <i class=" fi-rr-arrow-small-up"></i></span>
                                </a>
                            </div>
                        </div>

                    </div>

                    <!---============spacing==========--->
                    <div class="pd_bottom_40 d_md_none"></div>
                    <!---============spacing==========--->

                </div>
            </div>
        </div>
    </section>



    <section class="service-section-one">
        <!---============spacing==========--->
        <div class="pd_top_90"></div>
        <!---============spacing==========--->
        <div class="container">
            <div class="row align-items-end text-center">
                <div class="col-lg-12">
                    <div class="section_title type_one">
                        <h4 class="sm_title"> What We Offer</h4>
                        <div class="title_whole">
                            <h2 class="title"> Services we Provided </h2>
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
            <div class="service_post position-relative">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="service_box type_three hover_1_get">
                            <a href="#" class="img_bx">
                                <div class="image trans hover_1">
                                    <img src="{{ asset('assets-front/images/ecore/graphics/branding.svg') }}"
                                        class="img-fluid" alt="service" />
                                    <div class="oh ho_1"></div>
                                    <div class="oh ho_2"></div>
                                    <div class="oh ho_3"></div>
                                    <div class="oh ho_4"></div>
                                </div>
                            </a>
                            <div class="content_box trans">
                                <div class="content_box_in trans">
                                    <div class="icon trans">
                                        <i class=" flaticon-insurance-2 trans"></i>
                                    </div>
                                    <div class="steps trans">1</div>
                                    <h4 class="title_24 trans">
                                        <a href="#">
                                            Branding & Identity</a>
                                    </h4>
                                    <p class="trans">
                                        Elevate your brand with our brand design services and stand out in the crowd.

                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="service_box type_three hover_1_get">
                            <a href="#" class="img_bx">
                                <div class="image trans hover_1">
                                    <img src="{{ asset('assets-front/images/ecore/graphics/illustration.svg') }}"
                                        class="img-fluid" alt="service" />
                                    <div class="oh ho_1"></div>
                                    <div class="oh ho_2"></div>
                                    <div class="oh ho_3"></div>
                                    <div class="oh ho_4"></div>
                                </div>
                            </a>
                            <div class="content_box trans">
                                <div class="content_box_in trans">
                                    <div class="icon trans">
                                        <i class=" flaticon-travel-insurance trans"></i>
                                    </div>
                                    <div class="steps trans">2</div>
                                    <h4 class="title_24 trans">
                                        <a href="#">Illustration</a>
                                    </h4>
                                    <p class="trans">
                                        Bring life to your project by some unique and interesting illustration and artworks.

                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="service_box type_three hover_1_get">
                            <a href="#" class="img_bx">
                                <div class="image trans hover_1">
                                    <img src="{{ asset('assets-front/images/ecore/graphics/tshirt.svg') }}"
                                        class="img-fluid" alt="service" />

                                    <div class="oh ho_1"></div>
                                    <div class="oh ho_2"></div>
                                    <div class="oh ho_3"></div>
                                    <div class="oh ho_4"></div>
                                </div>
                            </a>
                            <div class="content_box trans">
                                <div class="content_box_in trans">
                                    <div class="icon trans">
                                        <i class=" flaticon-house trans"></i>
                                    </div>
                                    <div class="steps trans">3</div>
                                    <h4 class="title_24 trans">
                                        <a href="#">T-Shirt Design</a>
                                    </h4>
                                    <p class="trans">
                                        Make your Own Customizeable T-Shirt.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="service_box type_three hover_1_get">
                            <a href="#" class="img_bx">
                                <div class="image trans hover_1">
                                    <img src="{{ asset('assets-front/images/ecore/graphics/infographics.svg') }}"
                                        class="img-fluid" alt="service" />

                                    <div class="oh ho_1"></div>
                                    <div class="oh ho_2"></div>
                                    <div class="oh ho_3"></div>
                                    <div class="oh ho_4"></div>
                                </div>
                            </a>
                            <div class="content_box trans">
                                <div class="content_box_in trans">
                                    <div class="icon trans">
                                        <i class=" flaticon-insurance trans"></i>
                                    </div>
                                    <div class="steps trans">4</div>
                                    <h4 class="title_24 trans">
                                        <a href="#">Infographics</a>
                                    </h4>
                                    <p class="trans">
                                        Flourish your dense data and make it appealing with our stunning infographics design
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="service_box type_three hover_1_get">
                            <a href="#" class="img_bx">
                                <div class="image trans hover_1">
                                    <img src="{{ asset('assets-front/images/ecore/graphics/uiux.svg') }}"
                                        class="img-fluid" alt="service" />

                                    <div class="oh ho_1"></div>
                                    <div class="oh ho_2"></div>
                                    <div class="oh ho_3"></div>
                                    <div class="oh ho_4"></div>
                                </div>
                            </a>
                            <div class="content_box trans">
                                <div class="content_box_in trans">
                                    <div class="icon trans">
                                        <i class=" flaticon-insurance trans"></i>
                                    </div>
                                    <div class="steps trans">5</div>
                                    <h4 class="title_24 trans">
                                        <a href="#">UI & UX</a>
                                    </h4>
                                    <p class="trans">
                                        Get your Applications & Website's pre view before developed. Customize your Website
                                        & Application
                                        Design according to you.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="service_box type_three hover_1_get">
                            <a href="#" class="img_bx">
                                <div class="image trans hover_1">
                                    <img src="{{ asset('assets-front/images/ecore/graphics/logo.svg') }}"
                                        class="img-fluid" alt="service" />

                                    <div class="oh ho_1"></div>
                                    <div class="oh ho_2"></div>
                                    <div class="oh ho_3"></div>
                                    <div class="oh ho_4"></div>
                                </div>
                            </a>
                            <div class="content_box trans">
                                <div class="content_box_in trans">
                                    <div class="icon trans">
                                        <i class=" flaticon-insurance trans"></i>
                                    </div>
                                    <div class="steps trans">6</div>
                                    <h4 class="title_24 trans">
                                        <a href="#">
                                            Logo Design</a>
                                    </h4>
                                    <p class="trans">
                                        Make Your own Customizeable Logo & Give your Brand an Identity.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!---============spacing==========--->
        <div class="pd_bottom_60"></div>
        <!---============spacing==========--->
    </section>


    <section class="process-section">
        <!---============spacing==========--->
        <div class="pd_top_80"></div>
        <!---============spacing==========--->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center type_five">
                        <h4 class="sm_title">Process</h4>
                        <div class="title_whole">
                            <h2 class="title"> How we Process a Design</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!---============spacing==========--->
            <div class="pd_bottom_40"></div>
            <!---============spacing==========--->
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="process_box type_four color_two">
                        <div class="icon trans">
                            <img src="{{ asset('assets-front/images/home-6-icon-1.png') }}" class="img-fluid"
                                alt="img" />
                            <p class="step bg_2">1</p>
                            <svg width="123" height="16" viewBox="0 0 123 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.2"
                                    d="M122.354 8.35355C122.549 8.15829 122.549 7.84171 122.354 7.64645L119.172 4.46447C118.976 4.2692 118.66 4.2692 118.464 4.46447C118.269 4.65973 118.269 4.97631 118.464 5.17157L121.293 8L118.464 10.8284C118.269 11.0237 118.269 11.3403 118.464 11.5355C118.66 11.7308 118.976 11.7308 119.172 11.5355L122.354 8.35355ZM0 8.5H3.05V7.5H0V8.5ZM9.15 8.5H15.25V7.5H9.15V8.5ZM21.35 8.5H27.45V7.5H21.35V8.5ZM33.55 8.5H39.65V7.5H33.55V8.5ZM45.75 8.5H51.85V7.5H45.75V8.5ZM57.95 8.5H64.05V7.5H57.95V8.5ZM70.15 8.5H76.25V7.5H70.15V8.5ZM82.35 8.5H88.45V7.5H82.35V8.5ZM94.55 8.5H100.65V7.5H94.55V8.5ZM106.75 8.5H112.85V7.5H106.75V8.5ZM118.95 8.5H122V7.5H118.95V8.5ZM122.707 8.70711C123.098 8.31658 123.098 7.68342 122.707 7.29289L116.343 0.928932C115.953 0.538408 115.319 0.538408 114.929 0.928932C114.538 1.31946 114.538 1.95262 114.929 2.34315L120.586 8L114.929 13.6569C114.538 14.0474 114.538 14.6805 114.929 15.0711C115.319 15.4616 115.953 15.4616 116.343 15.0711L122.707 8.70711ZM0 9H3.05V7H0V9ZM9.15 9H15.25V7H9.15V9ZM21.35 9H27.45V7H21.35V9ZM33.55 9H39.65V7H33.55V9ZM45.75 9H51.85V7H45.75V9ZM57.95 9H64.05V7H57.95V9ZM70.15 9H76.25V7H70.15V9ZM82.35 9H88.45V7H82.35V9ZM94.55 9H100.65V7H94.55V9ZM106.75 9H112.85V7H106.75V9ZM118.95 9H122V7H118.95V9Z"
                                    fill="#181818"></path>
                            </svg>
                        </div>
                        <div class="content_no">
                            <div class="con_top">
                                <div class="title_20">
                                    <a href="#">
                                        Research</a>
                                </div>
                                <p>Until iron is hot with the research, our design head specialists never command the
                                    designers to hit.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="process_box type_four color_two">
                        <div class="icon trans">
                            <img src="{{ asset('assets-front/images/home-6-icon-2.png') }}" class="img-fluid"
                                alt="img" />
                            <p class="step bg_15">2</p>
                            <svg width="123" height="16" viewBox="0 0 123 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.2"
                                    d="M122.354 8.35355C122.549 8.15829 122.549 7.84171 122.354 7.64645L119.172 4.46447C118.976 4.2692 118.66 4.2692 118.464 4.46447C118.269 4.65973 118.269 4.97631 118.464 5.17157L121.293 8L118.464 10.8284C118.269 11.0237 118.269 11.3403 118.464 11.5355C118.66 11.7308 118.976 11.7308 119.172 11.5355L122.354 8.35355ZM0 8.5H3.05V7.5H0V8.5ZM9.15 8.5H15.25V7.5H9.15V8.5ZM21.35 8.5H27.45V7.5H21.35V8.5ZM33.55 8.5H39.65V7.5H33.55V8.5ZM45.75 8.5H51.85V7.5H45.75V8.5ZM57.95 8.5H64.05V7.5H57.95V8.5ZM70.15 8.5H76.25V7.5H70.15V8.5ZM82.35 8.5H88.45V7.5H82.35V8.5ZM94.55 8.5H100.65V7.5H94.55V8.5ZM106.75 8.5H112.85V7.5H106.75V8.5ZM118.95 8.5H122V7.5H118.95V8.5ZM122.707 8.70711C123.098 8.31658 123.098 7.68342 122.707 7.29289L116.343 0.928932C115.953 0.538408 115.319 0.538408 114.929 0.928932C114.538 1.31946 114.538 1.95262 114.929 2.34315L120.586 8L114.929 13.6569C114.538 14.0474 114.538 14.6805 114.929 15.0711C115.319 15.4616 115.953 15.4616 116.343 15.0711L122.707 8.70711ZM0 9H3.05V7H0V9ZM9.15 9H15.25V7H9.15V9ZM21.35 9H27.45V7H21.35V9ZM33.55 9H39.65V7H33.55V9ZM45.75 9H51.85V7H45.75V9ZM57.95 9H64.05V7H57.95V9ZM70.15 9H76.25V7H70.15V9ZM82.35 9H88.45V7H82.35V9ZM94.55 9H100.65V7H94.55V9ZM106.75 9H112.85V7H106.75V9ZM118.95 9H122V7H118.95V9Z"
                                    fill="#181818"></path>
                            </svg>
                        </div>
                        <div class="content_no">
                            <div class="con_top">
                                <div class="title_20">
                                    <a href="#">
                                        Idea & Strategy</a>
                                </div>
                                <p>Ideation is a very necessary step to optimize the process. An idea must be well-versed
                                    with the research
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="process_box type_four">
                        <div class="icon trans">
                            <img src="{{ asset('assets-front/images/home-6-icon-3.png') }}" class="img-fluid"
                                alt="img" />
                            <p class="step bg_14">3</p>
                            <svg width="123" height="16" viewBox="0 0 123 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.2"
                                    d="M122.354 8.35355C122.549 8.15829 122.549 7.84171 122.354 7.64645L119.172 4.46447C118.976 4.2692 118.66 4.2692 118.464 4.46447C118.269 4.65973 118.269 4.97631 118.464 5.17157L121.293 8L118.464 10.8284C118.269 11.0237 118.269 11.3403 118.464 11.5355C118.66 11.7308 118.976 11.7308 119.172 11.5355L122.354 8.35355ZM0 8.5H3.05V7.5H0V8.5ZM9.15 8.5H15.25V7.5H9.15V8.5ZM21.35 8.5H27.45V7.5H21.35V8.5ZM33.55 8.5H39.65V7.5H33.55V8.5ZM45.75 8.5H51.85V7.5H45.75V8.5ZM57.95 8.5H64.05V7.5H57.95V8.5ZM70.15 8.5H76.25V7.5H70.15V8.5ZM82.35 8.5H88.45V7.5H82.35V8.5ZM94.55 8.5H100.65V7.5H94.55V8.5ZM106.75 8.5H112.85V7.5H106.75V8.5ZM118.95 8.5H122V7.5H118.95V8.5ZM122.707 8.70711C123.098 8.31658 123.098 7.68342 122.707 7.29289L116.343 0.928932C115.953 0.538408 115.319 0.538408 114.929 0.928932C114.538 1.31946 114.538 1.95262 114.929 2.34315L120.586 8L114.929 13.6569C114.538 14.0474 114.538 14.6805 114.929 15.0711C115.319 15.4616 115.953 15.4616 116.343 15.0711L122.707 8.70711ZM0 9H3.05V7H0V9ZM9.15 9H15.25V7H9.15V9ZM21.35 9H27.45V7H21.35V9ZM33.55 9H39.65V7H33.55V9ZM45.75 9H51.85V7H45.75V9ZM57.95 9H64.05V7H57.95V9ZM70.15 9H76.25V7H70.15V9ZM82.35 9H88.45V7H82.35V9ZM94.55 9H100.65V7H94.55V9ZM106.75 9H112.85V7H106.75V9ZM118.95 9H122V7H118.95V9Z"
                                    fill="#181818"></path>
                            </svg>
                        </div>
                        <div class="content_no">
                            <div class="con_top">
                                <div class="title_20">
                                    <a href="#">
                                        Visual Exploration </a>
                                </div>
                                <p>Start building up your design from your chosen concept and what you developed in your
                                    thumbnails.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="process_box type_four">
                        <div class="icon trans">
                            <img src="{{ asset('assets-front/images/home-6-icon-4.png') }}" class="img-fluid"
                                alt="img" />
                            <p class="step">4</p>
                        </div>
                        <div class="content_no">
                            <div class="con_top">
                                <div class="title_20">
                                    <a href="#">
                                        Final Result</a>
                                </div>
                                <p>Our fimal output always gives you a fruitful results. Connect with us to achieve your
                                    design goals.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---============spacing==========--->
        <div class="pd_bottom_80"></div>
        <!---============spacing==========--->
    </section>



    <section class="portfolio-section-one">
        <!---============spacing==========--->
        <div class="pd_top_90"></div>
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
            {{-- <section class="portfolio_v1 portfolio_tabs">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="fliter_group">
                            <ul class="portfolio_filter clearfix">
                                <li data-filter="*" class="current trans"> view All</li>
                                <li class="trans" data-filter=".portfolio_category-car">Logo Design</li>
                                <li class="trans" data-filter=".portfolio_category-fire">Branding & Identity</li>
                                <li class="trans" data-filter=".portfolio_category-house">T-Shirt Design</li>
                                <li class="trans" data-filter=".portfolio_category-life">Infographics</li>
                                <li class="trans" data-filter=".portfolio_category-medical">UI & UX</li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="portfoliocontainer row" style="position: relative; height: 1328.8px;">
                    <div
                        class="portfolio-wrapper col-xl-6 col-lg-6 col-md-6 col-sm-6 portfolio_category-car portfolio_category-travel">
                        <div class="portfolio_box type_two">
                            <div class="image_box ">
                                <img src="{{ asset('assets-front/images/portfolio/project-9-min.png') }}"
                                    class="img-fluid" alt="img" />
                                <a data-fancybox="gallery" class="zm_btn trans"
                                    href="{{ asset('assets-front/images/portfolio/project-8-min.png') }}">
                                    <span class="fi-rs-cursor-plus zoom_icon"></span>
                                </a>
                            </div>
                            <div class="content_box  trans">
                                <div class="bg trans"></div>
                                <div class="con">
                                    <h2 class="title_30">
                                        <a href="portfolio-details.html" rel="bookmark">Insurance&nbsp;Groups</a>
                                    </h2>
                                    <p> Policy Renewal </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div
                        class="portfolio-wrapper col-xl-6 col-lg-6 col-md-6 col-sm-6 portfolio_category-house portfolio_category-life">
                        <div class="portfolio_box type_two">
                            <div class="image_box ">
                                <img src="{{ asset('assets-front/images/portfolio/project-1-min.png') }}"
                                    class="img-fluid" alt="img" />
                                <a data-fancybox="gallery" class="zm_btn trans"
                                    href="{{ asset('assets-front/images/portfolio/project-1-min.png') }}">
                                    <span class="fi-rs-cursor-plus zoom_icon"></span>
                                </a>
                            </div>
                            <div class="content_box  trans">
                                <div class="bg trans"></div>
                                <div class="con">
                                    <h2 class="title_30">
                                        <a href="portfolio-details.html" rel="bookmark">Business Growth</a>
                                    </h2>
                                    <p> Business Policy </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div
                        class="portfolio-wrapper col-xl-6 col-lg-6 col-md-6 col-sm-6 portfolio_category-car portfolio_category-fire">
                        <div class="portfolio_box type_two">
                            <div class="image_box ">
                                <img src="{{ asset('assets-front/images/portfolio/project-2-min.png') }}"
                                    class="img-fluid" alt="img" />
                                <a data-fancybox="gallery" class="zm_btn trans"
                                    href="{{ asset('assets-front/images/portfolio/project-2-min.png') }}">
                                    <span class="fi-rs-cursor-plus zoom_icon"></span>
                                </a>
                            </div>
                            <div class="content_box  trans">
                                <div class="bg trans"></div>
                                <div class="con">
                                    <h2 class="title_30">
                                        <a href="portfolio-details.html" rel="bookmark">Market Expansion</a>
                                    </h2>
                                    <p> Coaching </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div
                        class="portfolio-wrapper col-xl-6 col-lg-6 col-md-6 col-sm-6 portfolio_category-medical portfolio_category-travel">
                        <div class="portfolio_box type_two">
                            <div class="image_box ">
                                <img src="{{ asset('assets-front/images/portfolio/project-3-min.png') }}"
                                    class="img-fluid" alt="img" />
                                <a data-fancybox="gallery" class="zm_btn trans"
                                    href="{{ asset('assets-front/images/portfolio/project-3-min.png') }}">
                                    <span class="fi-rs-cursor-plus zoom_icon"></span>
                                </a>
                            </div>
                            <div class="content_box  trans">
                                <div class="bg trans"></div>
                                <div class="con">
                                    <h2 class="title_30">
                                        <a href="portfolio-details.html" rel="bookmark">Rise of insurance</a>
                                    </h2>
                                    <p> Business Details </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div
                        class="portfolio-wrapper col-xl-6 col-lg-6 col-md-6 col-sm-6 portfolio_category-car portfolio_category-travel">
                        <div class="portfolio_box type_two">
                            <div class="image_box ">
                                <img src="{{ asset('assets-front/images/portfolio/project-4-min.png') }}"
                                    class="img-fluid" alt="img" />
                                <a data-fancybox="gallery" class="zm_btn trans"
                                    href="{{ asset('assets-front/images/portfolio/project-4-min.png') }}">
                                    <span class="fi-rs-cursor-plus zoom_icon"></span>
                                </a>
                            </div>
                            <div class="content_box  trans">
                                <div class="bg trans"></div>
                                <div class="con">
                                    <h2 class="title_30">
                                        <a href="portfolio-details.html" rel="bookmark">Business strategy</a>
                                    </h2>
                                    <p> No Claim Bonus </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div
                        class="portfolio-wrapper col-xl-6 col-lg-6 col-md-6 col-sm-6 portfolio_category-fire portfolio_category-house">
                        <div class="portfolio_box type_two">
                            <div class="image_box ">
                                <img src="{{ asset('assets-front/images/portfolio/project-5-min.png') }}"
                                    class="img-fluid" alt="img" />
                                <a data-fancybox="gallery" class="zm_btn trans"
                                    href="{{ asset('assets-front/images/portfolio/project-5-min.png') }}">
                                    <span class="fi-rs-cursor-plus zoom_icon"></span>
                                </a>
                            </div>
                            <div class="content_box  trans">
                                <div class="bg trans"></div>
                                <div class="con">
                                    <h2 class="title_30">
                                        <a href="portfolio-details.html" rel="bookmark">Insurance benefit</a>
                                    </h2>
                                    <p> Insure Instantly </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div
                        class="portfolio-wrapper col-xl-6 col-lg-6 col-md-6 col-sm-6 portfolio_category-house portfolio_category-medical">
                        <div class="portfolio_box type_two">
                            <div class="image_box ">
                                <img src="{{ asset('assets-front/images/portfolio/project-6-min.png') }}"
                                    class="img-fluid" alt="img" />
                                <a data-fancybox="gallery" class="zm_btn trans"
                                    href="{{ asset('assets-front/images/portfolio/project-6-min.png') }}">
                                    <span class="fi-rs-cursor-plus zoom_icon"></span>
                                </a>
                            </div>
                            <div class="content_box  trans">
                                <div class="bg trans"></div>
                                <div class="con">
                                    <h2 class="title_30">
                                        <a href="portfolio-details.html"
                                            rel="bookmark">Classic&nbsp;&nbsp;Insurance&nbsp;</a>
                                    </h2>
                                    <p> Hassle Free Claims </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div
                        class="portfolio-wrapper col-xl-6 col-lg-6 col-md-6 col-sm-6 portfolio_category-car portfolio_category-fire">
                        <div class="portfolio_box type_two">
                            <div class="image_box ">

                                <img src="{{ asset('assets-front/images/portfolio/project-7-min.png') }}"
                                    class="img-fluid" alt="img" />

                                <a data-fancybox="gallery" class="zm_btn trans"
                                    href="{{ asset('assets-front/images/portfolio/project-7-min.png') }}">
                                    <span class="fi-rs-cursor-plus zoom_icon"></span>
                                </a>
                            </div>
                            <div class="content_box  trans">
                                <div class="bg trans"></div>
                                <div class="con">
                                    <h2 class="title_30">
                                        <a href="portfolio-details.html" rel="bookmark">Progressive Insurance</a>
                                    </h2>
                                    <p> Insurance coverage </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}


            <div style="position: relative; width: 100%; height: 0; padding-top: 70.7071%;
                padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
                border-radius: 8px; will-change: transform;">
                    <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none;             padding:        0;margin: 0;"
                        src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAF46rlyqWE&#x2F;88C-lJWDuxXLzUpNyBDDzQ&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
                    </iframe>
            </div>




        </div>
        <!---============spacing==========--->
        <div class="pd_bottom_60"></div>
        <!---============spacing==========--->
    </section>






    
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
        "@type": "Question",
        "name": "Which type of graphics ECore TechServ create for their clients marketing?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "ECore TechServ specializes in creating a diverse range of graphics with creativity to elevate their clients' marketing efforts. From captivating infographics and engaging social media visuals to eye-catching banners and dynamic video animations, they tailor their graphics to suit each client's unique brand identity and campaign objectives. Whether it's enhancing brand awareness, driving conversions, or conveying complex information in a visually appealing manner, their expert designers deliver high-quality, impactful graphics that resonate with audiences across various platforms, ensuring maximum impact and ROI for our clients."
        }
      }]
    }
    </script>






@endsection
