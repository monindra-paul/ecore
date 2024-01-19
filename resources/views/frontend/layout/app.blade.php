<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
    <link rel="apple-touch-icon" href="{{ asset('assets-front/images/ecore/logo/logo.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    @yield('title')
    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('assets-front/images/ecore/logo/logo.png') }}" type="image/x-icon">
    <!-- Fav Icon -->
    <!-- Googel Fonts -->
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=DM+Sans%3A400%2C400i%2C500%2C500i%2C700%2C700i&amp;subset=latin%2Clatin-ext'
        type='text/css' media='all' />
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
    <link rel='stylesheet' href="{{ 'assets-front/css/plugins/font-awesome.min.css' }}" type='text/css'
        media='all' />
    <link rel='stylesheet' href="{{ 'assets-front//css/plugins/flaticon_vankine.css' }}" type='text/css'
        media='all' />


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
<script>
    if ("serviceWorker" in navigator) {
        // Register a service worker hosted at the root of the
        // site using the default scope.
        navigator.serviceWorker.register("/sw.js").then(
            (registration) => {
                console.log("Service worker registration succeeded:", registration);
            },
            (error) => {
                console.error(`Service worker registration failed: ${error}`);
            },
        );
    } else {
        console.error("Service workers are not supported.");
    }
</script>
</body>

</html>
