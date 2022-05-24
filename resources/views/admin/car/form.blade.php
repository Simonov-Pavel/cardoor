@extends('layouts.account_panel')
@section('title', isset($car)? "Редактирование автомобиля $car->model" : "Добавление автомобиля" )

@section('panel', "Панель администратора")
@section('keywords', 'keywords')
@section('description', 'description')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
@endsection
@section('custom-js')
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('plugins/summernote/lang/summernote-ru-RU.min.js') }}"></script>
    <script src="{{ asset('js/summernote-my.js') }}"></script>
@endsection

@section('user_menu')
  @include('admin.includes.sidebar_menu')
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{route('admin')}}">Главная</a></li>
        <li class="breadcrumb-item"><a href="{{route('car.index')}}">Автомобили</a></li>
        <li class="breadcrumb-item active">{{isset($car)? "Редактирование" : "Добавление"}}</li>
    </ol>
</div>
@endsection

@section('content') 
<form action="@if(isset($car)){{ route('car.update', $car) }}@else{{ route('car.store') }}@endif" method="post" enctype="multipart/form-data">
    @csrf
    @if(isset($car))
    @method('put')
    @endif
    <div class="form-group">
        <label>Модель</label>
        <input type="text" required  name='model' class="form-control" id="model" value="{{ old('model', isset($car)? $car->model : null) }}" placeholder="Ведите модель автомобиля">   
        @include('includes.error', ['field'=>'model'])
    </div>
    <div class="form-group">
        <label>Краткое описание</label>
        <textarea type="text" name='description_preview' class="form-control" id="description_preview" placeholder="Описание автомобиля" required='required'>{{ old('description_preview') }}</textarea>
        @include('includes.error', ['field'=>'description_preview'])
    </div>
    <div class="form-group">
        <label>Описание</label>
        <textarea type="text" name='description' class="form-control" id="description" placeholder="Описание автомобиля" required='required'>{{ old('description', isset($car)? $car->description : null) }}</textarea>
        @include('includes.error', ['field'=>'description'])
    </div>
    <div class="form-group">
        <label>Год выпуска</label>
        <input type="text" required  name='brithday' class="form-control" id="brithday" value="{{ old('brithday', isset($car)? $car->brithday : null) }}" placeholder="Ведите год выпуска">   
        @include('includes.error', ['field'=>'brithday'])
    </div>
    <div class="form-group">
        <label>Цена аренды в сутки</label>
        <input type="text"  name='price' required class="form-control" id="price" value="{{ old('price', isset($car)? $car->price : null) }}" placeholder="Добавьте price"> 
        @include('includes.error', ['field'=>'price'])
    </div>
    <div class="form-group"> 
        <label for="file">Выбирете изображение @if(isset($car))<small>(если хотите изменить его)</small>@endif</label><br>
        <small>Рекомендуемые минимальные размеры 1280px X 800px</small><br>
        <input type="file" id="file" name="image" @if(!isset($car)) required @endif><br><br>
        @include('includes.error', ['field'=>'image'])
        @if(isset($car))
        <picture>
            <source srcset="{{ Storage::url('cars/'.$car->img_webp) }}" type="image/webp">
            <img src="{{ Storage::url('cars/'.$car->img) }}" width="100" >
        </picture>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">{{isset($car)? "Изменить" : "Добавить"}}</button>
</form>
@endsection