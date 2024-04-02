@extends('frontend.layout.app')
@section('mainsection')

@section('title')
    <title>FAQ| ECore TechServ - The Soul of Future Technology</title>
@endsection

@section('description')
    <meta name="description"
        content="Frequently Asked Questions for ECore TechServ. Which can clarify the doubt about us.">
@endsection

@section('keyword')
    <meta name="keywords"
        content="Website Designing, Website Development Company in Kolkata, Website Designing Company in Kolkata,IT Support Company,IT Support Company in Kolkata, IT Services in Kolkata,  CCTV Survelliance service provider.">
@endsection


<section class="page_header_default pg_bg_cover alignment_center">
    <div class="bakground_cover" style="background-image:url({{ asset('assets-front/images/page-image-1-min.jpg') }})"></div>
    <div class="page_header_content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title_inner">
                        <div class="title">
                            <span class="main_tit">Frequently Asked Questions</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 vankine">
                    <ul class="breadcrumb m-auto">
                        <li><a href="{{url('/')}}">Home</a> </li>
                        <li class="">FAQ</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="faq-section">
    <!---============spacing==========--->
    <div class="pd_top_60"></div>
    <!---============spacing==========--->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="section_title type_one">
                    <h4 class="sm_title"> Amazing Company</h4>
                    <div class="title_whole">
                        <h2 class="title"> Great Insurance your Solutions For Business</h2>
                    </div>
                    <!---============spacing==========--->
                    <div class="pd_bottom_20"></div>
                    <!---============spacing==========--->
                </div>
                <div class="position-relative br_left_3px_theme_color pd_left_10">
                    Sed ut perspiciatis unde omnis iste natus voluptatem accusantium doloremque
                    laudantium aperiam eaquecy
                    inventore veritatis architecto beatae
                </div>
                <!---============spacing==========--->
                <div class="pd_bottom_30"></div>
                <!---============spacing==========--->
                <div class="block_faq">
                    <div class="accordion-box">
                        <div class="accordion active-block">
                            <div class="question faq_header active">
                                <div class="question_box ">
                                    <div class="title_no_a_18 trans">What Is Insurance Services?
                                    </div>
                                    <span class="icon_fq trans fi-rs-arrow-small-right"></span>
                                </div>
                            </div>
                            <div class="answer accordion-content" style="display: block;">
                                Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy
                                Retailer
                                For The People, Focusing On The Promotion Of Sustainable Living,
                                Renewable Energy Production And Smart Energy Grid Utility Services.
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="question faq_header">
                                <div class="question_box">
                                    <div class="title_no_a_18 trans">How Many Service We Provide ?
                                    </div>
                                    <span class="icon_fq trans fi-rs-arrow-small-right"></span>
                                </div>
                            </div>
                            <div class="answer accordion-content current" style="display: none;">
                                Quis autem vel eum iure reprehenderit ea voluptate esse molestiae
                                consequatur veillum voluptas nullaes
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="question faq_header">
                                <div class="question_box ">
                                    <div class="title_no_a_18 trans">
                                        How Much Experience Our Team Member ?
                                    </div>
                                    <span class="icon_fq trans fi-rs-arrow-small-right"></span>
                                </div>
                            </div>


                            <div class="answer accordion-content">
                                Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy
                                Retailer
                                For The People, Focusing On The Promotion Of Sustainable Living,
                                Renewable Energy Production And Smart Energy Grid Utility Services.
                            </div>
                        </div>
                    </div>
                </div>
                <!---============spacing==========--->
                <div class="pd_bottom_40"></div>
                <!---============spacing==========--->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pd_left_30">
                <div class="image_box_only  type_three">
                    <div class="left">
                        <div class="image one">
                            <img src=" {{ asset('assets-front/images/about/about-2-1.jpg')}}" alt="img" class="img-fluid">
                        </div>
                        <div class="image two">
                            <img src=" {{ asset('assets-front/images/about/about-2-3.jpg')}}" alt="img" class="img-fluid">
                        </div>
                    </div>
                    <div class="right">
                        <div class="image three">
                            <img src=" {{ asset('assets-front/images/about/about-2-2.jpg')}}" alt="img" class="img-fluid">
                        </div>
                    </div>
                </div>
                <!---============spacing==========--->
                <div class="pd_bottom_40"></div>
                <!---============spacing==========--->
            </div>
        </div>
    </div>
    <!---============spacing==========--->
    <div class="pd_bottom_40"></div>
    <!---============spacing==========--->
</section>
@endsection