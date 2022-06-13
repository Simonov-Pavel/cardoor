<div class="col-lg-8 d-none d-lg-block">
    <nav class="mainmenu alignright">
        <ul>
            <li class="@menuactive('index')"><a href="{{route('index')}}">Главная</a></li>
            <li class="@menuactive('about')"><a href="{{route('about')}}">О нас</a></li>
            <li class="@menuactive('service*')"><a href="{{route('service')}}">Услуги</a></li>
            <li class="@menuactive('car*')"><a href="{{ route('car') }}">Автопарк</a></li>
            <li class="@menuactive('contact*')"><a href="{{route('contact')}}">Контакты</a></li>
        </ul>
    </nav>
</div>