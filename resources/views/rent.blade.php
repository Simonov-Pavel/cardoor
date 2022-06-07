@extends('layouts.master')
@section('title', 'Cardoor - Аренда авто - '. $car->model)
@section('description', 'description')
@section('keywords', 'keywords')
@section('canonical', route('car'))
@section('title-header', 'Аренда авто - '. $car->model)
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
    
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>{{$car->model}}</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <picture>
                        <sourse srcset="{{ Storage::url('cars/' . $car->img_webp)}}" type="image/webp">
                        <img src="{{ Storage::url('cars/' . $car->img)}}" alt="{{$car->model}}">
                    </picture>
                </div>
                <div class="col-lg-6">
                    <p>{!! $car->description->text !!}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="car-details-content">
                        <div class="car-details-info">
                            <div class="text-center">
                                @include('includes.car-info')
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row">
            <div class="col-lg-6">
            <form action="{{ route('rentStore') }}" method="post">
                @csrf
                <div class="form-group">
                    <label><b>Дата начала аренды</b></label>
                    <input type="text" required  name='startRent' value="{{ old('startRent', isset($_GET['startRent'])? $_GET['startRent'] : null) }}" id="startRent" class="form-control form-pattern" placeholder="Ведите дату аренды" autocomplete="off" data-inputmask-alias="datetime" data-inputmask-inputformat="dd.mm.yyyy" data-mask pattern="\d{2}[.]+\d{2}[.]+\d{4}" title="Допускаются только цифры и точка в формате - дд.мм.гггг - (например : 08.03.2000)">   
                    @include('includes.error', ['field'=>'startRent'])
                </div>
                <div class="form-group">
                    <label><b>Дата конца аренды</b></label>
                    <input type="text" required  name='endRent' value="{{ old('endRent', isset($_GET['endRent'])? $_GET['endRent'] : null) }}" id="endRent" class="form-control form-pattern" placeholder="Ведите дату сдачи автомобиля" autocomplete="off" data-inputmask-alias="datetime" data-inputmask-inputformat="dd.mm.yyyy" data-mask pattern="\d{2}[.]+\d{2}[.]+\d{4}" title="Допускаются только цифры и точка в формате - дд.мм.гггг - (например : 08.03.2000)" >   
                    @include('includes.error', ['field'=>'endRent'])
                </div>
                <p><b>Стоимость аренды <small>(за сутки)</small></b>: {{ $car->price }}</p>
                <input type="hidden" name="car_id" value="{{$car->id}}">
                <button type="submit" class="btn btn-success">Подтвердить</button>
            </form>
        </div>
        </div>
    </section>

@endsection