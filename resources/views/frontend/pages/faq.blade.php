@extends('frontend.layout.app')
@section('mainsection')

@section('title')
    <title>FAQ| ECore TechServ - The Soul of Future Technology</title>
@endsection

@section('description')
    <meta name="description"
        content="Frequently Asked Questions for ECore TechServ. Which can clarify the doubt about ECore TechServ.">
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
                    <h4 class="sm_title">FAQ</h4>
                    <div class="title_whole">
                        <h2 class="title"> Clarify Your Doubt with Our FAQ & Answers.</h2>
                    </div>
                    <!---============spacing==========--->
                    <div class="pd_bottom_20"></div>
                    <!---============spacing==========--->
                </div>
                {{-- <div class="position-relative br_left_3px_theme_color pd_left_10">
                    Sed ut perspiciatis unde omnis iste natus voluptatem accusantium doloremque
                    laudantium aperiam eaquecy
                    inventore veritatis architecto beatae
                </div> --}}
                <!---============spacing==========--->
                <div class="pd_bottom_30"></div>
                <!---============spacing==========--->
                <div class="block_faq">
                    <div class="accordion-box">
                        <div class="accordion active-block">
                            <div class="question faq_header active">
                                <div class="question_box ">
                                    <div class="title_no_a_18 trans">What is ECore TechServ strategy for serve it services?
                                    </div>
                                    <span class="icon_fq trans fi-rs-arrow-small-right"></span>
                                </div>
                            </div>
                            <div class="answer accordion-content" style="display: block;">
                                ECore TechServ strategy for serving IT services is client-centric, focusing on custom solutions, rapid response, and cutting-edge technology. We prioritize understanding client objectives, delivering scalable solutions, and providing ongoing support to ensure maximum efficiency and satisfaction.
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="question faq_header">
                                <div class="question_box">
                                    <div class="title_no_a_18 trans">Why ECore TechServ gives better it services compare to other?
                                    </div>
                                    <span class="icon_fq trans fi-rs-arrow-small-right"></span>
                                </div>
                            </div>
                            <div class="answer accordion-content current" style="display: none;">
                                ECore TechServ stands out for its commitment to excellence in IT services. Company prioritizes customer satisfaction, offering personalized solutions tailored to each client's unique needs. Their team comprises highly skilled professionals with extensive experience and expertise across diverse IT domains. First understand clients’ needs as a project then execute it in three steps first one is planning, secund is Research and analysis and the last one is executed and development. Company leverages cutting-edge technologies, agile methodologies, and proactive support to deliver superior outcomes efficiently and cost-effectively. With a focus on innovation, reliability, and continuous improvement, They consistently exceed expectations, earning the trust of their clients. <br>
                                <a href="{{url('/about-us')}}" class="btn btn-warning mt-3">About Us</a>
                            </div>
                           
                        </div>
                        <div class="accordion">
                            <div class="question faq_header">
                                <div class="question_box ">
                                    <div class="title_no_a_18 trans">
                                        What is ECore TechServ strategy for Website Development?
                                    </div>
                                    <span class="icon_fq trans fi-rs-arrow-small-right"></span>
                                </div>
                            </div>


                            <div class="answer accordion-content">
                                ECore TechServ‘s strategy for website development revolves around tailored solutions, emphasizing user experience, responsive design, and robust functionality. company prioritize understanding client needs, leveraging the latest technologies, and ensuring seamless integration for optimal performance and customer satisfaction. <br>
                                <a href="{{route('service.website')}}" class="btn btn-warning mt-3">Know More</a>

                            </div>
                        </div>
                        
                        <div class="accordion">
                            <div class="question faq_header">
                                <div class="question_box ">
                                    <div class="title_no_a_18 trans">
                                        How ECore TechServ grows clients’ businesses through digital marketing service?
                                    </div>
                                    <span class="icon_fq trans fi-rs-arrow-small-right"></span>
                                </div>
                            </div>


                            <div class="answer accordion-content">
                                ECore TechServ fuels client business growth through comprehensive digital marketing services. We start by understanding your unique goals, then craft data-driven strategies incorporating SEO, PPC, social media, and content marketing. Through targeted campaigns, we increase brand visibility, drive qualified traffic, and optimize conversions. Our focus on analytics ensures continuous refinement, maximizing ROI and long-term success. Whether it's enhancing online presence, boosting sales, or expanding market reach, our digital expertise propels your business forward in today's competitive landscape." <br>
                                <a href="{{route('service.dm')}}" class="btn btn-warning mt-3">Know More</a>

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










