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
                        <ul class="nav nav-tabs links trans" role="tablist">
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

                        </ul>
                        <div class="s_tabs_content tab-content">



                            <div class="tab-pane active" id="aboutuss" role="tabpanel" aria-labelledby="aboutuss-tabtab">
                                <div class="tab_content_box">
                                  
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
                                                        <li class="trans" data-filter=".portfolio_category-medical">App Development</li>
                                                        --}}
                    
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portfoliocontainer row" style="position: relative; height: 1328.8px;">

                                            @foreach ($allportfolios as $webport)
                                            <div
                                            class="portfolio-wrapper col-xl-4 col-lg-4 col-md-6 col-sm-6 portfolio_category-car portfolio_category-travel">
                                            <div class="portfolio_box type_two">
                                                <div class="image_box ">
                                                    <img src="{{ asset('portfolio/website/' . $webport->image) }}"
                                                        class="img-fluid" alt="img" />
                                                    <a data-fancybox="gallery" class="zm_btn trans"
                                                        href="{{ asset('portfolio/website/' . $webport->image) }}">
                                                        <span class="fi-rs-cursor-plus zoom_icon"></span>
                                                    </a>
                                                </div>
                                                <div class="content_box  trans">
                                                    <div class="bg trans"></div>
                                                    <div class="con">
                                                        <h2 class="title_30">
                                                            <a href="{{$webport->link}}" target="blank" rel="bookmark">{{$webport->name}}</a>
                                                        </h2>
                                                        <p>{{$webport->category}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            @endforeach
                                            



                                            {{-- <div class="portfolio-wrapper col-xl-4 col-lg-4 col-md-6 col-sm-6 portfolio_category-house">
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
                                                                <a href="http://gyp-techno.com" target="blank" rel="bookmark">Udvah Solution
                                                                    Pvt. Ltd.</a>
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
                                                                <a href="https://lokenathcomputer.com/" target="blank"
                                                                    rel="bookmark">Lokenath Computer</a>
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
                                                                <a href="https://mahaayurvedas.com/" target="blank" rel="bookmark">Maha
                                                                    Ayurvedas</a>
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
                                                                <a href="https://drsteel.in" target="blank" rel="bookmark">Blue Lagoon
                                                                    Salon</a>
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
                                                                <a href="http://gyp-techno.com" target="blank" rel="bookmark">Gyp Techno
                                                                    Solutions</a>
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
                                                                <a href="https://updatedailynews.com" target="blank" rel="bookmark">Asquare
                                                                    Event</a>
                                                            </h2>
                                                            <p>Event Management</p>
                                                        </div>
                    
                                                    </div>
                                                </div>
                                            </div>
                    
                                            <div class="portfolio-wrapper col-xl-4 col-lg-4 col-md-6 col-sm-6 portfolio_category-house">
                                                <div class="portfolio_box type_two">
                                                    <div class="image_box ">
                                                        <img src="{{ asset('assets-front/images/ecore/portfolio/web/tolly.webp') }}"
                                                            class="img-fluid" alt="img" />
                                                        <a data-fancybox="gallery" class="zm_btn trans"
                                                            href="{{ asset('assets-front/images/ecore/portfolio/web/tolly.webp') }}">
                                                            <span class="fi-rs-cursor-plus zoom_icon"></span>
                                                        </a>
                                                    </div>
                                                    <div class="content_box  trans">
                                                        <div class="bg trans"></div>
                                                        <div class="con">
                                                            <h2 class="title_30">
                                                                <a href="https://tollywoodindustry.com" target="blank"
                                                                    rel="bookmark">Perfect Solutions</a>
                                                            </h2>
                                                            <p>Casting Agency</p>
                                                        </div>
                    
                                                    </div>
                                                </div>
                                            </div> --}}
                    
                                        </div>
                                    </section>



                                </div>
                            </div>










                            <div class="tab-pane" id="mission" role="tabpanel" aria-labelledby="mission-tabtab">
                                <div class="tab_content_box">
                                    

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
                                      
                                            <tbody>
                                                <tr>
                                                    {{-- <th scope="row">{{ $os->id }}</th> --}}
                                                    <td>bf</td>
                                                    <td>xbd</td>
                                                    <td>xb</td>
                                                    <td class="text-center">
                                                        <a href="xb ">
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








@endsection
