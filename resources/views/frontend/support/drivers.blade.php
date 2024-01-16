@extends('frontend.layout.app')
@section('mainsection')
    <section class="about-section position-relative">
        <!---============spacing==========--->
        <div class="pd_top_90"></div>
        <!---============spacing==========--->

        <div class="auto-container">
            <div class="row align-items-start">

                <div class="col-lg-12 col-md-12 col-sm-12 pd_left_30">
                    <div class="section_title type_one">
                        <h4 class="sm_title">Software & Drivers</h4>
                        <div class="title_whole">
                            <h2 class="title">
                                Get Your Any Kind of Software & Drivers Here.
                            </h2>
                        </div>
                    </div>
                    <!---============spacing==========--->
                    <div class="mr_bottom_20"></div>
                    <!---============spacing==========--->
                    <div class="fom_tab_box custom_tabs only_tab_content">
                        <ul class="nav nav-tabs links trans" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active" id="aboutuss-tabtab" data-bs-toggle="tab"
                                    data-bs-target="#aboutuss" type="button" role="tab" aria-controls="aboutuss"
                                    aria-selected="false">
                                    Microsoft OS & Office
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 11L11 1M11 1H3.5M11 1V8.5" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="mission-tabtab" data-bs-toggle="tab" data-bs-target="#mission"
                                    type="button" role="tab" aria-controls="mission" aria-selected="false">
                                    Printers
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 11L11 1M11 1H3.5M11 1V8.5" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="mission-tabtab" data-bs-toggle="tab" data-bs-target="#mission"
                                    type="button" role="tab" aria-controls="mission" aria-selected="false">
                                    Drivers
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 11L11 1M11 1H3.5M11 1V8.5" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </li>

                        </ul>
                        <div class="s_tabs_content tab-content">
                            <div class="tab-pane active" id="aboutuss" role="tabpanel" aria-labelledby="aboutuss-tabtab">
                                <div class="tab_content_box">
                                    {{-- <div class="content">
                                        Our business depends on your IT systems.
                                        We’re confident that we are the only IT
                                        solutions service business in India. Our
                                        goal is to answer every call with a LIVE
                                        person. The ECore TechServ team
                                        genuinely cares about every client. This
                                        drives us to provide absolute technical
                                        support of their systems. Our IT support
                                        company, also referred to as an IT
                                        managed services provider is comprised
                                        of professional IT specialists who make
                                        up the company’s core team to fixing
                                        immediate IT problems.
                                    </div>
                                    <div class="d-flex">
                                        <ul>
                                            <li>
                                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="12.5" cy="12.5" r="12.5" fill="#36DB9F">
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
                                                <span> IT Support </span>
                                            </li>
                                            <li>
                                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="12.5" cy="12.5" r="12.5" fill="#36DB9F">
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
                                                <span> CCTV Survelliance </span>
                                            </li>
                                            <li>
                                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="12.5" cy="12.5" r="12.5" fill="#36DB9F">
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
                                                <span> Network Security</span>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="12.5" cy="12.5" r="12.5" fill="#36DB9F">
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
                                                <span>
                                                    Website Development</span>
                                            </li>
                                            <li>
                                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="12.5" cy="12.5" r="12.5" fill="#36DB9F">
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
                                                <span> Graphic Designing</span>
                                            </li>
                                            <li>
                                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="12.5" cy="12.5" r="12.5" fill="#36DB9F">
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
                                                <span>Digital Marketing</span>
                                            </li>
                                        </ul>
                                    </div> --}}



                                    <div class="row">
                                        <div class="col-lg-4">

                                            <a href="#">
                                                <div class="icon_box_only trans type_one type_two">

                                                    <div class="icon_box_in trans">

                                                        <div class="icon">
                                                            <lord-icon src="https://cdn.lordicon.com/fgsdcsla.json"
                                                                trigger="loop" delay="1000" state="hover-slide"
                                                                colors="primary:#30c9e8,secondary:#ebe6ef"
                                                                style="width:100px;height:100px">
                                                            </lord-icon>
                                                            {{-- <lord-icon src="https://cdn.lordicon.com/bgitlnnj.json"
                                                                trigger="loop" delay="500"
                                                                colors="primary:#30c9e8,secondary:#ebe6ef"
                                                                style="width:100px;height:100px">
                                                            </lord-icon> --}}
                                                        </div>
                                                        <div class="title_18">
                                                            <a href="#">
                                                                Windows 10 Home
                                                            </a>
                                                        </div>
                                                        <p>Version : 18.0.89</p>

                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="icon_box_only trans type_one type_two">
                                                <div class="icon_box_in trans">
                                                    <div class="icon">
                                                        <lord-icon src="https://cdn.lordicon.com/bgitlnnj.json"
                                                            trigger="loop" delay="500"
                                                            colors="primary:#30c9e8,secondary:#ebe6ef"
                                                            style="width:100px;height:100px">
                                                        </lord-icon>
                                                    </div>
                                                    <div class="title_18">
                                                        <a href="#">
                                                            On-Demand Self-Service
                                                        </a>
                                                    </div>
                                                    <p>Version : 18.0.89</p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="icon_box_only trans type_one type_two">
                                                <div class="icon_box_in trans">
                                                    <div class="icon">
                                                        <lord-icon src="https://cdn.lordicon.com/bgitlnnj.json"
                                                            trigger="loop" delay="500"
                                                            colors="primary:#30c9e8,secondary:#ebe6ef"
                                                            style="width:100px;height:100px">
                                                        </lord-icon>
                                                    </div>
                                                    <div class="title_18">
                                                        <a href="#">
                                                            On-Demand Self-Service
                                                        </a>
                                                    </div>
                                                    <p>Version : 18.0.89</p>

                                                </div>
                                            </div>
                                        </div>


                                    </div>



                                </div>
                            </div>

                            <div class="tab-pane" id="mission" role="tabpanel" aria-labelledby="mission-tabtab">
                                <div class="tab_content_box">
                                    <div class="content">
                                        These are principles that not only
                                        company employees respect, but are
                                        principles that our customers appreciate
                                        as well. By identifying core values that
                                        hold meaning on personal and
                                        organizational levels.
                                    </div>
                                    <div class="d-flex">
                                        <ul>
                                            <li>
                                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="12.5" cy="12.5" r="12.5" fill="#36DB9F">
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
                                                <span>
                                                    We want our customers will
                                                    get best solutions with new
                                                    technology to solving their
                                                    problems by us.
                                                </span>
                                            </li>
                                            <li>
                                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="12.5" cy="12.5" r="12.5" fill="#36DB9F">
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
                                                <span>
                                                    By providing a revolutionary
                                                    level of transparency into
                                                    our sustainable services to
                                                    be best tech service
                                                    company.
                                                </span>
                                            </li>

                                        </ul>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="vision" role="tabpanel" aria-labelledby="vision-tabtab">
                                <div class="tab_content_box">
                                    <div class="content">
                                        Our vision guides every aspect of our business by describing what we need to
                                        accomplish to continue achieving sustainable, quality growth..


                                    </div>
                                    <div class="d-flex">
                                        <ul>
                                            <li>
                                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="12.5" cy="12.5" r="12.5" fill="#36DB9F">
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
                                                <span>
                                                    Creating valuable customer and archive their trust and loyality.

                                                </span>
                                            </li>
                                            <li>
                                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="12.5" cy="12.5" r="12.5" fill="#36DB9F">
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
                                                <span>
                                                    Creating valuable customer and archive their trust and loyality.

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




                    <!-- <div class="theme_btn_all">
                                                                                                                                        <a href="#" class="theme_btn">
                                                                                                                                          More About Us
                                                                                                                                          <span> <i class="fi-rr-arrow-small-right"></i></span>
                                                                                                                                        </a>
                                                                                                                                      </div> -->
                    <!---============spacing==========--->
                    <div class="pd_bottom_70"></div>
                    <!---============spacing==========--->
                </div>
            </div>
        </div>
        <div class="ab_img_right_bottom z_minus_1">
            <img src="{{ 'assets-front/images/bg-2.png' }}" class="img-fluid" alt="img" />
        </div>
    </section>






















    <section class="content-section bg_light_2">
        <!---============spacing==========--->
        <div class="pd_top_95"></div>
        <!---============spacing==========--->
        <div class="container">
            <div class="row">
                <div class="col-lg-12  position-relative z_2">
                    <div class="row text-center">
                        <div class="col-lg-12 pd_right_70">
                            <div class="section_title type_two">
                                <h4 class="sm_title">FEATURES AND ADVANTAGES</h4>
                                <div class="title_whole">
                                    <h2 class="title">Cloud Features and Advantages</h2>
                                </div>
                                <!---============spacing==========--->
                                <div class="pd_bottom_5"></div>
                                <!---============spacing==========--->
                            </div>
                        </div>
                    </div>
                    <!---============spacing==========--->
                    <div class="pd_bottom_40"></div>
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
                                            On-Demand Self-Service
                                        </a>
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
                                            Resources Pooling</a>
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
                                            Board network Access</a>
                                    </div>

                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-lg-4">
                                <div class="icon_box_only trans type_one type_two">
                                    <div class="icon_box_in trans">
                                        <div class="icon">
                                            <i class=" flaticon-cyber-security"></i>
                                        </div>
                                        <div class="title_18">
                                            <a href="#">
                                                Easy Maintenance</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="icon_box_only trans type_one type_two">
                                    <div class="icon_box_in trans">
                                        <div class="icon">
                                            <i class=" flaticon-agile"></i>
                                        </div>
                                        <div class="title_18">
                                            <a href="#">
                                                Availability</a>
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
                                                Security</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="row">
                            <div class="col-lg-4">
                                <div class="icon_box_only trans type_one type_two">
                                    <div class="icon_box_in trans">
                                        <div class="icon">
                                            <i class=" flaticon-money-bag"></i>
                                        </div>
                                        <div class="title_18">
                                            <a href="#">
                                                Measured Services</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="icon_box_only trans type_one type_two">
                                    <div class="icon_box_in trans">
                                        <div class="icon">
                                            <i class=" flaticon-agile"></i>
                                        </div>
                                        <div class="title_18">
                                            <a href="#">
                                                Pay as you Use</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="icon_box_only trans type_one type_two">
                                    <div class="icon_box_in trans">
                                        <div class="icon">
                                            <i class=" flaticon-cyber-security"></i>
                                        </div>
                                        <div class="title_18">
                                            <a href="#">
                                                Economical </a>
                                        </div>
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
@endsection
