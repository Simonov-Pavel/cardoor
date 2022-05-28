@extends('layouts.master')
@section('title', 'Cardoor - '.$car->model)
@section('description', 'description')
@section('keywords', 'keywords')
@section('canonical', route('car'))
@section('title-header', 'Наши машины')

@section('content')

@include('includes.header-page')
<section id="car-list-area" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="car-details-content">
                    <h2>{{ $car->model }} <span class="price">Аренда: <b>{{$car->price}} руб.</b></span></h2>
                    <picture>
                        <sourse srcset="{{ Storage::url('cars/' . $car->img_webp)}}" type="image/webp">
                        <img src="{{ Storage::url('cars/' . $car->img)}}" alt="{{$car->model}}">
                    </picture>
                    <div class="car-details-info">
                        <div class="review-star">
                            <p class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star unmark"></i>
                                <i class="fa fa-star unmark"></i>
                            </p>
                        </div>
                        <h4>Дополнительное инфо</h4>
                        <p>{!! $car->description->text !!}</p>

                        <div class="technical-info">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="tech-info-table">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>Марка</th>
                                                <td>{{$car->brand->title}}</td>
                                            </tr>
                                            <tr>
                                                <th>Класс</th>
                                                <td>{{$car->class_cars->title}}</td>
                                            </tr>
                                            <tr>
                                                <th>Кузов</th>
                                                <td>{{$car->body->title}}</td>
                                            </tr>
                                            <tr>
                                                <th>Топливо</th>
                                                <td>{{$car->engine->title}}</td>
                                            </tr>
                                            <tr>
                                                <th>Коробка передач</th>
                                                <td>{{$car->transmission->title}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                @if($car->options->count() != 0)
                                <div class="col-lg-6">
                                    <div class="tech-info-list">
                                        <ul>
                                            @foreach($car->options as $option)
                                                <li>{{$option->title}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection