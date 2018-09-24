<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site</title>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('public/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('public/font-awesome/css/font-awesome.min.css') }}">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">
    <!-- owl carousel-->
    <link rel="stylesheet" href="{{ asset('public/owl.carousel/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('public/owl.carousel/assets/owl.theme.default.css') }}">
    <!-- Animate -->
    <link rel="stylesheet" href="{{ asset('public/animate/animate.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('public/css/style.green.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('public/css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    @stack('css')
</head>
<body>

    @yield('content')

    <script src="{{ asset('public/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('public/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset('public/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('public/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/owl.carousel2.thumbs/owl.carousel2.thumbs.js') }}"></script>
    <script src="{{ asset('https://maps.googleapis.com/maps/api/js') }}"></script>
    <script src="{{ asset('public/js/front.js') }}"></script>

    @stack('scripts')
</body>
</html>
