@extends('frontend.layout.app')


@section('title')
    <title>Contact Us | ECore TechServ - The Soul of Future Technology</title>
@endsection

@section('description')
    <meta name="description"
        content="Contact us with your any it related problem. We will support you with our best abilities">
@endsection

@section('keyword')
    <meta name="keywords"
        content="Contact us, ECore TechServ">
@endsection



@section('mainsection')
    <div id="content" class="site-content">


        <section class="page_header_default pg_bg_cover alignment_center">
            <div class="bakground_cover" style="background-image:url({{ asset('assets-front/images/ecore/contact.webp') }})"></div>
            <div class="page_header_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="banner_title_inner">
                                <div class="title">
                                    <span class="main_tit">Contact Us</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 vankine">
                            <ul class="breadcrumb m-auto">
                                <li><a href="{{url('/')}}">Home</a> </li>
                                <li class="">Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!---contact-->
        <section class="contact-section">
            <!---============spacing==========--->
            <div class="pd_top_80"></div>
            <!---============spacing==========--->
            <div class="container">
                <div class="row">
                   
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="contact_box_content">
                            <div class="icon trans">
                                {{-- <img src="{{ asset('assets-front/images/cont-1.png') }}" alt="img" class="img-fluid"> --}}
                                <lord-icon src="https://cdn.lordicon.com/iikoxwld.json" trigger="loop" trigger="in"
                                    delay="500" style="width:100px;height:100px">
                                </lord-icon>
                            </div>
                            <div class="contact-infor">
                                <h6 class="title_no_a_24">Location</h6>
                                <span>61, Regent Place, Ranikuthi,  Tollygunge, Kolkata, W.B 700040
                                </span>
                            </div>
                        </div>
                        <!---============spacing==========--->
                        <div class="pd_bottom_30"></div>
                        <!---============spacing==========--->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="contact_box_content">
                            <div class="icon trans">
                                {{-- <img src="{{ asset('assets-front/images/cont-2.png') }}" alt="img" class="img-fluid"> --}}
                                <lord-icon src="https://cdn.lordicon.com/tmqaflqo.json" trigger="loop" delay="1000"
                                    state="in-assembly" style="width:100px;height:100px">
                                </lord-icon>
                            </div>
                            <div class="contact-infor">
                                <h6 class="title_no_a_24">Email</h6>
                                <a href="mailto:info@ecoretechserv.com" target="_blank">info@ecoretechserv.com
                                </a>
                                <a href="mailto:contact@ecoretechserv.com" target="_blank">contact@ecoretechserv.com</a>
                            </div>
                        </div>
                        <!---============spacing==========--->
                        <div class="pd_bottom_30"></div>
                        <!---============spacing==========--->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="contact_box_content">
                            <div class="icon trans">
                                {{-- <img src="{{ asset('assets-front/images/cont-3.png') }}" alt="img" class="img-fluid"> --}}
                                <lord-icon src="https://cdn.lordicon.com/lvfwelat.json" trigger="loop" delay="500"
                                    style="width:100px;height:100px">
                                </lord-icon>
                            </div>
                            <div class="contact-infor">
                                <h6 class="title_no_a_24">Call Us</h6>
                                <a href="tel:+919875681413">+91 9875681413
                                </a>
                                <a href="tel:03335575768">033 - 3557 5768</a>
                            </div>
                        </div>
                        <!---============spacing==========--->
                        <div class="pd_bottom_30"></div>
                        <!---============spacing==========--->
                    </div>
                </div>
            </div>
            <!---============spacing==========--->
            <div class="pd_bottom_40"></div>
            <!---============spacing==========--->
        </section>
        <!---contact end-->

        <!--form-->
        <section class="form-section bg_light_1 position-relative">
            <!---============spacing==========--->
            <div class="pd_top_90"></div>
            <!---============spacing==========--->
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="section_title type_one">
                            <h4 class="sm_title"> Get In Touch</h4>
                            <div class="title_whole">
                                <h2 class="title"> Need Any Help?
                                    Or Looking For
                                    an Agent</h2>
                            </div>
                            <p> </p>
                        </div>
                        <!---============spacing==========--->
                        <div class="pd_bottom_40"></div>
                        <!---============spacing==========--->
                        <div class="social-icons">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/ecoretechserv" class="m_icon" target="blank">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://x.com/ecoretechserv" class="m_icon" target="blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="https://www.instagram.com/ecoretechserv/" class="m_icon" target="blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="https://www.linkedin.com/company/ecoretechserv/" class="m_icon" target="blank">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!---============spacing==========--->
                        <div class="pd_bottom_20"></div>
                        <!---============spacing==========--->
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <section class="contact_form_box_all">
                            <div class="contact_form_shortcode">
                                <form id="contact-form" method="post" action="{{ route('post.contact') }}" role="form">
                                    @csrf
                                    <div class="messages"></div>
                                    <div class="controls">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    @if ($errors->has('name'))
                                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                                    @endif
                                                    <input type="text" name="name" placeholder="Your Name *"
                                                        data-error="Enter Your Name">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    @if ($errors->has('email'))
                                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                                    @endif
                                                    <input type="text" name="email" placeholder="Email *"
                                                        data-error="Enter Your Email Id">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    @if ($errors->has('mobile'))
                                                        <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                                    @endif
                                                    <input type="text" name="mobile"
                                                        placeholder=" Enter Your Mobile Number">
                                                </div>
                                            </div>


                                            @if ($errors->has('subject'))
                                                <span class="text-danger">{{ $errors->first('subject') }}</span>
                                            @endif
                                            <div class="col-sm-6 form-group mb-1">

                                                <select class="form-select form-select-sm"
                                                    aria-label=".form-select-sm example" name="subject" id="subject">
                                                    <option selected>Select Service</option>
                                                    <option value="Hardware Support">Hardware Support</option>
                                                    <option value="Network & Security">Network & Security</option>
                                                    <option value="CCTV Survelliance">CCTV Survelliance</option>
                                                    <option value="Web Development">Web Development</option>
                                                    <option value="Graphic Designing">Graphic Designing</option>
                                                    <option value="Digital Marketing">Digital Marketing</option>
                                                    <option value="Graphic Design">Graphic Design</option>
                                                    <option value="Software Development">Software Development</option>
                                                    <option value="App Development">App Development</option>
                                                    <option value="Cloud Services">Cloud Services</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">

                                                    <textarea name="problem" placeholder="Additional Information... (Optional) " rows="3"
                                                        data-error="Please, leave us a message."></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>


                                            <div class="col-sm-12">
                                                @if (session('success'))
                                                    <div class="alert alert-success">{{ session('success') }}</div>
                                                @endif
                                                <div class="form-group mg_top apbtn">
                                                    <button class="theme_btn" type="submit">Reach Message</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="ab_img_left_bottom z_0 mr_top_minus_150">
                <!-- <img src="{{ asset('assets-front/images/bg-1.png') }}" class="img-fluid" alt="img"> -->
            </div>
            <!---============spacing==========--->
            <div class="pd_bottom_90"></div>
            <!---============spacing==========--->
        </section>
        <!--form-->

        <!--map-->
        <section class="contact-map-section">
            <div class="container-no">
                <div class="row">
                    <div class="col-lg-12">
                        <section class="map-section">
                            <!--Map Outer-->
                            <div class="map-outer">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.5232155954873!2d88.35183757452356!3d22.484544436193396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02773318773d65%3A0x7e1d5d2a0f540ee0!2sECore%20TechServ!5e0!3m2!1sen!2sin!4v1687081314202!5m2!1sen!2sin"
                                    width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <!--map-->
    </div>
@endsection
