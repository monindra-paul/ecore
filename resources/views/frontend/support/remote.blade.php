@extends('frontend.layout.app')
@section('mainsection')
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
                                <img src="{{ 'assets-front/images/icon-image-1.png' }}" alt="img" class="img-fluid" />
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
                                <img src="{{ 'assets-front/images/icon-image-2.png' }}" alt="img" class="img-fluid" />
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
                            <img src="{{ 'assets-front/images/about/about-1-min.png' }}" alt="img" class="img-fluid" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 pd_left_30">
                    <div class="section_title type_one">
                        <h4 class="sm_title">Remote Support</h4>
                        <div class="title_whole">
                            <h2 class="title">
                                Get Remote Support from Us
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
                                    Using Anydesk
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
                                    Using TeamViewer
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
                                                <span> Describe your problem to us. Need Help? Download Anydesk and Share
                                                    your
                                                    Anydesk id to our agent & get your solution</span>
                                            </li>

                                        </ul>

                                    </div>
                                    <div class="call_to_action style_one">
                                        <div class="section_title type_one">
                                            <div class="title_whole">
                                                <h2 class="title">
                                                    Describe your problem to us. Need Help?
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="theme_btn_all">
                                            <a href="#" class="theme_btn">
                                                Free Call Now<span> <i class=" fi-rr-arrow-small-up"></i></span>
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center contact_header_one">
                                            <div class="icon_s">
                                                <i class=" fi-rr-headphones"></i>
                                            </div>
                                            <div class="content">
                                                <h6 class="tite">Need Help?</h6>
                                                <div class="title_20"><a href="tel:+000(123)45688">+000(123)456 88</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="mission" role="tabpanel" aria-labelledby="mission-tabtab">
                                <div class="tab_content_box">
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
                                                <span> Describe your problem to us. Need Help? Download Team Viewer and
                                                    Share
                                                    your
                                                    Team Viewer id to our agent & get your solution</span>
                                            </li>

                                        </ul>

                                    </div>
                                    <div class="call_to_action style_one">
                                        <div class="section_title type_one">
                                            <div class="title_whole">
                                                <h2 class="title">
                                                    Describe your problem to us. Need Help?
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="theme_btn_all">
                                            <a href="#" class="theme_btn">
                                                Free Call Now<span> <i class=" fi-rr-arrow-small-up"></i></span>
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center contact_header_one">
                                            <div class="icon_s">
                                                <i class=" fi-rr-headphones"></i>
                                            </div>
                                            <div class="content">
                                                <h6 class="tite">Need Help?</h6>
                                                <div class="title_20"><a href="tel:+000(123)45688">+000(123)456 88</a>
                                                </div>
                                            </div>
                                        </div>
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
@endsection
