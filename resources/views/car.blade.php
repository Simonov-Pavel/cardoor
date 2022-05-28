@extends('layouts.master')
@section('title', 'Cardoor - Наши машины')
@section('description', 'description')
@section('keywords', 'keywords')
@section('canonical', route('car'))
@section('title-header', 'Наши машины')

@section('content')

    @include('includes.header-page')

    
    <section id="car-list-area">
        <div class="container">
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
                                        <h2><a href="{{route('car-show', $car->slug)}}" title="Подробнее">{{ $car->model }}</a></h2>
                                        <h3 style="font-size:16px;font-weight:400">{{$car->body->title}}</h3>
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
                                        <a href="#" class="rent-btn">Арендовать</a>
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
    </section>
@endsection