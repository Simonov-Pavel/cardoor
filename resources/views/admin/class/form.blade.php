@extends('layouts.account_panel')
@section('title', isset($class)? "Редактирование класса автомобиля" : "Добавление класса автомобиля" )

@section('panel', "Панель администратора")
@section('keywords', 'keywords')
@section('description', 'description')

@section('user_menu')
  @include('admin.includes.sidebar_menu')
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{route('admin')}}">Главная</a></li>
        <li class="breadcrumb-item"><a href="{{route('class.index')}}">Классы автомобилей</a></li>
        <li class="breadcrumb-item active">{{isset($class)? "Редактирование" : "Добавление"}}</li>
    </ol>
</div>
@endsection

@section('content') 
<form action="@if(isset($class)){{ route('class.update', $class) }}@else{{ route('class.store') }}@endif" method="post">
    @csrf
    @if(isset($class))
    @method('put')
    @endif
    <div class="form-group">
        <label>Класс автомобиля</label>
        <input type="text" required  name='title' class="form-control" id="title" value="{{ old('title', isset($class)? $class->title : null) }}" placeholder="Ведите название класса автомобиля">   
        @include('includes.error', ['field'=>'title'])
    </div>
    
    <button type="submit" class="btn btn-primary">{{isset($class)? "Изменить" : "Добавить"}}</button>
</form>
@endsection