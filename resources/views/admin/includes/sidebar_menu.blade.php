<li class="nav-item">
    <a href="{{ route('admin') }}" class="nav-link @menuactive('admin')">
        <i class="nav-icon fas fa-home"></i><p>Главная</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('contact.index') }}" class="nav-link @menuactive('contact.*')">
        <i class="nav-icon fa fa-map-marker"></i><p>Контакты</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('message.index') }}" class="nav-link @menuactive('message.*')">
        <i class="nav-icon fa fa-comment-o"></i><p>Сообщения</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('user.index') }}" class="nav-link @menuactive('user.*')">
        <i class="nav-icon fa fa-users"></i><p>Пользователи</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('banner.index') }}" class="nav-link @menuactive('banner.*')">
        <i class="nav-icon fa fa-slideshare"></i><p>Баннер</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('about.index') }}" class="nav-link @menuactive('about.*')">
        <i class="nav-icon fa fa-building"></i><p>О нас</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('partner.index') }}" class="nav-link @menuactive('partner.*')">
        <i class="nav-icon fa fa-building"></i><p>Наши партнеры</p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link @menuactive('service-description.*')  @menuactive('service.*')">
        <i class="nav-icon fas fa-edit"></i>
        <p>Наши услуги<i class="fas fa-angle-left right"></i></p>
    </a>
    <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
            <a href="{{route('service-description.index')}}" class="nav-link @menuactive('service-description.*')">
                <i class="far fa-circle nav-icon"></i>
                <p>Описание раздела Услуги</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('service.index')}}" class="nav-link @menuactive('service.*')">
                <i class="far fa-circle nav-icon"></i>
                <p>Предоставляемые услуги</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="#" class="nav-link @menuactive('brand.*') @menuactive('body.*') @menuactive('class.*') @menuactive('engine.*')">
        <i class="nav-icon fa fa-car"></i>
        <p>Автопарк<i class="fas fa-angle-left right"></i></p>
    </a>
    <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
            <a href="{{route('brand.index')}}" class="nav-link @menuactive('brand.*')">
                <i class="far fa-circle nav-icon"></i>
                <p>Марки автомобилей</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('body.index')}}" class="nav-link @menuactive('body.*')">
                <i class="far fa-circle nav-icon"></i>
                <p>Кузова автомобилей</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('class.index')}}" class="nav-link @menuactive('class.*')">
                <i class="far fa-circle nav-icon"></i>
                <p>Класс автомобилей</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('engine.index')}}" class="nav-link @menuactive('engine.*')">
                <i class="far fa-circle nav-icon"></i>
                <p>Тип двигателей автомобилей</p>
            </a>
        </li>
    </ul>
</li>