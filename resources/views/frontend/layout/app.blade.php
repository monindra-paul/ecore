<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- PWA  -->
    <meta name="theme-color" content="#00a6ff" />
    <link rel="apple-touch-icon" href="{{ asset('assets-front/images/ecore/logo/logo.png') }}">
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




    <!-- Icon Styles -->
</head>


@include('frontend.common.header')
@yield('mainsection')
@include('frontend.common.footer')

<script type='text/javascript' src="{{ 'assets-front/js/plugins/jquery.min.js' }}"></script>
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

<!-- map script -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
<script src="{{ 'assets-front/js/gmaps.js' }}"></script>
<script src="{{ 'assets-front/js/map-helper.js' }}"></script>
<!-- main-js -->
<script type='text/javascript' src="{{ 'assets-front/js/main.js' }}"></script>


<script src="{{ asset('/sw.js') }}"></script>



<!-- Start of LiveChat (www.livechat.com) code -->
{{-- <script>
    window.__lc = window.__lc || {};
    window.__lc.license = 17103270;;
    (function (n, t, c) {
        function i(n) {
            return e._h ? e._h.apply(null, n) : e._q.push(n)
        }
        var e = {
            _q: [],
            _h: null,
            _v: "2.0",
            on: function () {
                i(["on", c.call(arguments)])
            },
            once: function () {
                i(["once", c.call(arguments)])
            },
            off: function () {
                i(["off", c.call(arguments)])
            },
            get: function () {
                if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                return i(["get", c.call(arguments)])
            },
            call: function () {
                i(["call", c.call(arguments)])
            },
            init: function () {
                var n = t.createElement("script");
                n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js",
                    t.head.appendChild(n)
            }
        };
        !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
    }(window, document, [].slice))
</script> --}}
{{-- <noscript><a href="https://www.livechat.com/chat-with/17103270/" rel="nofollow">Chat with us</a>, powered by <a
        href="https://www.ecoretechserv.com/" rel="noopener nofollow" target="_blank">ECore TechServ</a></noscript> --}}
<!-- End of LiveChat code -->







































{{--
<script>
    var url = 'https://edna.io/wp-content/plugins/whatsapp-widget-generator/js/generator.js?13484';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
        "host": "https://edna.io",
        "enabled": true,
        "chatButtonSetting": {
            "backgroundColor": "#4fce5d",
            "ctaText": "",
            "icon": "whatsapp",
            "position": "right",
        },
        "brandSetting": {
            "backgroundColor": "#085b53",
            "brandImg": "https://ecoretechserv.com/assets-front/images/ecore/logo/ecore-logo.webp",
            "brandName": "ECore",
            "brandSubTitle": "Typically replies within 15 mins",
            "ctaText": "Start Chat",
            "phoneNumber": "9875681413",
            "welcomeText": "Welcome to ECore TechServ. Thanks for choosing us."
        }
    };
    s.onload = function () {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script> --}}



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





</body>

</html>