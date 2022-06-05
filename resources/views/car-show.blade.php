@extends('layouts.master')
@section('title', 'Cardoor - '.$car->model)
@section('description', 'description')
@section('keywords', 'keywords')
@section('canonical', route('car'))
@section('title-header', $car->model)

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

                        @include('includes.car-info')
                        <div class="text-center">
                            @include('includes.button-rent')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection