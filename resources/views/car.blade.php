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
    <script src="{{ asset('js/datepicker-ru.js') }}"></script>
    <script src="{{ asset('plugins/inputmask/jquery.inputmask.min.js') }}"></script>
    <script src="{{ asset('js/sort-car.js') }}"></script>
@endsection

@section('content')

    @include('includes.header-page')
    <section id="funfact-area" class="overlay section-padding mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-md-12 m-auto">
                    <div class="funfact-content-wrap">
                        <div class="row">
                            <div class="section-title text-center w-100 m-0">
                                <h3>Укажите интересующие вас параметры</h3>
                            </div>
                            <div class="book-ur-car">
                                <form action="{{route('car')}}" method="GET">
                                    <div class="bookinput-item m-0">
                                        <input name='startRent' type="text" id="startRent"  class="form-pattern" value="{{ old('startRent', isset($_GET['startRent'])? $_GET['startRent'] : null) }}"  required placeholder="Дата аренды" autocomplete="off" data-inputmask-alias="datetime" data-inputmask-inputformat="dd.mm.yyyy" data-mask pattern="\d{2}[.]+\d{2}[.]+\d{4}" title="Допускаются только цифры и точка в формате - дд.мм.гггг - (например : 08.03.2000)">
                                        @include('includes.error', ['field'=>'startRent'])
                                    </div>
                                    <div class="bookinput-item">
                                        <input name='endRent' type="text" id="endRent" class="form-pattern" value="{{ old('endRent', isset($_GET['endRent'])? $_GET['endRent'] : null) }}" required placeholder="Дата возврата" autocomplete="off" data-inputmask-alias="datetime" data-inputmask-inputformat="dd.mm.yyyy" data-mask pattern="\d{2}[.]+\d{2}[.]+\d{4}" title="Допускаются только цифры и точка в формате - дд.мм.гггг - (например : 08.03.2000)">
                                        @include('includes.error', ['field'=>'endRent'])
                                    </div>
                                    @if(isset($_GET['class']))
                                        <input type="hidden" name="class" value="{{ $_GET['class'] }}">
                                    @endif
                                    @if(isset($_GET['body']))
                                        <input type="hidden" name="body" value="{{ $_GET['body'] }}">
                                    @endif

                                    <div class="bookcar-btn bookinput-item">
                                        <button type="submit">Подобрать</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="sort">
                            @include('includes.sort-car')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <section id="car-list-area">
        <div class="container">
            
            
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