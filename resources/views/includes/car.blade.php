@if($cars->count() != 0)
    <div class="row">
        <div class="col-lg-12">
            <div class="car-list-content">
                <div class="row">
                    @foreach($cars as $car)
                        <div class="col-lg-6 col-md-6">
                            <div class="single-car-wrap">
                                <div>
                                    <a href="{{route('car-show', $car->slug)}}" title="Подробнее">
                                        <picture>
                                            <sourse srcset="{{ Storage::url('cars/' . $car->img_webp)}}" type="image/webp">
                                            <img src="{{ Storage::url('cars/' . $car->img)}}" alt="{{$car->model}}">
                                        </picture>
                                    </a>
                                </div>
                                <div class="car-list-info without-bar">
                                    <h2><a href="{{route('car-show', $car->slug)}}" title="Подробнее"> {{ $car->model }}</a></h2>
                                    <h3 style="font-size:16px;font-weight:400">Марка - {{$car->brand->title}}</h3>
                                    <h3 style="font-size:16px;font-weight:400">Кузов - {{$car->body->title}}</h3>
                                    <h5>{{$car->price}} руб./в сутки</h5>
                                    <p>{!! $car->description->text_preview !!}</p>
                                    <ul class="car-info-list">
                                        <li>{{$car->brithday}}</li>
                                        <li>{{$car->engine->title}}</li>
                                        <li>{{$car->transmission->title}}</li>
                                    </ul>
                                    <p class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star unmark"></i>
                                    </p>
                                    @include('includes.button-rent')
                                </div>
                            </div>
                        </div>
                     @endforeach
                        </div>
                </div>
            <div class="page-pagi">{{ $cars->withQueryString()->links() }}</div>
        </div>
    </div>
@else
    <h3>К сожалению пока нет машин в автопарке</h3>
@endif