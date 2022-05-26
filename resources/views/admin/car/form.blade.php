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
    <div class="form-group">
        <label>Выбирете марку автомобиля @if($brands->count() == 0) <a href="{{ route('brand.create') }}">Добавить</a> @endif</label>
        <select class="form-control" name='brand_id' required>
            @if($brands->count() != 0)
            <option>{{ old('brand', isset($car)? $car->brand : null) }}</option>
            @foreach($brands as $brand)
                <option value="{{ $brand->id }}" @if(isset($car) && $car->brand_id === $brand->id) selected @endif>
                    {{$brand->title}}
                </option>
            @endforeach
            @else
                <option>У вас нет выбора марок автомобилей, добавьте по ссылке выше </option>
            @endif
        </select>
        @include('includes.error', ['field'=>'brand'])
    </div>
    <div class="form-group">
        <label>Выбирете тип кузова @if($bodies->count() == 0) <a href="{{ route('body.create') }}">Добавить</a> @endif</label>
        <select class="form-control" name='body_id' required>
            @if($bodies->count() != 0)
            <option>{{ old('body', isset($car)? $car->body : null) }}</option>
            @foreach($bodies as $body)
                <option value="{{ $body->id }}" @if(isset($car) && $car->body_id === $body->id) selected @endif>
                    {{$body->title}}
                </option>
            @endforeach
            @else
                <option>У вас нет выбора кузовов автомобилей, добавьте по ссылке выше </option>
            @endif
        </select>
        @include('includes.error', ['field'=>'body'])
    </div>
    <div class="form-group">
        <label>Выбирете класс автомобиля @if($clases->count() == 0) <a href="{{ route('class.create') }}">Добавить</a> @endif</label>
        <select class="form-control" name='class_cars_id' required>
            @if($clases->count() != 0)
            <option>{{ old('class', isset($car)? $car->class : null) }}</option>
            @foreach($clases as $class)
                <option value="{{ $class->id }}" @if(isset($car) && $car->class_cars_id === $class->id) selected @endif>
                    {{$class->title}}
                </option>
            @endforeach
            @else
                <option>У вас нет выбора классов автомобилей, добавьте по ссылке выше </option>
            @endif
        </select>
        @include('includes.error', ['field'=>'class'])
    </div>
    <div class="form-group">
        <label>Выбирете тип двигателя @if($engines->count() == 0) <a href="{{ route('engine.create') }}">Добавить</a> @endif</label>
        <select class="form-control" name='engine_id' required>
            @if($engines->count() != 0)
            <option>{{ old('engine', isset($car)? $car->engine : null) }}</option>
            @foreach($engines as $engine)
                <option value="{{ $engine->id }}" @if(isset($car) && $car->engine_id === $engine->id) selected @endif>
                    {{$engine->title}}
                </option>
            @endforeach
            @else
                <option>У вас нет выбора типов двигателей, добавьте по ссылке выше </option>
            @endif
        </select>
        @include('includes.error', ['field'=>'engine'])
    </div>
    <div class="form-group">
        <label>Выбирете тип коробки передач @if($transmissions->count() == 0) <a href="{{ route('transmission.create') }}">Добавить</a> @endif</label>
        <select class="form-control" name='transmission_id' required>
            @if($transmissions->count() != 0)
            <option>{{ old('transmission', isset($car)? $car->transmission : null) }}</option>
            @foreach($transmissions as $transmission)
                <option value="{{ $transmission->id }}" @if(isset($car) && $car->transmission_id === $transmission->id) selected @endif>
                    {{$transmission->title}}
                </option>
            @endforeach
            @else
                <option>У вас нет выбора типов коробки передач, добавьте по ссылке выше </option>
            @endif
        </select>
        @include('includes.error', ['field'=>'transmission'])
    </div>
    
    <div class="form-group">
        <label>Дополнительные опции</label>
        @if($options->count() != 0)
        @foreach($options as $option)
        <div class="form-check">
            <input name="options[]" value="{{$option->id}}" class="form-check-input" type="checkbox" @if(isset($car) && $car->options->where('id', $option->id)->count()) checked @endif>
            <label class="form-check-label">{{$option->title}}</label>
        </div>
        @endforeach
        @else
         <p>У вас нет добавленных доп.опции <a href="{{ route('option.create') }}">Добавить</a></p>
        @endif
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