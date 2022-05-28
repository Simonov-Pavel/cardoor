<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <link rel="canonical" href="@yield('canonical')">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />

    <title>@yield('title')</title>

    <!--=== Bootstrap CSS ===-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">


    <link href="{{ asset('assets/css/plugins/vegas.min.css') }}" rel="stylesheet">


    <!--=== Slicknav CSS ===-->
    <link href="{{ asset('assets/css/plugins/slicknav.min.css') }}" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="{{ asset('assets/css/plugins/magnific-popup.css') }}" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="{{ asset('assets/css/plugins/owl.carousel.min.css') }}" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="{{ asset('assets/css/plugins/gijgo.css') }}" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet">
    
    <!--=== Theme Reset CSS ===-->
    <link href="{{ asset('assets/css/reset.css') }}" rel="stylesheet">
    
    <!--=== Main Style CSS ===-->
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    
    @yield('custom-css')

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="{{ asset('assets/img/preloader.gif') }}" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->
        <div id="header-top" class="d-none d-xl-block">
            <div class="container">
                <div class="row">
                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-left">
                        <i class="fa fa-map-marker"></i> {{$contact->address}}
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-mobile"></i> {{$contact->phone}}
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-clock-o"></i> {{$contact->start_week}} - {{$contact->end_week}} {{$contact->start_time}} -{{$contact->end_time}}
                    </div>
                    <!--== Single HeaderTop End ==-->
                    
                </div>
            </div>
        </div>
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-2">
                        <a href="{{ route('index') }}" class="logo">
                            <picture>
                                <source srcset="{{ Storage::url('contact/'.$contact->img_webp) }}" type="image/webp">
                                <img src="{{ Storage::url('contact/'.$contact->img) }}" alt="logo">
                            </picture>
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--noindex-->
                    <div class="cart-icon col-lg-2 text-right">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @guest
                                <i class="fa fa-user mr-2" aria-hidden="true" style="font-size:30px;"></i>Акаунт
                            @endguest
                            @auth
                                <picture>
                                    <sourse srcset="{{ Storage::url('user/' . Auth::user()->img_preview_webp)}}" type="image/webp">
                                    <img src="{{ Storage::url('user/' . Auth::user()->img_preview)}}" alt="User Image - {{Auth::user()->name}}" style="width:45px; border-radius:50%;display:inline-block">
                                </picture>
                                    
                                {{Auth::user()->name}}
                            @endauth
                        </a>
                        <ul class="dropdown-menu" style="left:30px;@auth @admin width:250px; @endadmin @endauth">
                            @guest
                                <li><a href="{{ route('register') }}" rel="nofollow" class="account-link ml-2">Регистрация</a></li>
                                <li><a href="{{ route('login') }}" rel="nofollow" class="account-link ml-2">Войти</a></li>
                            @endguest         
                            @auth
                                <li><a href="{{ route('account') }}" rel="nofollow" class="account-link ml-2">Личный кабинет</a></li>
                                @admin 
                                    <li><a href="{{ route('admin') }}" rel="nofollow" class="account-link ml-2">Панель администратора</a></li>
                                @endadmin
                                <li><a href="{{ route('get.logout') }}" rel="nofollow" class="account-link ml-2">Выйти</a></li>
                            @endauth
                        </ul>
                    </div>
                    <!--/noindex-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-lg-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li class="@menuactive('index')"><a href="{{route('index')}}">Главная</a></li>
                                <li class="@menuactive('about')"><a href="{{route('about')}}">О нас</a></li>
                                <li class="@menuactive('service*')"><a href="{{route('service')}}">Услуги</a></li>
                                <li class="@menuactive('car*')"><a href="{{ route('car') }}">Автопарк</a></li>
                                <li><a href="index.html">Pages</a>
                                    <ul>
                                        <li><a href="package.html">Pricing</a></li>
                                        <li><a href="driver.html">Driver</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="help-desk.html">Help Desk</a></li>
                                        <li><a href="login.html">Log In</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="article.html">Blog Page</a></li>
                                        <li><a href="article-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('contact')}}">Контакты</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    @include('includes.user_errors')

    @yield('content')
     
     <section id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>о нас</h2>
                            <div class="widget-body">
                                <picture>
                                    <source srcset="{{ Storage::url('contact/'.$contact->img_webp) }}" type="image/webp">
                                    <img src="{{ Storage::url('contact/'.$contact->img) }}" alt="logo">
                                </picture>
                                <p>{{$contact->description}}</p>
                                <!--noindex-->
                                <div class="newsletter-area">
                                    <form action="index.html">
                                        <input type="email" placeholder="Подпишитесь на нашу рассылку">
                                        <button type="submit" class="newsletter-btn"><i class="fa fa-send"></i></button>
                                    </form>
                                </div>
                                <!--/noindex-->
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>последнии посты</h2>
                            <div class="widget-body">
                                <ul class="recent-post">
                                    <li>
                                        <a href="#">
                                           Hello Bangladesh! 
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                          Lorem ipsum dolor sit amet
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                           Hello Bangladesh! 
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            consectetur adipisicing elit?
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Контакты</h2>
                            <div class="widget-body">
                                <p>Можете с нами связаться по контактам ниже</p>

                                <ul class="get-touch">
                                    <li><i class="fa fa-map-marker"></i> {{$contact->address}}</li>
                                    <li><i class="fa fa-mobile"></i> <a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a></li>
                                    <li><i class="fa fa-envelope"></i> <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></li>
                                </ul>
                                <a href="{{ $contact->map }}" class="map-show" target="_blank">Посмотреть на карте</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="{{ asset('assets/img/scroll-top.png') }}" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="{{ asset('assets/js/jquery-migrate.min.js') }}"></script>
    <!--=== Popper Min Js ===-->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="{{ asset('assets/js/plugins/gijgo.js') }}"></script>
    <!--=== Vegas Min Js ===-->
    <script src="{{ asset('assets/js/plugins/vegas.min.js') }}"></script>
    <!--=== Isotope Min Js ===-->
    <script src="{{ asset('assets/js/plugins/isotope.min.js') }}"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="{{ asset('assets/js/plugins/owl.carousel.min.js') }}"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="{{ asset('assets/js/plugins/waypoints.min.js') }}"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="{{ asset('assets/js/plugins/counterup.min.js') }}"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="{{ asset('assets/js/plugins/mb.YTPlayer.js') }}"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="{{ asset('assets/js/plugins/magnific-popup.min.js') }}"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="{{ asset('assets/js/plugins/slicknav.min.js') }}"></script>

    <!--=== Mian Js ===-->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @yield('custom-js')
</body>

</html>