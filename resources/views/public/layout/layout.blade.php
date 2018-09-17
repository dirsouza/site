<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site</title>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="public/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">
    <!-- owl carousel-->
    <link rel="stylesheet" href="public/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="public/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="public/css/style.green.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="public/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    @stack('css')
</head>
<body>

    @yield('content')

    <script src="public/jquery/jquery.min.js"></script>
    <script src="public/popper.js/umd/popper.min.js"> </script>
    <script src="public/bootstrap/js/bootstrap.min.js"></script>
    <script src="public/jquery.cookie/jquery.cookie.js"> </script>
    <script src="public/owl.carousel/owl.carousel.min.js"></script>
    <script src="public/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="public/js/front.js"></script>

    @stack('scripts')
</body>
</html>
