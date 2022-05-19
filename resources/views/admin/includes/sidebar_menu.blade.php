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
    <a href="#" class="nav-link @menuactive('service-description.*')">
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
            <a href="pages/forms/advanced.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Предоставляемые услуги</p>
            </a>
        </li>
    </ul>
</li>