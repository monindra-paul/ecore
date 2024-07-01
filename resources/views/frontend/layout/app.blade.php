<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- PWA  -->
    <meta name="theme-color" content="#00a6ff" />
    <link rel="apple-touch-icon" href="{{ asset('assets-front/images/ecore/logo/ecore-favicon-round2.webp') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    @yield('title')
    @yield('description')
    @yield('keyword')
    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('assets-front/images/ecore/logo/ecore-favicon-round2.webp') }}" type="image/x-icon">
    <!-- Fav Icon -->
    <!-- Googel Fonts -->
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=DM+Sans%3A400%2C400i%2C500%2C500i%2C700%2C700i&amp;subset=latin%2Clatin-ext'
        type='text/css' media='all' />


    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-regular-rounded/css/uicons-regular-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-bold-rounded/css/uicons-bold-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-regular-straight/css/uicons-regular-straight.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-thin-rounded/css/uicons-thin-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-brands/css/uicons-brands.css'>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- Googel Fonts -->
    <!-- Plugins -->
    <link rel='stylesheet' href="{{ 'assets-front/css/plugins/bootstrap.min.css' }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ 'assets-front/css/plugins/animate.min.css' }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ 'assets-front/css/plugins/slick.css' }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ 'assets-front/css/plugins/select.min.css' }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ 'assets-front/css/plugins/owl.css' }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ 'assets-front/css/plugins/jquery.fancybox.min.css' }}" type='text/css'
        media='all' />
    <link rel='stylesheet' href="{{ 'assets-front/css/plugins/rangeslider.css' }}" type='text/css' media='all' />
    <!-- Plugins -->
    <!-- Vankine Styles -->
    <link rel='stylesheet' href="{{ 'assets-front/css/global-settings.css' }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ 'assets-front/css/theme.css' }}" type='text/css' media='all' />
    <!-- Vankine Styles -->
    <!-- Icon Styles -->
    <link rel='stylesheet' href="{{ 'assets-front/css/plugins/uicons-regular-rounded.css' }}" type='text/css'
        media='all' />
    <link rel='stylesheet' href="{{ 'assets-front/css/plugins/uicons-regular-straight.css' }}" type='text/css'
        media='all' />
    <link rel='stylesheet' href="{{ 'assets-front/css/plugins/font-awesome.min.css' }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ 'assets-front//css/plugins/flaticon_vankine.css' }}" type='text/css' media='all' />


    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/handlebars/4.7.7/handlebars.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">



<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NFMGKDKF');</script>
<!-- End Google Tag Manager -->




<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "ECore TechServ",
      "alternateName": "ECore",
      "url": "https://ecoretechserv.com/",
      "logo": "https://ecoretechserv.com/assets-front/images/ecore/logo/ecore-logo.webp",
      "sameAs": [
        "https://www.facebook.com/ecoretechserv",
        "https://x.com/ecoretechserv",
        "https://www.instagram.com/ecoretechserv/",
        "https://www.linkedin.com/company/ecoretechserv/",
        "https://ecoretechserv.com/"
      ],
      "description": "ECore TechServ provides best Website Designing services in kolkata. Get your one stop solution for Website Development, IT Support, Graphics Designing, Digital Marketing, CCTV Survelliance Security, Hardware & Network Support.",
        "email": "info@ecoretechserv.com",
        "telephone": "+91 9875681413",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "61, Regent Place",
            "addressLocality": "Ranikuthi, Tollygaunge",
            "addressCountry": "India",
            "addressRegion": "Kolkata",
            "postalCode": "700040"
        }
    }
</script>



    <!-- Icon Styles -->
</head>


@include('frontend.common.header')
@yield('mainsection')
@include('frontend.common.footer')


<script type='text/javascript' src="{{ 'assets-front/js/plugins/jquery.min.js' }}"></script>
<script type='text/javascript' src="{{ 'assets-front/js/plugins/xamin-custom.js' }}"></script>
<script type='text/javascript' src="{{ 'assets-front/js/plugins/bootstrap.bundle.min.js' }}"></script>
<script type='text/javascript' src="{{ 'assets-front/js/plugins/appear.js' }}"></script>
<script type='text/javascript' src="{{ 'assets-front/js/plugins/TweenMax.min.js' }}"></script>
<script type='text/javascript' src="{{ 'assets-front/js/plugins/waypoints.js' }}"></script>
<script type='text/javascript' src="{{ 'assets-front/js/plugins/select.min.js' }}"></script>
<script type='text/javascript' src="{{ 'assets-front/js/plugins/jquery.fancybox.js' }}"></script>
<script type='text/javascript' src="{{ 'assets-front/js/plugins/isotope.min.js' }}"></script>
<script type='text/javascript' src="{{ 'assets-front/js/plugins/owl.js' }}"></script>
<script type='text/javascript' src="{{ 'assets-front/js/plugins/sharer.js' }}"></script>
<script type='text/javascript' src="{{ 'assets-front/js/plugins/rangeslider.min.js' }}"></script>
<script type='text/javascript' src="{{ 'assets-front/js/plugins/counterup.js' }}"></script>
<script type='text/javascript' src="{{ 'assets-front/js/plugins/slick.js' }}"></script>
<script type='text/javascript' src="{{ 'assets-front/include/validator.min.js' }}"></script>
<script type='text/javascript' src="{{ 'assets-front/include/contact.js' }}"></script>
<script src="https://cdn.lordicon.com/lordicon.js"></script>



<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NFMGKDKF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- map script -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
<script src="{{ 'assets-front/js/gmaps.js' }}"></script>
<script src="{{ 'assets-front/js/map-helper.js' }}"></script>
<!-- main-js -->
<script type='text/javascript' src="{{ 'assets-front/js/main.js' }}"></script>


<script src="{{ asset('/sw.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js" integrity="sha512-BdHyGtczsUoFcEma+MfXc71KJLv/cd+sUsUaYYf2mXpfG/PtBjNXsPo78+rxWjscxUYN2Qr2+DbeGGiJx81ifg==" crossorigin="anonymous"></script>



{{-- typewritter script --}}




<script>
    var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 500;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+'<span style=color:#213438;>Best </span>'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
</script>

</body>

</html>