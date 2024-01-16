@extends('frontend.layout.app')
@section('mainsection')
    <div id="content" class="site-content">
        <!---about-->
        <section class="about-section position-relative">
            <!---============spacing==========--->
            <div class="pd_top_90"></div>
            <!---============spacing==========--->

            <div class="auto-container">
                <div class="row align-items-start">
                    <div class="col-lg-6 col-md-12">
                        <div class="image_box_only type_seven">
                            <div class="icon_box_only type_four inline_box trans">
                                <div class="icon">
                                    <img src="{{ 'assets-front/images/icon-image-1.png' }}" alt="img"
                                        class="img-fluid" />
                                </div>
                                <div class="content">
                                    <div class="title_18">
                                        <a href="#"> ECore TechServ </a>
                                    </div>
                                </div>
                                <a class="link" href="#">
                                    <svg width="30" height="32" viewBox="0 0 30 32" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="15" cy="17" r="15" fill="var(--color-set-two-three-6)">
                                        </circle>
                                        <g clip-path="url(#clip0_117_28461)">
                                            <path
                                                d="M15.0757 24.3888C15.8841 25.207 17.6847 24.9358 17.8785 23.6492C19.0847 15.6614 25.1202 8.92269 29.6876 2.57279C30.954 0.813155 28.042 -0.858436 26.7921 0.88025C22.6184 6.68227 17.3578 12.7875 15.2998 19.828C12.948 17.4244 10.5867 15.0437 7.94892 12.9317C6.27842 11.5936 3.88886 13.951 5.57736 15.3031C9.01404 18.0559 11.984 21.2659 15.0757 24.3888Z"
                                                fill="var(--color-set-two-three-5)"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_117_28461">
                                                <rect width="25" height="25" fill="white" transform="translate(5)">
                                                </rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                            <div class="icon_box_only type_four position_two trans">
                                <div class="icon">
                                    <img src="{{ 'assets-front/images/icon-image-2.png' }}" alt="img"
                                        class="img-fluid" />
                                </div>
                                <div class="content">
                                    <div class="title_18">
                                        <a href="#"> IT Solutions </a>
                                    </div>
                                </div>
                                <a class="link" href="#">
                                    <svg width="30" height="32" viewBox="0 0 30 32" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="15" cy="17" r="15" fill="var(--color-set-two-three-6)">
                                        </circle>
                                        <g clip-path="url(#clip0_117_2846)">
                                            <path
                                                d="M15.0757 24.3888C15.8841 25.207 17.6847 24.9358 17.8785 23.6492C19.0847 15.6614 25.1202 8.92269 29.6876 2.57279C30.954 0.813155 28.042 -0.858436 26.7921 0.88025C22.6184 6.68227 17.3578 12.7875 15.2998 19.828C12.948 17.4244 10.5867 15.0437 7.94892 12.9317C6.27842 11.5936 3.88886 13.951 5.57736 15.3031C9.01404 18.0559 11.984 21.2659 15.0757 24.3888Z"
                                                fill="var(--color-set-two-three-5)"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_117_2846">
                                                <rect width="25" height="25" fill="white" transform="translate(5)">
                                                </rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>

                            <div class="fun_facts type_two">
                                <h4>
                                    <span class="count">05</span>
                                    <small> + </small>
                                </h4>
                                <h6 class="title_no_a_26">Years Of Experience</h6>
                            </div>
                            <div class="m_image">
                                <img src="{{ 'assets-front/images/about/about-1-min.png' }}" alt="img"
                                    class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 pd_left_30">
                        <div class="section_title type_one">
                            <h4 class="sm_title">About Company</h4>
                            <div class="title_whole">
                                <h2 class="title">
                                    Best IT Service Agency in Kolkata
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
                                        About Us
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 11L11 1M11 1H3.5M11 1V8.5" stroke="white" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="mission-tabtab" data-bs-toggle="tab"
                                        data-bs-target="#mission" type="button" role="tab" aria-controls="mission"
                                        aria-selected="false">
                                        Mission
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 11L11 1M11 1H3.5M11 1V8.5" stroke="white" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="vision-tabtab" data-bs-toggle="tab"
                                        data-bs-target="#vision" type="button" role="tab" aria-controls="vision"
                                        aria-selected="false">
                                        Vision
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 11L11 1M11 1H3.5M11 1V8.5" stroke="white" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                </li>
                            </ul>
                            <div class="s_tabs_content tab-content">
                                <div class="tab-pane active" id="aboutuss" role="tabpanel"
                                    aria-labelledby="aboutuss-tabtab">
                                    <div class="tab_content_box">
                                        <div class="content">
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
                                                    <svg width="25" height="25" viewBox="0 0 25 25"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                    <svg width="25" height="25" viewBox="0 0 25 25"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                    <svg width="25" height="25" viewBox="0 0 25 25"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                    <svg width="25" height="25" viewBox="0 0 25 25"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                    <svg width="25" height="25" viewBox="0 0 25 25"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                    <svg width="25" height="25" viewBox="0 0 25 25"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                    <svg width="25" height="25" viewBox="0 0 25 25"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                    <svg width="25" height="25" viewBox="0 0 25 25"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                    <svg width="25" height="25" viewBox="0 0 25 25"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                    <svg width="25" height="25" viewBox="0 0 25 25"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
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
        <!---about end-->





        <section>
            <div class="section_title type_one text-center mt-5">
                <h4 class="sm_title"> Why Choose Us</h4>
                <div class="title_whole">
                    <h2 class="title"> Few Simple <br> Reasons for Choose Us
                    </h2>
                </div>
            </div>
        </section>

        <section class="content-section">
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
                                    <a href="#">Professional </a>
                                </div>
                                <div class="title_22">
                                    <p>Professionalism is behaviour in a work or business environment.

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
                                    <a href="#"> Large Community
                                    </a>
                                </div>
                                <div class="title_22">
                                    <p>community" may also refer to large group affiliations.

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
                                    <a href="#">Recourses & Tools
                                    </a>
                                </div>
                                <div class="title_22">
                                    <p>One uses to achieve an objective, while tool is make a task easier.

                                    </p>
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
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="image_box position-relative z_2 m-t3">
                            <img src="assets-front/images/ecore/hardware/adv.png " class="img-fluid mt-5"
                                alt="img" />
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
                                    <a href="#"> Cost Effective
                                    </a>
                                </div>
                                <div class="title_22">
                                    <p>Cost effective is a good value, where the benefits and usage are worth.

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
                                    <a href="#">Fastest Service </a>
                                </div>
                                <div class="title_22">
                                    <p>Providing time-sensitive customer service at a faster rate.

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
                                    <a href="#"> Online Services
                                    </a>
                                </div>
                                <div class="title_22">
                                    <p>Services that’s get form online it makes your life easier.

                                    </p>
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





        <!--service-->
        <section class="process-section position-relative">
            <!---============spacing==========--->
            <div class="pd_top_90"></div>
            <!---============spacing==========--->
            <div class="ab_img_center height_264px pd_top_40">
                <img src="{{ 'assets-front/images/arrow.png' }}" class="img-fluid m-auto" alt="img" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text-center type_one">
                            <h4 class="sm_title">Get In Touch</h4>
                            <div class="title_whole">
                                <h2 class="title">
                                    Few Simple Steps<br>
                                    for Successful Projects
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!---============spacing==========--->
                <div class="pd_bottom_60"></div>
                <!---============spacing==========--->
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <!---============spacing==========--->
                        <div class="pd_top_60"></div>
                        <!---============spacing==========--->
                        <div class="process_box type_one">
                            <div class="image_box">
                                <img src="{{ 'assets-front/images/process/process-1-1.png' }}" class="img-fluid"
                                    alt="img" />
                                <p>Step 01</p>
                            </div>
                            <div class="content">
                                <div class="icon trans">
                                    <i class="flaticon-insurance"></i>
                                </div>
                                <div class="title_22">
                                    <a href="#">Project Introduction
                                    </a>
                                </div>
                                <p>
                                    At first we understand our clients needs and requirements acording to insfrastructure.


                                </p>
                                <div class="border_bg"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="process_box type_one">
                            <div class="image_box">
                                <img src="{{ 'assets-front/images/process/process-1-2.png' }}" class="img-fluid"
                                    alt="img" />
                                <p>Step 02</p>
                            </div>
                            <div class="content">
                                <div class="icon trans">
                                    <i class="flaticon-interview"></i>
                                </div>
                                <div class="title_22">
                                    <a href="#"> Research & Analysis
                                    </a>
                                </div>
                                <p>
                                    Our team works first to research about the projects and analysis their needs.


                                </p>
                                <div class="border_bg"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <!---============spacing==========--->
                        <div class="pd_top_60"></div>
                        <!---============spacing==========--->
                        <div class="process_box type_one">
                            <div class="image_box">
                                <img src="{{ 'assets-front/images/process/process-1-3.png' }}" class="img-fluid"
                                    alt="img" />
                                <p>Step 03</p>
                            </div>
                            <div class="content">
                                <div class="icon trans">
                                    <i class="flaticon-piggy-bank"></i>
                                </div>
                                <div class="title_22">
                                    <a href="#"> Execute & Develop
                                    </a>
                                </div>
                                <p>
                                    We have expert team for excute your projects and develop it if needed.



                                </p>
                                <div class="border_bg"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!---============spacing==========--->
            <div class="pd_bottom_30"></div>
            <!---============spacing==========--->
        </section>
        <!--service-->
        <!--content-->

        <!--content-->
        <!--funfacts-->
        <section class="analysis-section position-relative bg_1 overflow-hidden">
            <!---============spacing==========--->
            <div class="pd_top_170"></div>
            <!---============spacing==========--->
            <div class="ab_img_left_top z_0 mr_top_minus_150">
                <img src="{{ 'assets-front/images/shape/wave-pattern-2.png' }}" class="img-fluid" alt="img" />
            </div>
            <div class="medium-container-two">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text-center color_white type_one">
                            <h4 class="sm_title">Company Statistics Analysis</h4>
                            <div class="title_whole">
                                <h2 class="title">
                                    Great Achievement For Insurance
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!---============spacing==========--->
                <div class="pd_bottom_30"></div>
                <!---============spacing==========--->

                <div class="row">
                    <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12"></div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="fun_facts type_one color_white">
                            <div class="icon trans">
                                <div class="icon_in trans">
                                    <i class="flaticon-satisfaction"></i>
                                </div>
                            </div>
                            <h4>
                                <span class="count">8563</span>
                                <small> + </small>
                            </h4>
                            <h6 class="title_no_a_18">Saticfied Custimer</h6>
                        </div>
                        <!---============spacing==========--->
                        <div class="pd_bottom_20"></div>
                        <!---============spacing==========--->
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="fun_facts type_one color_white">
                            <div class="icon trans">
                                <div class="icon_in trans">
                                    <i class="flaticon-business-people"></i>
                                </div>
                            </div>
                            <h4>
                                <span class="count">2630</span>
                                <small> + </small>
                            </h4>
                            <h6 class="title_no_a_18">Experience Members</h6>
                        </div>
                        <!---============spacing==========--->
                        <div class="pd_bottom_20"></div>
                        <!---============spacing==========--->
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="fun_facts type_one color_white">
                            <div class="icon trans">
                                <div class="icon_in trans">
                                    <i class="flaticon-reviews"></i>
                                </div>
                            </div>
                            <h4>
                                <span class="count">100</span>
                                <small> % </small>
                            </h4>
                            <h6 class="title_no_a_18">Satisfaction Rate</h6>
                        </div>
                        <!---============spacing==========--->
                        <div class="pd_bottom_20"></div>
                        <!---============spacing==========--->
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="fun_facts type_one color_white">
                            <div class="icon trans">
                                <div class="icon_in trans">
                                    <i class="flaticon-presenter"></i>
                                </div>
                            </div>
                            <h4>
                                <span class="count">25</span>
                                <small> + </small>
                            </h4>
                            <h6 class="title_no_a_18">Years Experience</h6>
                        </div>
                        <!---============spacing==========--->
                        <div class="pd_bottom_20"></div>
                        <!---============spacing==========--->
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <div class="fun_facts type_one color_white">
                            <div class="icon trans">
                                <div class="icon_in trans">
                                    <i class="flaticon-trophy"></i>
                                </div>
                            </div>
                            <h4>
                                <span class="count">963</span>
                                <small> + </small>
                            </h4>
                            <h6 class="title_no_a_18">Awards Winning</h6>
                        </div>
                        <!---============spacing==========--->
                        <div class="pd_bottom_20"></div>
                        <!---============spacing==========--->
                    </div>
                    <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12"></div>
                </div>
            </div>
            <!---============spacing==========--->
            <div class="pd_bottom_50"></div>
            <!---============spacing==========--->
            <div class="ab_img_right_bottom z_0 mr_bottom_minus_250">
                <img src="{{ 'assets-front/images/shape/wave-pattern-1.png' }}" class="img-fluid" alt="img" />
            </div>
        </section>
        <!--funfacts-->
        <!--team-->
        <section class="team-section">
            <!---============spacing==========--->
            <div class="pd_top_80"></div>
            <!---============spacing==========--->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text-center type_one">
                            <h4 class="sm_title">Our Team Member</h4>
                            <div class="title_whole">
                                <h2 class="title">Meet Our Amazing Team</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!---============spacing==========--->
                <div class="pd_bottom_40"></div>
                <!---============spacing==========--->
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="team_box type_two">
                            <div class="team_box_inner">
                                <div class="contnet">
                                    <h6 class="title_22">
                                        <a href="#"> Harry R. Blackston </a>
                                    </h6>
                                    <p>Senior Manager</p>
                                </div>
                                <div class="image_box">
                                    <img src="{{ 'assets-front/images/team/team-1-min.png' }}" alt="img"
                                        class="img-fluid" />

                                    <div class="social-icons trans">
                                        <ul>
                                            <li>
                                                <a href="#" class="m_icon">
                                                    <i class="fab fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="m_icon">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="m_icon">
                                                    <i class="fab fa-skype"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="m_icon">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="team_box type_two">
                            <div class="team_box_inner">
                                <div class="contnet">
                                    <h6 class="title_22">
                                        <a href="#"> Guillermo V. Hanson </a>
                                    </h6>
                                    <p>Business Consultant</p>
                                </div>
                                <div class="image_box">
                                    <img src="{{ 'assets-front/images/team/team-2-min.png' }}" alt="img"
                                        class="img-fluid" />
                                    <div class="social-icons trans">
                                        <ul>
                                            <li>
                                                <a href="#" class="m_icon">
                                                    <i class="fab fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="m_icon">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="m_icon">
                                                    <i class="fab fa-skype"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="m_icon">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="team_box type_two">
                            <div class="team_box_inner">
                                <div class="contnet">
                                    <h6 class="title_22">
                                        <a href="#"> Michael A. Yates </a>
                                    </h6>
                                    <p>Junior Manager</p>
                                </div>
                                <div class="image_box">
                                    <img src="{{ 'assets-front/images/team/team-3-min.png' }}" alt="img"
                                        class="img-fluid" />
                                    <div class="social-icons trans">
                                        <ul>
                                            <li>
                                                <a href="#" class="m_icon">
                                                    <i class="fab fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="m_icon">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="m_icon">
                                                    <i class="fab fa-skype"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="m_icon">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="team_box type_two">
                            <div class="team_box_inner">
                                <div class="contnet">
                                    <h6 class="title_22">
                                        <a href="#"> Mark M. McClure </a>
                                    </h6>
                                    <p>Sr Engineer</p>
                                </div>
                                <div class="image_box">
                                    <img src="{{ 'assets-front/images/team/team-4-min.png' }}" alt="img"
                                        class="img-fluid" />
                                    <div class="social-icons trans">
                                        <ul>
                                            <li>
                                                <a href="#" class="m_icon">
                                                    <i class="fab fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="m_icon">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="m_icon">
                                                    <i class="fab fa-skype"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="m_icon">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
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
        <!--team-->
        <!--client-->
        <section class="client-section">
            <!---============spacing==========--->
            <div class="pd_top_90"></div>
            <!---============spacing==========--->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text-center type_four">
                            <h4 class="sm_title"> Popular Global Clients</h4>
                            <div class="title_whole">
                                <h2 class="title"> Our Clients</h2>
                            </div>
                            <!---============spacing==========--->
                            <div class="pd_bottom_40"></div>
                            <!---============spacing==========--->
                        </div>
                        <div class="nav_false dot_false">
                            <div class="theme_carousel owl-theme owl-carousel"
                                data-options='{"loop": true, "margin": 10,  "autoheight":true, "lazyload":true, "nav": false, "dots": false, "autoplay": true, "autoplayTimeout": 1500, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "240" :{ "items" : "2" } , "550" :{ "items" : "2" } , "768" :{ "items" : "3" } , "1024":{ "items" : "4" }, "1200":{ "items" : "6" }}}'>
                                <div class="image">
                                    <img src="{{ 'assets-front/images/client-1.png' }}" class="img-fluid w_auto m-auto"
                                        alt="img" />
                                </div>
                                <div class="image">
                                    <img src="{{ 'assets-front/images/client-2.png' }}" class="img-fluid w_auto m-auto"
                                        alt="img" />
                                </div>
                                <div class="image">
                                    <img src="{{ 'assets-front/images/client-3.png' }}" class="img-fluid w_auto m-auto"
                                        alt="img" />
                                </div>
                                <div class="image">
                                    <img src="{{ 'assets-front/images/client-4.png' }}" class="img-fluid w_auto m-auto"
                                        alt="img" />
                                </div>
                                <div class="image">
                                    <img src="{{ 'assets-front/images/client-5.png' }}" class="img-fluid w_auto m-auto"
                                        alt="img" />
                                </div>
                                <div class="image">
                                    <img src="{{ 'assets-front/images/client-6.png' }}" class="img-fluid w_auto m-auto"
                                        alt="img" />
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
        <!--client-->
        <!--testimonial-->

        <!--testimonial-->
    </div>
@endsection
