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
                        {{-- <ul class="nav nav-tabs links trans" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active" id="aboutuss-tabtab" data-bs-toggle="tab"
                                    data-bs-target="#aboutuss" type="button" role="tab" aria-controls="aboutuss"
                                    aria-selected="false">
                                    Website
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
                                    Graphic Designing
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

                        </ul> --}}
                        <div class="s_tabs_content tab-content">



                            <div class="tab-pane active" id="mission" role="tabpanel" aria-labelledby="mission-tabtab">
                                <div class="tab_content_box">
                                    

                                    <div class="row">
                                        <div class="col-lg-3">

                                            <a href="{{route('portfolio.websites')}}">
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
                                                            <a href="{{route('portfolio.websites')}}">
                                                                Website 
                                                            </a>
                                                        </div>
                                                        <p>Portfolio</p>

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
                                                            <lord-icon
                                                            src="https://cdn.lordicon.com/bzqvamqv.json"
                                                            trigger="loop"
                                                            delay="500"
                                                            style="width:60px;height:60px; border-radius:50%">
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
