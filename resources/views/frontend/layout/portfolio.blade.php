<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Portfolio | Best Website Designing Company in Kolkata | ECore TechServ</title>

    <meta name="description"
    content="ECore TechServ provides best Website Designing services in kolkata. Get your one stop solution for Website Development, IT Support, Graphics Designing, Digital Marketing, CCTV Survelliance Security, Hardware & Network Support. ">

    <meta name="keywords"
    content="Website Designing, Website Development Company in Kolkata, Website Designing Company in Kolkata,IT Support Company,IT Support Company in Kolkata, IT Services in Kolkata,  CCTV Survelliance service provider.">

    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link rel="stylesheet" href="{{asset('assets-portfolio/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets-portfolio/css/et-lineicons.css')}}">
    <link rel="stylesheet" href="{{asset('assets-portfolio/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets-portfolio/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-portfolio/css/flexslider.css')}}">
    <link rel="stylesheet" href="{{asset('assets-portfolio/css/style.css')}}">
</head>

<body>

<div id="doro-page"> <a href="#" class="js-doro-nav-toggle doro-nav-toggle"><i></i></a>
    <!-- Sidebar Section -->
    <aside id="doro-aside">
        <!-- Logo -->
        <h1 id="doro-logo">
            <a href="{{url('/')}}">
                <div class="div">

                    <img src="{{asset('/assets-front/images/ecore/logo/ecore-favicon-round2.webp')}}" alt="" srcset=""
                        style="width: 65px;">
                </div>
                ECore<br><span>The Soul of Future Technology</span>
            </a>
        </h1>
        <!-- Menu -->
        <nav id="doro-main-menu">
            <ul>
                <li class="doro-active"><a href="{{url('/')}}"> <i class="bi bi-arrow-90deg-left"></i> Back to Home</a></li>
                <li class="doro-active"><a href="{{url('//portfolios/websites')}}">Websites</a></li>
                <li class="doro-active"><a href="#">Logo</a></li>
                <li class="doro-active"><a href="#">Social Media Poster</a></li>
                <li class="doro-active"><a href="#">Pritable Banner</a></li>
                <li class="doro-active"><a href="#">Youtube Thumbnail</a></li>
                <li class="doro-active"><a href="#">Brochure</a></li>
                <li class="doro-active"><a href="#">Leaflet</a></li>
                <li class="doro-active"><a href="#">Package Designing</a></li>
                <li class="doro-active"><a href="#">UI/UX</a></li>
                <li class="doro-active"><a href="{{url('/contact-us')}}">Contact</a></li>
            </ul>
        </nav>
        <!-- Sidebar Footer -->
        <div class="doro-footer">
            <ul>
                <li><a href="#"><i class="ti-facebook font-14px white-icon"></i></a></li>
                <li><a href="#"><i class="ti-twitter-alt font-14px white-icon"></i></a></li>
                <li><a href="#"><i class="ti-instagram font-14px white-icon"></i></a></li>
                <li><a href="#"><i class="ti-linkedin font-14px white-icon"></i></a></li>
            </ul>
            <p><small>&copy;{{ date('Y') }} All Right Reserved by <a href="{{url('/')}}">ECore TechServ</a></small></p>
        </div>
    </aside>
    <!-- Main Section -->
<div id="doro-main">
@yield('mainsection-portfolio')

 <!-- Footer -->
 <div id="doro-footer2">
    <div class="doro-narrow-content">
        <div class="row">
            <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                <p class="doro-lead">&copy;{{ date('Y') }} All Right Reserved </p>
            </div>
            <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                <h2 class="text-center">ECore</h2>
            </div>
            <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                <ul class="social-network">
                    <li><a href="#"><i class="ti-facebook font-14px black-icon"></i></a></li>
                    <li><a href="#"><i class="ti-twitter-alt font-14px black-icon"></i></a></li>
                    <li><a href="#"><i class="ti-instagram font-14px black-icon"></i></a></li>
                    <li><a href="#"><i class="ti-linkedin font-14px black-icon"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
</div>
    <script src="{{asset('assets-portfolio/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets-portfolio/js/modernizr-2.6.2.min.js')}}"></script>
    <script src="{{asset('assets-portfolio/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('assets-portfolio/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets-portfolio/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets-portfolio/js/jquery.flexslider-min.js')}}"></script>
    <script src="{{asset('assets-portfolio/js/sticky-kit.min.js')}}"></script>
    <script src="{{asset('assets-portfolio/js/main.js')}}"></script>
</body>


</html>