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
        <label>Марка автомобиля</label>
        <input type="text" required  name='model' class="form-control" id="model" value="{{ old('model', isset($car)? $car->model : null) }}" placeholder="Ведите модель автомобиля">   
        @include('includes.error', ['field'=>'model'])
    </div>
    <div class="form-group">
        <label>Краткое описание</label>
        <textarea type="text" name='text_preview' class="form-control" id="text_preview" placeholder="Описание автомобиля" required='required'>{{ old('text_preview', isset($car->description->text_preview)? $car->description->text_preview : null) }}</textarea>
        @include('includes.error', ['field'=>'text_preview'])
    </div>
    <div class="form-group">
        <label>Описание</label>
        <textarea type="text" name='text' class="form-control" id="text" placeholder="Описание автомобиля" required='required'>{{ old('text', isset($car->description->text)? $car->description->text : null) }}</textarea>
        @include('includes.error', ['field'=>'text'])
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
    @if($brands->count() != 0)
    <div class="form-group">
        <label>Выбирете модель</label>
        <select class="form-control" name='brand' required>
            <option>{{ old('brand', isset($car)? $car->brand : null) }}</option>
            @foreach($brands as $brand)
                <option value="{{ $brand->title }}" @if(isset($car) && $car->brand === $brand->title) selected @endif>
                    {{$brand->title}}
                </option>
            @endforeach
        </select>
        @include('includes.error', ['field'=>'brand'])
    </div>
    @endif
    @if($bodies->count() != 0)
    <div class="form-group">
        <label>Выбирете тип кузова</label>
        <select class="form-control" name='body' required>
            <option>{{ old('body', isset($car)? $car->body : null) }}</option>
            @foreach($bodies as $body)
                <option value="{{ $body->title }}" @if(isset($car) && $car->body === $body->title) selected @endif>
                    {{$body->title}}
                </option>
            @endforeach
        </select>
        @include('includes.error', ['field'=>'body'])
    </div>
    @endif
    @if($clases->count() != 0)
    <div class="form-group">
        <label>Выбирете класс автомобиля</label>
        <select class="form-control" name='class' required>
            <option>{{ old('class', isset($car)? $car->class : null) }}</option>
            @foreach($clases as $class)
                <option value="{{ $class->title }}" @if(isset($car) && $car->class === $class->title) selected @endif>
                    {{$class->title}}
                </option>
            @endforeach
        </select>
        @include('includes.error', ['field'=>'class'])
    </div>
    @endif
    @if($engines->count() != 0)
    <div class="form-group">
        <label>Выбирете тип двигателя</label>
        <select class="form-control" name='engine' required>
            <option>{{ old('engine', isset($car)? $car->engine : null) }}</option>
            @foreach($engines as $engine)
                <option value="{{ $engine->title }}" @if(isset($car) && $car->engine === $engine->title) selected @endif>
                    {{$engine->title}}
                </option>
            @endforeach
        </select>
        @include('includes.error', ['field'=>'engine'])
    </div>
    @endif
    @if($transmissions->count() != 0)
    <div class="form-group">
        <label>Выбирете тип коробки передач</label>
        <select class="form-control" name='transmission' required>
            <option>{{ old('transmission', isset($car)? $car->transmission : null) }}</option>
            @foreach($transmissions as $transmission)
                <option value="{{ $transmission->title }}" @if(isset($car) && $car->transmission === $transmission->title) selected @endif>
                    {{$transmission->title}}
                </option>
            @endforeach
        </select>
        @include('includes.error', ['field'=>'transmission'])
    </div>
    @endif
    <div class="form-group">
        <label>Дополнительные опции</label>
        @foreach($options as $option)
        <div class="form-check">
            <input name="options[]" value="{{$option->id}}" class="form-check-input" type="checkbox" @if($car->options->where('id', $option->id)->count()) checked @endif>
            <label class="form-check-label">{{$option->title}}</label>
        </div>
        @endforeach
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