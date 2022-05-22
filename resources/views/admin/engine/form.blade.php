@extends('layouts.account_panel')
@section('title', isset($engine)? "Редактировать тип двигателя автомобиля" : "Добавить тип двигателя автомобиля" )

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
        <li class="breadcrumb-item"><a href="{{route('engine.index')}}">Типы двигателей автомобилей</a></li>
        <li class="breadcrumb-item active">{{isset($engine)? "Редактирование" : "Добавление"}}</li>
    </ol>
</div>
@endsection

@section('content') 
<form action="@if(isset($engine)){{ route('engine.update', $engine) }}@else{{ route('engine.store') }}@endif" method="post">
    @csrf
    @if(isset($engine))
    @method('put')
    @endif
    <div class="form-group">
        <label>Тип двигатель автомобиля</label>
        <input type="text" required  name='title' class="form-control" id="title" value="{{ old('title', isset($engine)? $engine->title : null) }}" placeholder="Ведите тип двигателя автомобиля">   
        @include('includes.error', ['field'=>'title'])
    </div>
    
    <button type="submit" class="btn btn-primary">{{isset($engine)? "Изменить" : "Добавить"}}</button>
</form>
@endsection