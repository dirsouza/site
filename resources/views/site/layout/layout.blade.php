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
    <!-- Hover -->
    <link rel="stylesheet" href="{{ asset('public/hover/hover-min.css') }}">
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

    <!-- navbar-->
    <header class="header mb-5">

        @include('site.includes.top')

        @include('site.includes.navbar')

    </header>

    @yield('content')


    <!--
    *** FOOTER ***
    _________________________________________________________
    -->
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <h4 class="mb-3">Páginas</h4>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('site.sobre') }}">Sobre nós</a></li>
                        <li><a href="{{ route('site.termos') }}">Termos e Condições</a></li>
                        <li><a href="{{ route('site.perguntas') }}">Perguntas frequentes</a></li>
                        <li><a href="{{ route('site.contato') }}">Contate-nos</a></li>
                    </ul>
                    <hr>
                    <h4 class="mb-3">Seção do Usuário</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" data-toggle="modal" data-target="#login-modal">Entrar</a></li>
                        <li><a href="{{ route('site.registrar') }}">Registrar</a></li>
                    </ul>
                </div>
                <!-- /.col-lg-3-->
                <div class="col-lg-4 col-md-6">
                    <h4 class="mb-3">Categorias</h4>
                    @foreach ($categorias as $categoria)
                        <h5>
                            <a href="{{ route('site.categoria', $categoria->titulo_url) }}">{!! $categoria->titulo !!}</a>
                        </h5>
                    @endforeach
                </div>

                <!-- /.col-lg-3-->
                <div class="col-lg-4 col-md-6">
                    <h4 class="mb-3">Onde nos encontrar</h4>
                    <p>
                        <strong>Obaju Ltd.</strong><br>
                        13/25 New Avenue<br>
                        New Heaven<br>
                        45Y 73J<br>
                        England<br>
                        <strong>Great Britain</strong>
                    </p>
                    <hr class="d-block d-md-none">
                    <hr>
                    <h4 class="mb-3">Redes Sociais</h4>
                    <p class="social">
                        <a href="#" class="facebook external hvr-glow hvr-icon-grow"><i class="fa fa-facebook hvr-icon"></i></a>
                        <a href="#" class="twitter external hvr-glow hvr-icon-grow"><i class="fa fa-twitter hvr-icon"></i></a>
                        <a href="#" class="instagram external hvr-glow hvr-icon-grow"><i class="fa fa-instagram hvr-icon"></i></a>
                        <a href="#" class="gplus external hvr-glow hvr-icon-grow"><i class="fa fa-google-plus hvr-icon"></i></a>
                        <a href="#" class="email external hvr-glow hvr-icon-grow"><i class="fa fa-envelope hvr-icon"></i></a>
                    </p>
                </div>
                <!-- /.col-lg-3-->
            </div>
            <!-- /.row-->
        </div>
        <!-- /.container-->
    </div>
    <!-- /#footer-->
    <!-- *** FOOTER END ***-->


    <!--
    *** COPYRIGHT ***
    _________________________________________________________
    -->
    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-2 mb-lg-0">
                    <p class="text-center text-lg-left">©2018 Obaju Ltd.</p>
                </div>
                <div class="col-lg-4">
                    <p class="text-center text-lg-center">
                        Desenvolvidor por
                        <a href="https://www.linkedin.com/in/dirsouza/" target="_blank">Diogo Souza</a>
                    </p>
                </div>
                <div class="col-lg-4">
                    <p class="text-center text-lg-right">Template de
                        <a href="https://bootstrapious.com/e-commerce-templates" target="_blank">Bootstrapious</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- *** COPYRIGHT END ***-->

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
