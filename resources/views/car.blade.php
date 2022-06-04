@extends('layouts.master')
@section('title', 'Cardoor - Наши машины')
@section('description', 'description')
@section('keywords', 'keywords')
@section('canonical', route('car'))
@section('title-header', 'Наши машины')
@section('custom-css')
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
@endsection
@section('custom-js')
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="{{ asset('plugins/inputmask/jquery.inputmask.min.js') }}"></script>
    <script src="{{ asset('js/sort-car.js') }}"></script>
    <script>
        $('#startRent').inputmask('dd.mm.yyyy', { 'placeholder': 'dd.mm.yyyy' });
        $('#endRent').inputmask('dd.mm.yyyy', { 'placeholder': 'dd.mm.yyyy' });
        $( "#startRent" ).datepicker();
        $( "#startRent" ).datepicker( "option", "dateFormat", "dd.mm.yy" );
        $( "#endRent" ).datepicker();
        $( "#endRent" ).datepicker( "option", "dateFormat", "dd.mm.yy" );
    </script>
@endsection

@section('content')

    @include('includes.header-page')
  
    <section id="car-list-area">
        <div class="container">
            <div class="sort">
                @include('includes.sort-car')
            </div>
            <div class="book-ur-car"style="margin: 40px auto;background-color: #ccc;" >
            <h3>Укажите даты аренды авто и мы покажим вам все свободные фвто в эти даты</h3>
                <form action="{{route('car')}}" method="GET" style="padding: 45px 0;">
                    <div class="bookinput-item" style="border: 1px solid #000;background: #ccc;">
                        <input name='startRent' type="text" id="startRent" required placeholder="Дата аренды" autocomplete="off" data-inputmask-alias="datetime" data-inputmask-inputformat="dd.mm.yyyy" data-mask>
                    </div>
                    <div class="bookinput-item" style="border: 1px solid #000;background: #ccc;">
                        <input name='endRent' type="text" id="endRent" required placeholder="Дата возврата" autocomplete="off" data-inputmask-alias="datetime" data-inputmask-inputformat="dd.mm.yyyy" data-mask>
                    </div>

                    <div class="bookcar-btn bookinput-item" style="border: 1px solid #000;">
                        <button type="submit">Подобрать</button>
                    </div>
                </form>
            </div>
            <div class="car">
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
                                            <h3 style="font-size:16px;font-weight:400">Класс - {{$car->class_car->title}}</h3>
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
            </div>
        </div>
    </section>
@endsection