<section class="faq-section">
    <!---============spacing==========--->
    <div class="pd_top_90"></div>
    <!---============spacing==========--->
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section_title type_one">
                    <h4 class="sm_title"> Faqs</h4>
                    <div class="title_whole">
                        <h2 class="title"> Frequently Asked
                            Questions!</h2>
                    </div>
                    {{-- <p> Sed ut perspiciatis unde natus voluptatem accusantium doloremque laudantium
                        aperiam
                        inventore veritatis architecto beatae</p> --}}
                </div>
                <!---============spacing==========--->
                <div class="pd_bottom_40"></div>
                <!---============spacing==========--->
                <div class="theme_btn_all">
                    <a href="{{url('/contact-us')}}" class="theme_btn big rotate">
                        Contact Us <span> <i class=" fi-rr-arrow-small-up"></i></span>
                    </a>
                </div>
                <!---============spacing==========--->
                <div class="pd_bottom_30"></div>
                <!---============spacing==========--->
            </div>
            <div class="col-lg-7">
                <section class="block_faq">
                    <div class="accordion-box">
                        <div class="accordion">
                            <div class="question faq_header">
                                <div class="question_box ">
                                    <div class="title_no_a_18 trans">Which type of graphics ECore TechServ create for their clients marketing?
                                    </div>
                                    <span class="icon_fq trans fi-rs-arrow-small-right"></span>
                                </div>
                            </div>
                            <div class="answer accordion-content">
                                ECore TechServ specializes in creating a diverse range of graphics with creativity to elevate their clients' marketing efforts. From captivating infographics and engaging social media visuals to eye-catching banners and dynamic video animations, they tailor their graphics to suit each client's unique brand identity and campaign objectives. Whether it's enhancing brand awareness, driving conversions, or conveying complex information in a visually appealing manner, their expert designers deliver high-quality, impactful graphics that resonate with audiences across various platforms, ensuring maximum impact and ROI for our clients.<br>
                                <a href="{{route('service.graphics')}}" class="btn btn-warning mt-3">Know More</a>

                            </div>
                        </div>
                        <div class="accordion">
                            <div class="question faq_header">
                                <div class="question_box ">
                                    <div class="title_no_a_18 trans">How ECore TechServ gives network service and network securities ?
                                    </div>
                                    <span class="icon_fq trans fi-rs-arrow-small-right"></span>
                                </div>
                            </div>
                            <div class="answer accordion-content">
                                ECore TechServ delivers comprehensive network services and security solutions tailored to your business needs. We begin by assessing your current network infrastructure, identifying vulnerabilities, and designing scalable solutions. From network setup and configuration to ongoing monitoring and maintenance, we ensure optimal performance and uptime. Their security measures include robust firewalls, intrusion detection systems, and encryption protocols to safeguard data and prevent unauthorized access. With proactive monitoring and timely updates, we provide peace of mind, enabling you to focus on your core business while we manage your network efficiently and securely.<br>
                                <a href="{{route('sevice.network')}}" class="btn btn-warning mt-3">Know More</a>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="question faq_header">
                                <div class="question_box">
                                    <div class="title_no_a_18 trans">How ECore TechServ gives security services through CCTV surveillance and security devices
                                        ?</div>
                                    <span class="icon_fq trans fi-rs-arrow-small-right"></span>
                                </div>
                            </div>
                            <div class="answer accordion-content current" style="display: none;">
                                ECore TechServ ensures comprehensive security through advanced CCTV surveillance and state-of-the-art security devices. They begin by conducting thorough assessments to identify vulnerabilities and tailor solutions to meet specific needs. Their expert technicians install and integrate cutting-edge CCTV systems, access control, and alarm systems, providing round-the-clock monitoring and real-time alerts. With remote access capabilities and advanced analytics, we empower clients to proactively protect their assets and premises. From deterrence to incident response, our holistic approach to security offers peace of mind, safeguarding businesses, homes, and communities against potential threats and intrusions.<br>
                                <a href="{{route('service.cctv')}}" class="btn btn-warning mt-3">Know More</a>
                            </div>
                        </div>
                        
                        <div class="accordion">
                            <div class="question faq_header">
                                <div class="question_box">
                                    <div class="title_no_a_18 trans">It’s true that my company services are cost effective than other companies
                                        ?</div>
                                    <span class="icon_fq trans fi-rs-arrow-small-right"></span>
                                </div>
                            </div>
                            <div class="answer accordion-content current" style="display: none;">
                                Yes, this company takes pride in offering cost-effective IT services without compromising on quality. They streamline processes, leverage economies of scale, and employ efficient resource allocation to keep costs down. Additionally, they prioritize transparency and honesty in pricing, ensuring clients receive fair value for their investment. By eliminating unnecessary expenses and optimizing workflows, they deliver high-quality solutions at competitive rates. Company goal is to provide affordable yet top-notch IT services that empower businesses to thrive in today's competitive landscape, making us a trusted choice for cost-conscious clients seeking maximum return on their investment."                            </div>
                        </div>
                        
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!---============spacing==========--->
    <div class="pd_bottom_40"></div>
    <!---============spacing==========--->
</section>




@endsection