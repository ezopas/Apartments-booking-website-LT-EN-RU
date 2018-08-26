<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-submenu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/linearicons/style.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/bootstrap-datepicker.min.css') }}">



    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('storage/img/LRicon.png') }}" sizes="16x16 32x32" type="image/png">
    <!--<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" >-->

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/ie10-viewport-bug-workaround.css') }}">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script type="text/javascript" src="{{ asset('js/ie8-responsive-file-warning.js') }}"></script><![endif]-->
    <script type="text/javascript" src="{{ asset('js/ie-emulation-modes-warning.js') }}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{ asset('js/html5shiv.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{ asset('css/skins/default.css') }}">


    <script type="text/javascript" src="{{ asset('js/jquery-2.2.0.min.js') }}"></script>

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-60899531-10"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-60899531-10');
    </script>
</head>
<body>

                    {{--<ul class="nav navbar-nav navbar-right">--}}
                        {{--<!-- Authentication Links -->--}}
                        {{--@guest--}}
                            {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
                            {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
                        {{--@else--}}
                            {{--<li class="dropdown">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>--}}
                                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                                {{--</a>--}}

                                {{--<ul class="dropdown-menu">--}}
                                    {{--<li>--}}
                                        {{--<a href="{{ route('logout') }}"--}}
                                            {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                            {{--Logout--}}
                                        {{--</a>--}}

                                        {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                            {{--{{ csrf_field() }}--}}
                                        {{--</form>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--@endguest--}}
                    {{--</ul>--}}

                    @if(\Illuminate\Support\Facades\Cookie::get('consent') === null)
                        @include('layouts.cookies')
                    @endif

                    @include('inc.notification')

                    @yield('content')

                    <!-- footer pradzia -->
                    <footer class="main-footer clearfix">
                        <div class="container">
                            <!-- Footer info-->
                            <div class="footer-info">
                                <div class="row">
                                    <!-- About us -->
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="footer-item text-justify">
                                            <div class="footer-logo">
                                                <a href="/">
                                                    <h3 style="color: #ffffff;">Luxuryrent.lt</h3>
                                                </a>
                                            </div>
                                            <p>{{ trans('index.aboutproject') }}</p>
                                        </div>
                                    </div>
                                    <!-- Contact Us -->
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="footer-item">
                                            <div class="main-title-2">
                                                <h1>{{ trans('index.contactus') }}</h1>
                                            </div>
                                            <ul class="personal-info">
                                                <!--<li>-->
                                                <!--<i class="fa fa-map-marker"></i>-->
                                                <!--Address: 44 New Design Street,-->
                                                <!--</li>-->
                                                <li>
                                                    <i class="fa fa-envelope"></i>
                                                    {{ trans('index.email') }}: <a href="mailto:info@luxuryrent.lt">info@luxuryrent.lt</a>
                                                </li>
                                                <li>
                                                    <i class="fa fa-phone"></i>
                                                    {{ trans('index.phone') }}: <a href="tel:+37067633337">+370 676 33337</a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <!-- Gallery -->
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="footer-item gallery">
                                            <div class="main-title-2">
                                                <h1></h1>
                                            </div>
                                            <ul class="personal-info">
                                                <li><img src="{{ asset('storage/img/logoLR.png') }}" class="logoikona"> <a href="/{{ App::getLocale() }}/apie-mus">{{ trans('index.aboutus') }}</a></li>
                                                <li><img src="{{ asset('storage/img/logoLR.png') }}" class="logoikona"> <a href="/{{ App::getLocale() }}/musu-ivertinimas">{{ trans('index.ourscore') }}</a></li>
                                                <li><img src="{{ asset('storage/img/logoLR.png') }}" class="logoikona"> <a href="/{{ App::getLocale() }}/privatumo-politika">{{ trans('index.privacy') }}</a></li>
                                            </ul>
                                            <div class="main-title-2">
                                                <h1>{{ trans('index.partners') }}</h1>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="https://knamai.lt" target="_blank">
                                                        <img src="https://www.knamai.lt/wp-content/uploads/2017/11/Kurybos_Namai_logo167.png" alt="VšĮ Kūrybos namai">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- Footer end -->

                    <!-- Copy right start -->
                    <div class="copy-right">
                        <div class="container">
                            &copy;  2018 Luxury Rent Lt
                        </div>
                    </div>
                    <!-- Copy end right-->

                    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
                    <script type="text/javascript" src="{{ asset('js/bootstrap-submenu.js') }}"></script>
                    <script type="text/javascript" src="{{ asset('js/jquery.mb.YTPlayer.js') }}"></script>
                    <script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
                    <script type="text/javascript" src="{{ asset('js/bootstrap-select.min.j') }}s"></script>
                    <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
                    <script type="text/javascript" src="{{ asset('js/jquery.scrollUp.js') }}"></script>
                    <script type="text/javascript" src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
                    <script type="text/javascript" src="{{ asset('js/jquery.filterizr.js') }}"></script>
                    <script type="text/javascript" src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
                    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

                    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
                    <script type="text/javascript" src="{{ asset('js/ie10-viewport-bug-workaround.js') }}"></script>
                    <!-- Custom javascript -->

                    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
                    <script>
                        CKEDITOR.replace( 'article-ckeditor' );
                    </script>

                    {{--@yield('scripts')--}}
                    @if(\Illuminate\Support\Facades\Cookie::get('consent') === null)

                        <script>
                            function accept(){
                                document.cookie="consent="+today()+";expires="+new Date(new Date().setFullYear(new Date().getFullYear() + 1))+";";
                                let cookies = document.getElementById("cookies");
                                cookies.remove();
                                window.location.reload()
                            }
                            function refuse(){
                                let cookies = document.getElementById("cookies");
                                document.cookie="consent=;";
                                cookies.remove();
                            }
                            function today(){
                                let today = new Date();
                                let dd = today.getDate() < 10 ? '0'+today.getDate():today.getDate();
                                let mm = (today.getMonth()+1) < 10 ? '0'+today.getMonth():today.getMonth();
                                let yyyy = today.getFullYear();
                                let hh = today.getHours();
                                let min = today.getMinutes() < 10 ? '0'+today.getMinutes():today.getMinutes();
                                let sec = today.getSeconds() < 10 ? '0'+today.getSeconds():today.getSeconds();
                                return dd+'/'+mm+'/'+yyyy+' - '+hh+':'+min+':'+sec;
                            }
                        </script>
                    @endif

</body>