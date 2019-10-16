<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap&subset=cyrillic,cyrillic-ext,latin-ext"
        rel="stylesheet">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- lightgall css  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.11/css/lightgallery.css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <header class="main-header">
            <div class="container">
                <div class="row">
                    <div class="header-logo col-sm-12 col-lg-4">
                        <img src="/img/mt-1300-home-logo.png" alt="">
                    </div>
                    <nav class="main-header-nav col-sm-12 col-lg-8">
                        <ul class="main-header-list closed">
                            <li><a href="{{ route('home') }}">Главная</a></li>
                            <li><a href="{{ route('about') }}">о себе</a></li>
                            <li><a href="{{ route('gallery') }}">портфолио</a></li>
                            <li><a href="{{ route('pricing') }}">цены</a></li>
                            <li><a href="{{ route('stocks') }}">акции</a></li>
                            <li><a href="{{ route('contacts') }}">контакты</a></li>
                        </ul>
                        <button class="mob-menu-btn">Меню</button>
                    </nav>
                </div>
            </div>
        </header>
        <style>

        </style>
        <div>
            @yield('content')
        </div>
        <footer>
            <div class="conteiner">
                <h3 class="footer-title">
                    ANNA SOLAS
                </h3>
            </div>
            <p class="copy-r">
                © {{ date('Y') }} Anna Solas, Inc and Web Templates Ltd. All Rights Reserved. Designed by XXX.
            </p>
        </footer>

        <style>
            footer {
                background: #343437;
                padding-top: 55px;
                padding-bottom: 55px;
                text-align: center;
            }

            .footer-title {
                font-weight: 700;
                font-style: normal;
                font-family: 'Roboto Mono', monospace;
                color: #ffffff;
                font-size: 24px;
                line-height: 1.3;
                letter-spacing: 7px;
            }

            .copy-r {
                font-weight: 400;
                font-style: normal;
                font-family: 'Roboto Mono', monospace;
                color: #ffffff;
                font-size: 12px;
                line-height: 1.2;
                letter-spacing: 0px;
            }

        </style>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- lightgallery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.11/js/lightgallery-all.min.js"></script>

    <!-- filter -->

    <script src="https://npmcdn.com/isotope-layout@3.0/dist/isotope.pkgd.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#lightgallery').lightGallery({
                pager: true
            });

            $('#lightgalleryIndex').lightGallery({
                pager: true
            });

            $('.portfolio-menu ul li').click(function () {
                $('.portfolio-menu ul li').removeClass('active');
                $(this).addClass('active');


                var selector = $(this).attr('data-filter');
                console.log(selector)

            });

            $gallery = $('#lightgallery');

            //isotope Code
            $('#lightgallery').isotope({
                // options
                itemSelector: '.gallery-item',
                layoutmode: 'fitrows'
            });
            $('.filter-btn').on('click', function () {
                var filterValue = $(this).attr('data-filter');
                $('#lightgallery').isotope({
                    filter: filterValue
                });
                $gallery.data('lightGallery').destroy(true);
                $gallery.lightGallery({
                    selector: filterValue.replace('*', '')
                });
            });

            $(".mob-menu-btn").click(function(){
                $(".main-header-list").toggleClass("closed");
            });
            $(".home-menu-btn").click(function(){
                $(".home-nav-list").toggleClass("closed");
            });
        });
    </script>
</body>

</html>
