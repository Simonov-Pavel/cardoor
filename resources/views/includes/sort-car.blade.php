<div class="choose-content-wrap">
    @if($clases->count() != 0)
        <ul class="nav nav-tabs" id="classCar" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#popular_cars" role="tab" aria-selected="true">Класс авто</a>
            </li>
            @foreach($clases as $class)
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#newest_cars" role="tab" aria-selected="false">{{$class->title}}</a>
                </li>
            @endforeach
        </ul>
    @endif
    @if($bodies->count() != 0)
        <ul class="nav nav-tabs" id="bodyCar" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#popular_cars" role="tab" aria-selected="true">Кузов авто</a>
            </li>
            @foreach($bodies as $body)
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#newest_cars" role="tab" aria-selected="false">{{$body->title}}</a>
                </li>
            @endforeach
        </ul>
    @endif
</div>