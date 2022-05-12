@extends('layouts.account_panel')
@section('title', "Редактирование баннера")
@section('panel', 'AdminPanel')
@section('keywords', 'keywords')
@section('description', 'description')
@section('user_menu')
    @include('admin.includes.sidebar_menu')
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{route('admin')}}">Главная</a></li>
        <li class="breadcrumb-item"><a href="{{route('banner.index')}}">Банер</a></li>
        <li class="breadcrumb-item active">Редактирование банера</li>
    </ol>
</div>
@endsection

@section('content')
<form action="{{ route('banner.update', $banner) }}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="title">Заголовок</label>
        <input type="text" name='title' class="form-control" id="title" value="{{ old('title', isset($banner->title)? $banner->title : null) }}" placeholder="Введите заголовак" autocomplete="off">
        @include('includes.error', ['field'=>'title'])
    </div>
    <div class="form-group">
        <label for="text_up">Верхняя часть текста</label>
        <input type="text" name='text_up' class="form-control" id="text_up" value="{{ old('text_up', isset($banner->text_up)? $banner->text_up : null) }}" placeholder="Введите верхнюю часть текста" autocomplete="off">
        @include('includes.error', ['field'=>'text_up'])
    </div>
    <div class="form-group">
        <label for="text_down">Нижняя часть текста</label>
        <input type="text" name='text_down' class="form-control" id="text_down" value="{{ old('text_down', isset($banner->text_down)? $banner->text_down : null) }}" placeholder="Введите нижнюю часть текста" autocomplete="off">
        @include('includes.error', ['field'=>'text_down'])
    </div>
  
<button type="submit" class="btn btn-success">Сохранить</button>
</form>
@endsection