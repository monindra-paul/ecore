@extends('frontend.layout.app')

@section('title')
    <title>Software & Drivers | ECore TechServ - The Soul of Future Technology</title>
@endsection

@section('description')
    <meta name="description"
        content="Download your any Microsoft Operating System(OS), Microsoft Office & Software Here.">
@endsection

@section('keyword')
    <meta name="keywords"
        content="Microsoft OS, Microsoft Office,Adobe Software, Photoshop, Illustrator">
@endsection



@section('mainsection')



<section class="page_header_default pg_bg_cover alignment_center">
    <div class="bakground_cover" style="background-image:url({{ asset('assets-front/images/ecore/software/hero-soft.webp') }})"></div>
    <div class="page_header_content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title_inner">
                        <div class="title">
                            <span class="main_tit">Softwares & Drivers</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 vankine">
                    <ul class="breadcrumb m-auto">
                        <li><a href="{{url('/')}}">Home</a> </li>
                        <li class="#">Softwares & Drivers</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>




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
                                <button class="nav-link" id="vision-tabtab" data-bs-toggle="tab" data-bs-target="#vision"
                                    type="button" role="tab" aria-controls="vision" aria-selected="false">
                                    Softwares & Drivers
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


                                            <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                <div class="icon_box_only trans type_one type_two ">

                                                    <div class="icon_box_in trans">

                                                        <div class="icon">
                                                            <lord-icon src="https://cdn.lordicon.com/bgitlnnj.json"
                                                                trigger="loop" delay="500"
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
                                                                Windows Operating System (OS)
                                                            </a>
                                                        </div>
                                                        <p>Microsoft</p>

                                                        {{-- <button type="button" class="btn btn-primary"
                                                            data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                            Launch static backdrop modal
                                                        </button> --}}
                                                    </div>

                                                </div>
                                            </a>
                                        </div>


                                        <div class="col-lg-4">
                                            <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
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
                                                                Microsoft Office
                                                            </a>
                                                        </div>
                                                        <p>Microsoft</p>

                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-4">
                                            <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
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
                                                                Activator
                                                            </a>
                                                        </div>
                                                        <p>Microsoft</p>

                                                    </div>
                                                </div>
                                            </a>
                                        </div>


                                    </div>



                                </div>
                            </div>










                            <div class="tab-pane" id="mission" role="tabpanel" aria-labelledby="mission-tabtab">
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
                                        <div class="col-lg-3">

                                            <a href="#" data-bs-toggle="modal" data-bs-target="#epsonModal">
                                                <div class="icon_box_only trans type_one type_two ">

                                                    <div class="icon_box_in trans">

                                                        <div class="icon">
                                                            <lord-icon src="https://cdn.lordicon.com/bgitlnnj.json"
                                                                trigger="loop" delay="500"
                                                                colors="primary:#30c9e8,secondary:#ebe6ef"
                                                                style="width:60px;height:60px">
                                                            </lord-icon>
                                                            {{-- <lord-icon src="https://cdn.lordicon.com/bgitlnnj.json"
                                                                trigger="loop" delay="500"
                                                                colors="primary:#30c9e8,secondary:#ebe6ef"
                                                                style="width:100px;height:100px">
                                                            </lord-icon> --}}
                                                        </div>
                                                        <div class="title_18">
                                                            <a href="#">
                                                                Epson
                                                            </a>
                                                        </div>
                                                        <p>Printers</p>

                                                        {{-- <button type="button" class="btn btn-primary"
                                                            data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                            Launch static backdrop modal
                                                        </button> --}}
                                                    </div>

                                                </div>
                                            </a>
                                        </div>


                                        <div class="col-lg-3">
                                            <a href="" data-bs-toggle="modal" data-bs-target="#hpModal">
                                                <div class="icon_box_only trans type_one type_two">
                                                    <div class="icon_box_in trans">
                                                        <div class="icon">
                                                            <lord-icon src="https://cdn.lordicon.com/bgitlnnj.json"
                                                                trigger="loop" delay="500"
                                                                colors="primary:#30c9e8,secondary:#ebe6ef"
                                                                style="width:60px;height:60px">
                                                            </lord-icon>
                                                        </div>
                                                        <div class="title_18">
                                                            <a href="#">
                                                                Hp
                                                            </a>
                                                        </div>
                                                        <p>Printer</p>

                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-lg-3">
                                            <a href="" data-bs-toggle="modal" data-bs-target="#brotherModal">
                                                <div class="icon_box_only trans type_one type_two">
                                                    <div class="icon_box_in trans">
                                                        <div class="icon">
                                                            <lord-icon src="https://cdn.lordicon.com/bgitlnnj.json"
                                                                trigger="loop" delay="500"
                                                                colors="primary:#30c9e8,secondary:#ebe6ef"
                                                                style="width:60px;height:60px">
                                                            </lord-icon>
                                                        </div>
                                                        <div class="title_18">
                                                            <a href="#">
                                                                Brother
                                                            </a>
                                                        </div>
                                                        <p>Printer</p>

                                                    </div>
                                                </div>
                                            </a>
                                        </div>



                                        <div class="col-lg-3">
                                            <a href="" data-bs-toggle="modal" data-bs-target="#canonModal">
                                                <div class="icon_box_only trans type_one type_two">
                                                    <div class="icon_box_in trans">
                                                        <div class="icon">
                                                            <lord-icon src="https://cdn.lordicon.com/bgitlnnj.json"
                                                                trigger="loop" delay="500"
                                                                colors="primary:#30c9e8,secondary:#ebe6ef"
                                                                style="width:60px;height:60px">
                                                            </lord-icon>
                                                        </div>
                                                        <div class="title_18">
                                                            <a href="#">
                                                                Canon
                                                            </a>
                                                        </div>
                                                        <p>Printer</p>

                                                    </div>
                                                </div>
                                            </a>
                                        </div>


                                        <div class="col-lg-3">
                                            <a href="" data-bs-toggle="modal" data-bs-target="#bizhubModal">
                                                <div class="icon_box_only trans type_one type_two">
                                                    <div class="icon_box_in trans">
                                                        <div class="icon">
                                                            <lord-icon src="https://cdn.lordicon.com/bgitlnnj.json"
                                                                trigger="loop" delay="500"
                                                                colors="primary:#30c9e8,secondary:#ebe6ef"
                                                                style="width:60px;height:60px">
                                                            </lord-icon>
                                                        </div>
                                                        <div class="title_18">
                                                            <a href="#">
                                                                BizHub
                                                            </a>
                                                        </div>
                                                        <p>Printer</p>

                                                    </div>
                                                </div>
                                            </a>
                                        </div>



                                        <div class="col-lg-3">
                                            <a href="" data-bs-toggle="modal" data-bs-target="#kyoceraModal">
                                                <div class="icon_box_only trans type_one type_two">
                                                    <div class="icon_box_in trans">
                                                        <div class="icon">
                                                            <lord-icon src="https://cdn.lordicon.com/bgitlnnj.json"
                                                                trigger="loop" delay="500"
                                                                colors="primary:#30c9e8,secondary:#ebe6ef"
                                                                style="width:60px;height:60px">
                                                            </lord-icon>
                                                        </div>
                                                        <div class="title_18">
                                                            <a href="#">
                                                                Kyocera
                                                            </a>
                                                        </div>
                                                        <p>Printer</p>

                                                    </div>
                                                </div>
                                            </a>
                                        </div>



                                        <div class="col-lg-3">
                                            <a href="" data-bs-toggle="modal"
                                                data-bs-target="#konicaMinoltaModal">
                                                <div class="icon_box_only trans type_one type_two">
                                                    <div class="icon_box_in trans">
                                                        <div class="icon">
                                                            <lord-icon src="https://cdn.lordicon.com/bgitlnnj.json"
                                                                trigger="loop" delay="500"
                                                                colors="primary:#30c9e8,secondary:#ebe6ef"
                                                                style="width:60px;height:60px">
                                                            </lord-icon>
                                                        </div>
                                                        <div class="title_18">
                                                            <a href="#">
                                                                Konica Minolta
                                                            </a>
                                                        </div>
                                                        <p>Printer</p>

                                                    </div>
                                                </div>
                                            </a>
                                        </div>


                                        <div class="col-lg-3">
                                            <a href="" data-bs-toggle="modal" data-bs-target="#xeroxModal">
                                                <div class="icon_box_only trans type_one type_two">
                                                    <div class="icon_box_in trans">
                                                        <div class="icon">
                                                            <lord-icon src="https://cdn.lordicon.com/bgitlnnj.json"
                                                                trigger="loop" delay="500"
                                                                colors="primary:#30c9e8,secondary:#ebe6ef"
                                                                style="width:60px;height:60px">
                                                            </lord-icon>
                                                        </div>
                                                        <div class="title_18">
                                                            <a href="#">
                                                                Xerox
                                                            </a>
                                                        </div>
                                                        <p>Printer</p>

                                                    </div>
                                                </div>
                                            </a>
                                        </div>


                                    </div>



                                </div>
                            </div>







                            {{-- softwares and drives tab --}}


                            <div class="tab-pane" id="vision" role="tabpanel" aria-labelledby="vision-tabtab">
                                <div class="tab_content_box">
                                    {{-- <div class="content">
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

                                    </div> --}}

                                    {{-- <div class="container">
                                        <div class="row flex">
                                            <div class="flex-end col-4">
                                                <form action="{{url('/softwares-drivers')}}" method="get">
                                                    <input type="text" value="{{ Request::get('keyword') }}" name="keyword"
                                                                class="form-control float-right" placeholder="Search">

                                                        <div class="input-group-append">
                                                           <button type="submit" class="btn btn-default">
                                                                        <i class="fas fa-search"></i>
                                                            </button>
                                                        </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> --}}


                                    <table class="table col-12">
                                        <thead>
                                            <tr>
                                                {{-- <th class="col-1">SN.</th> --}}
                                                <th class="col-3">Product Name</th>
                                                <th class="col-3">Supported Bits</th>
                                                <th class="col-3">Version</th>
                                                <th class="col-3">Download</th>
                                            </tr>
                                        </thead>
                                        @foreach ($softwaresdrivers as $sd)
                                            <tbody>
                                                <tr>
                                                    {{-- <th scope="row">{{ $os->id }}</th> --}}
                                                    <td>{{ $sd->name }}</td>
                                                    <td>{{ $sd->bits }}</td>
                                                    <td>{{ $sd->version }}</td>
                                                    <td class="text-center">
                                                        <a href="{{ $sd->link }}">
                                                            {{-- <lord-icon src="https://cdn.lordicon.com/fgsdcsla.json" trigger="loop"
                                                        delay="1000" state="hover-slide"
                                                        colors="primary:#30c9e8,secondary:#ebe6ef"
                                                        style="width:50px;height:50px">
                                                    </lord-icon> --}}
                                                            <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30"
                                                                viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                                <path fill="#030a6d"
                                                                    d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-167l80 80c9.4 9.4 24.6 9.4 33.9 0l80-80c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-39 39V184c0-13.3-10.7-24-24-24s-24 10.7-24 24V318.1l-39-39c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9z" />
                                                            </svg>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        @endforeach
                                    </table>




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








    {{-- os models --}}
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Download Operating System</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (!empty($allos))
                        <table class="table col-12">
                            <thead>
                                <tr>
                                    {{-- <th class="col-1">SN.</th> --}}
                                    <th class="col-3">Product Name</th>
                                    <th class="col-3">OS Bits</th>
                                    <th class="col-3">Version</th>
                                    <th class="col-3">Download</th>
                                </tr>
                            </thead>
                            @foreach ($allos as $os)
                                <tbody>
                                    <tr>
                                        {{-- <th scope="row">{{ $os->id }}</th> --}}
                                        <td>{{ $os->name }}</td>
                                        <td>{{ $os->bits }}</td>
                                        <td>{{ $os->version }}</td>
                                        <td class="text-center">
                                            <a href="{{ $os->link }}" target="blank">
                                                {{-- <lord-icon src="https://cdn.lordicon.com/fgsdcsla.json" trigger="loop"
                                                    delay="1000" state="hover-slide"
                                                    colors="primary:#30c9e8,secondary:#ebe6ef"
                                                    style="width:50px;height:50px">
                                                </lord-icon> --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30"
                                                    viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                    <path fill="#030a6d"
                                                        d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-167l80 80c9.4 9.4 24.6 9.4 33.9 0l80-80c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-39 39V184c0-13.3-10.7-24-24-24s-24 10.7-24 24V318.1l-39-39c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9z" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    @endif

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Understood</button> --}}
                </div>
            </div>
        </div>
    </div>


    {{-- ms-office models --}}

    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Download Microsoft Office</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <table class="table col-12">
                        @if (!empty($office))
                            <thead>
                                <tr>

                                    <th class="col-3">Product Name</th>
                                    <th class="col-3">Supported Bits</th>
                                    <th class="col-3">Version</th>
                                    <th class="col-3">Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($office as $off)
                                    <tr>

                                        <td>{{ $off->name }}</td>
                                        <td>{{ $off->bits }}</td>
                                        <td>{{ $off->version }}</td>
                                        <td class="text-center">
                                            <a href="{{ $off->link }}" target="blank">
                                                {{-- <lord-icon src="https://cdn.lordicon.com/fgsdcsla.json" trigger="loop"
                                                delay="1000" state="hover-slide"
                                                colors="primary:#30c9e8,secondary:#ebe6ef"
                                                style="width:50px;height:50px">
                                            </lord-icon> --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30"
                                                    viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                    <path fill="#030a6d"
                                                        d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-167l80 80c9.4 9.4 24.6 9.4 33.9 0l80-80c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-39 39V184c0-13.3-10.7-24-24-24s-24 10.7-24 24V318.1l-39-39c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9z" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        @endif
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Understood</button> --}}
                </div>
            </div>
        </div>
    </div>

    {{-- activetor model --}}

    <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <table class="table col-12">
                        <thead>
                            <tr>
                                <th class="col-1">Id</th>
                                <th class="col-3">Product Name</th>
                                <th class="col-3">OS Bits</th>
                                <th class="col-3">Version</th>
                                <th class="col-3">Download</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Otto</td>
                                <td class="text-center">
                                    <a href="{{ url('/') }}"> <lord-icon src="https://cdn.lordicon.com/fgsdcsla.json"
                                            trigger="loop" delay="1000" state="hover-slide"
                                            colors="primary:#30c9e8,secondary:#ebe6ef" style="width:50px;height:50px">
                                        </lord-icon>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>Thornton</td>
                                <td class="text-center">
                                    <lord-icon src="https://cdn.lordicon.com/fgsdcsla.json" trigger="loop" delay="1000"
                                        state="hover-slide" colors="primary:#30c9e8,secondary:#ebe6ef"
                                        style="width:50px;height:50px">
                                    </lord-icon>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry the Bird</td>
                                <td>Larry the Bird</td>
                                <td>Larry the Bird</td>
                                <td class="text-center">
                                    <lord-icon src="https://cdn.lordicon.com/fgsdcsla.json" trigger="loop" delay="1000"
                                        state="hover-slide" colors="primary:#30c9e8,secondary:#ebe6ef"
                                        style="width:50px;height:50px">
                                    </lord-icon>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Understood</button> --}}
                </div>
            </div>
        </div>
    </div>








    {{-- printers model --}}

    <div class="modal fade" id="epsonModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Download Epson Printers Drivers</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (!empty($allos))
                        <table class="table col-12">
                            <thead>
                                <tr>
                                    {{-- <th class="col-1">SN.</th> --}}
                                    <th class="col-3">Product Name</th>
                                    <th class="col-3">Model No</th>
                                    <th class="col-3">Supported Bits</th>
                                    <th class="col-3">Version</th>
                                    <th class="col-3">Download</th>
                                </tr>
                            </thead>
                            @foreach ($epson as $ep)
                                <tbody>
                                    <tr>
                                        {{-- <th scope="row">{{ $os->id }}</th> --}}
                                        <td>{{ $ep->name }}</td>
                                        <td>{{ $ep->model_no }}</td>
                                        <td>{{ $ep->bits }}</td>
                                        <td>{{ $ep->version }}</td>
                                        <td class="text-center">
                                            <a href="{{ $ep->link }}">
                                                {{-- <lord-icon src="https://cdn.lordicon.com/fgsdcsla.json" trigger="loop"
                                                delay="1000" state="hover-slide"
                                                colors="primary:#30c9e8,secondary:#ebe6ef"
                                                style="width:50px;height:50px">
                                            </lord-icon> --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30"
                                                    viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                    <path fill="#030a6d"
                                                        d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-167l80 80c9.4 9.4 24.6 9.4 33.9 0l80-80c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-39 39V184c0-13.3-10.7-24-24-24s-24 10.7-24 24V318.1l-39-39c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9z" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    @endif

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Understood</button> --}}
                </div>
            </div>
        </div>
    </div>






    <div class="modal fade" id="hpModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Download HP Printers Drivers</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (!empty($hp))
                        <table class="table col-12">
                            <thead>
                                <tr>
                                    {{-- <th class="col-1">SN.</th> --}}
                                    <th class="col-3">Product Name</th>
                                    <th class="col-3">Model No</th>
                                    <th class="col-3">Supported Bits</th>
                                    <th class="col-3">Version</th>
                                    <th class="col-3">Download</th>
                                </tr>
                            </thead>
                            @foreach ($hp as $hps)
                                <tbody>
                                    <tr>
                                        {{-- <th scope="row">{{ $os->id }}</th> --}}
                                        <td>{{ $hps->name }}</td>
                                        <td>{{ $hps->model_no }}</td>
                                        <td>{{ $hps->bits }}</td>
                                        <td>{{ $hps->version }}</td>
                                        <td class="text-center">
                                            <a href="{{ $hps->link }}">
                                                {{-- <lord-icon src="https://cdn.lordicon.com/fgsdcsla.json" trigger="loop"
                                                delay="1000" state="hover-slide"
                                                colors="primary:#30c9e8,secondary:#ebe6ef"
                                                style="width:50px;height:50px">
                                            </lord-icon> --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30"
                                                    viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                    <path fill="#030a6d"
                                                        d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-167l80 80c9.4 9.4 24.6 9.4 33.9 0l80-80c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-39 39V184c0-13.3-10.7-24-24-24s-24 10.7-24 24V318.1l-39-39c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9z" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    @endif

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Understood</button> --}}
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="brotherModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Download Brother Printers Drivers</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (!empty($brother))
                        <table class="table col-12">
                            <thead>
                                <tr>
                                    {{-- <th class="col-1">SN.</th> --}}
                                    <th class="col-3">Product Name</th>
                                    <th class="col-3">Model No</th>
                                    <th class="col-3">Supported Bits</th>
                                    <th class="col-3">Version</th>
                                    <th class="col-3">Download</th>
                                </tr>
                            </thead>
                            @foreach ($brother as $bro)
                                <tbody>
                                    <tr>
                                        {{-- <th scope="row">{{ $os->id }}</th> --}}
                                        <td>{{ $bro->name }}</td>
                                        <td>{{ $bro->model_no }}</td>
                                        <td>{{ $bro->bits }}</td>
                                        <td>{{ $bro->version }}</td>
                                        <td class="text-center">
                                            <a href="{{ $bro->link }}">
                                                {{-- <lord-icon src="https://cdn.lordicon.com/fgsdcsla.json" trigger="loop"
                                            delay="1000" state="hover-slide"
                                            colors="primary:#30c9e8,secondary:#ebe6ef"
                                            style="width:50px;height:50px">
                                        </lord-icon> --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30"
                                                    viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                    <path fill="#030a6d"
                                                        d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-167l80 80c9.4 9.4 24.6 9.4 33.9 0l80-80c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-39 39V184c0-13.3-10.7-24-24-24s-24 10.7-24 24V318.1l-39-39c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9z" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    @endif

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Understood</button> --}}
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="canonModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Download Canon Printers Drivers</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (!empty($canon))
                        <table class="table col-12">
                            <thead>
                                <tr>
                                    {{-- <th class="col-1">SN.</th> --}}
                                    <th class="col-3">Product Name</th>
                                    <th class="col-3">Model No</th>
                                    <th class="col-3">Supported Bits</th>
                                    <th class="col-3">Version</th>
                                    <th class="col-3">Download</th>
                                </tr>
                            </thead>
                            @foreach ($canon as $cn)
                                <tbody>
                                    <tr>
                                        {{-- <th scope="row">{{ $os->id }}</th> --}}
                                        <td>{{ $cn->name }}</td>
                                        <td>{{ $cn->model_no }}</td>
                                        <td>{{ $cn->bits }}</td>
                                        <td>{{ $cn->version }}</td>
                                        <td class="text-center">
                                            <a href="{{ $cn->link }}">
                                                {{-- <lord-icon src="https://cdn.lordicon.com/fgsdcsla.json" trigger="loop"
                                            delay="1000" state="hover-slide"
                                            colors="primary:#30c9e8,secondary:#ebe6ef"
                                            style="width:50px;height:50px">
                                        </lord-icon> --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30"
                                                    viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                    <path fill="#030a6d"
                                                        d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-167l80 80c9.4 9.4 24.6 9.4 33.9 0l80-80c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-39 39V184c0-13.3-10.7-24-24-24s-24 10.7-24 24V318.1l-39-39c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9z" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    @endif

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Understood</button> --}}
                </div>
            </div>
        </div>
    </div>




    <div class="modal fade" id="bizhubModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Download Biz Hub Printers Drivers</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (!empty($bizhub))
                        <table class="table col-12">
                            <thead>
                                <tr>
                                    {{-- <th class="col-1">SN.</th> --}}
                                    <th class="col-3">Product Name</th>
                                    <th class="col-3">Model No</th>
                                    <th class="col-3">Supported Bits</th>
                                    <th class="col-3">Version</th>
                                    <th class="col-3">Download</th>
                                </tr>
                            </thead>
                            @foreach ($bizhub as $bz)
                                <tbody>
                                    <tr>
                                        {{-- <th scope="row">{{ $os->id }}</th> --}}
                                        <td>{{ $bz->name }}</td>
                                        <td>{{ $bz->model_no }}</td>
                                        <td>{{ $bz->bits }}</td>
                                        <td>{{ $bz->version }}</td>
                                        <td class="text-center">
                                            <a href="{{ $bz->link }}">
                                                {{-- <lord-icon src="https://cdn.lordicon.com/fgsdcsla.json" trigger="loop"
                                            delay="1000" state="hover-slide"
                                            colors="primary:#30c9e8,secondary:#ebe6ef"
                                            style="width:50px;height:50px">
                                        </lord-icon> --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30"
                                                    viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                    <path fill="#030a6d"
                                                        d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-167l80 80c9.4 9.4 24.6 9.4 33.9 0l80-80c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-39 39V184c0-13.3-10.7-24-24-24s-24 10.7-24 24V318.1l-39-39c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9z" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    @endif

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Understood</button> --}}
                </div>
            </div>
        </div>
    </div>





    <div class="modal fade" id="kyoceraModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Download Kyocera Printers Drivers</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (!empty($kyocera))
                        <table class="table col-12">
                            <thead>
                                <tr>
                                    {{-- <th class="col-1">SN.</th> --}}
                                    <th class="col-3">Product Name</th>
                                    <th class="col-3">Model No</th>
                                    <th class="col-3">Supported Bits</th>
                                    <th class="col-3">Version</th>
                                    <th class="col-3">Download</th>
                                </tr>
                            </thead>
                            @foreach ($kyocera as $kc)
                                <tbody>
                                    <tr>
                                        {{-- <th scope="row">{{ $os->id }}</th> --}}
                                        <td>{{ $kc->name }}</td>
                                        <td>{{ $kc->model_no }}</td>
                                        <td>{{ $kc->bits }}</td>
                                        <td>{{ $kc->version }}</td>
                                        <td class="text-center">
                                            <a href="{{ $kc->link }}">
                                                {{-- <lord-icon src="https://cdn.lordicon.com/fgsdcsla.json" trigger="loop"
                                            delay="1000" state="hover-slide"
                                            colors="primary:#30c9e8,secondary:#ebe6ef"
                                            style="width:50px;height:50px">
                                        </lord-icon> --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30"
                                                    viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                    <path fill="#030a6d"
                                                        d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-167l80 80c9.4 9.4 24.6 9.4 33.9 0l80-80c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-39 39V184c0-13.3-10.7-24-24-24s-24 10.7-24 24V318.1l-39-39c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9z" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    @endif

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Understood</button> --}}
                </div>
            </div>
        </div>
    </div>




    <div class="modal fade" id="konicaMinoltaModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Download Konica Minolta Printers Drivers</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (!empty($konicaMinolta))
                        <table class="table col-12">
                            <thead>
                                <tr>
                                    {{-- <th class="col-1">SN.</th> --}}
                                    <th class="col-3">Product Name</th>
                                    <th class="col-3">Model No</th>
                                    <th class="col-3">Supported Bits</th>
                                    <th class="col-3">Version</th>
                                    <th class="col-3">Download</th>
                                </tr>
                            </thead>
                            @foreach ($konicaMinolta as $km)
                                <tbody>
                                    <tr>
                                        {{-- <th scope="row">{{ $os->id }}</th> --}}
                                        <td>{{ $km->name }}</td>
                                        <td>{{ $km->model_no }}</td>
                                        <td>{{ $km->bits }}</td>
                                        <td>{{ $km->version }}</td>
                                        <td class="text-center">
                                            <a href="{{ $km->link }}">
                                                {{-- <lord-icon src="https://cdn.lordicon.com/fgsdcsla.json" trigger="loop"
                                            delay="1000" state="hover-slide"
                                            colors="primary:#30c9e8,secondary:#ebe6ef"
                                            style="width:50px;height:50px">
                                        </lord-icon> --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30"
                                                    viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                    <path fill="#030a6d"
                                                        d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-167l80 80c9.4 9.4 24.6 9.4 33.9 0l80-80c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-39 39V184c0-13.3-10.7-24-24-24s-24 10.7-24 24V318.1l-39-39c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9z" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    @endif

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Understood</button> --}}
                </div>
            </div>
        </div>
    </div>




    <div class="modal fade" id="xeroxModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Download Xerox Printers Drivers</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (!empty($xerox))
                        <table class="table col-12">
                            <thead>
                                <tr>
                                    {{-- <th class="col-1">SN.</th> --}}
                                    <th class="col-3">Product Name</th>
                                    <th class="col-3">Model No</th>
                                    <th class="col-3">Supported Bits</th>
                                    <th class="col-3">Version</th>
                                    <th class="col-3">Download</th>
                                </tr>
                            </thead>
                            @foreach ($xerox as $xz)
                                <tbody>
                                    <tr>
                                        {{-- <th scope="row">{{ $os->id }}</th> --}}
                                        <td>{{ $xz->name }}</td>
                                        <td>{{ $xz->model_no }}</td>
                                        <td>{{ $xz->bits }}</td>
                                        <td>{{ $xz->version }}</td>
                                        <td class="text-center">
                                            <a href="{{ $xz->link }}">
                                                {{-- <lord-icon src="https://cdn.lordicon.com/fgsdcsla.json" trigger="loop"
                                            delay="1000" state="hover-slide"
                                            colors="primary:#30c9e8,secondary:#ebe6ef"
                                            style="width:50px;height:50px">
                                        </lord-icon> --}}
                                                <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30"
                                                    viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                    <path fill="#030a6d"
                                                        d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-167l80 80c9.4 9.4 24.6 9.4 33.9 0l80-80c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-39 39V184c0-13.3-10.7-24-24-24s-24 10.7-24 24V318.1l-39-39c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9z" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    @endif

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Understood</button> --}}
                </div>
            </div>
        </div>
    </div>





@endsection
