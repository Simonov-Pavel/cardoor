<header id="header-area" class="fixed-top">
    <div id="header-top" class="d-none d-xl-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-left">
                    <i class="fa fa-map-marker"></i> {{$contact->address}}
                </div>

                <div class="col-lg-3 text-center">
                    <i class="fa fa-mobile"></i> {{$contact->phone}}
                </div>

                <div class="col-lg-3 text-center">
                    <i class="fa fa-clock-o"></i> {{$contact->start_week}} - {{$contact->end_week}} {{$contact->start_time}} -{{$contact->end_time}}
                </div>
            </div>
        </div>
    </div>
    <div id="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <a href="{{ route('index') }}" class="logo">
                        <picture>
                            <source srcset="{{ Storage::url('contact/'.$contact->img_webp) }}" type="image/webp">
                            <img src="{{ Storage::url('contact/'.$contact->img) }}" alt="logo">
                        </picture>
                    </a>
                </div>

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

                @include('includes.main-menu')
            </div>
        </div>
    </div>
</header>