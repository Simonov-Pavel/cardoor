<div class="choose-content-wrap">
    @if($clases->count() != 0)
    
        <ul class="nav nav-tabs" id="classCar" role="tablist">
            <li class="nav-item">
                <a class="nav-link sort @if(!isset($_GET['class'])) active @endif" data-sort="class" data-slug="" data-toggle="tab" href="#" role="tab" aria-selected="true">Класс авто</a>
            </li>
            @foreach($clases as $class)
                @if($class->car->count() != 0)
                <li class="nav-item">
                    <a class="nav-link sort @if(isset($_GET['class']) && $_GET['class'] == $class->slug) active @endif" data-sort="class" data-slug="{{$class->slug}}" data-toggle="tab" href="#" role="tab" aria-selected="false">{{$class->title}}</a>
                </li>
                @endif
            @endforeach
        </ul>
    @endif
    @if($bodies->count() != 0)
        <ul class="nav nav-tabs" id="bodyCar" role="tablist">
            <li class="nav-item">
                <a class="nav-link sort @if(!isset($_GET['body'])) active @endif" data-sort="body" data-slug="" data-toggle="tab" href="#" role="tab" aria-selected="true">Кузов авто</a>
            </li>
            @foreach($bodies as $body)
                @if($body->car->count() != 0)
                <li class="nav-item">
                    <a class="nav-link sort @if(isset($_GET['body']) && $_GET['body'] == $body->slug) active @endif" data-sort="body" data-slug="{{$body->slug}}" data-toggle="tab" href="#" role="tab" aria-selected="false">{{$body->title}}</a>
                </li>
                @endif
            @endforeach
        </ul>
    @endif
</div>