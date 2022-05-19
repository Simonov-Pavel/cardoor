@extends('layouts.account_panel')
@section('title', isset($service)? "Редактирование услуги" : "Добавление услуги" )

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
        <li class="breadcrumb-item"><a href="{{route('service.index')}}">Все услуги</a></li>
        <li class="breadcrumb-item active">{{isset($service)? "Редактирование" : "Добавление"}}</li>
    </ol>
</div>
@endsection

@section('content') 
<form action="@if(isset($service)){{ route('service.update', $service) }}@else{{ route('service.store') }}@endif" method="post" enctype="multipart/form-data">
    @csrf
    @if(isset($service))
    @method('put')
    @endif
    <div class="form-group">
        <label>Заголовок услуги</label>
        <input type="text" required  name='header' class="form-control" id="header" value="{{ old('header', isset($service)? $service->header : null) }}" placeholder="Ведите название выполняемой услуги">   
        @include('includes.error', ['field'=>'header'])
    </div>
    <div class="form-group">
        <label>Описание</label>
        <textarea type="text" name='description' class="form-control" id="description" placeholder="Описание компании" required='required'>{{ old('description', isset($service)? $service->description : null) }}</textarea>
        @include('includes.error', ['field'=>'description'])
    </div>
    <div class="form-group"> 
        <label for="file">Выбирете изображение @if(isset($service))<small>(если хотите изменить его)</small>@endif</label><br>
        <small>Рекомендуемые минимальные размеры 640px X 320px</small><br>
        <input type="file" id="file" name="image" @if(!isset($service)) required @endif><br><br>
        @include('includes.error', ['field'=>'image'])
        @if(isset($service))
        <picture>
            <source srcset="{{ Storage::url('service/'.$service->img_webp) }}" type="image/webp">
            <img src="{{ Storage::url('service/'.$service->img) }}" width="100" >
        </picture>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">{{isset($service)? "Изменить" : "Добавить"}}</button>
</form>
@endsection