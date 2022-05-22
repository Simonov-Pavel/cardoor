@extends('layouts.account_panel')
@section('title', isset($transmission)? "Редактировать коробки передач автомобиля" : "Добавить тип коробки передач автомобиля" )

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
        <li class="breadcrumb-item"><a href="{{route('transmission.index')}}">Типы коробки передач автомобилей</a></li>
        <li class="breadcrumb-item active">{{isset($transmission)? "Редактирование" : "Добавление"}}</li>
    </ol>
</div>
@endsection

@section('content') 
<form action="@if(isset($transmission)){{ route('transmission.update', $transmission) }}@else{{ route('transmission.store') }}@endif" method="post">
    @csrf
    @if(isset($transmission))
    @method('put')
    @endif
    <div class="form-group">
        <label>Тип коробки передач автомобиля</label>
        <input type="text" required  name='title' class="form-control" id="title" value="{{ old('title', isset($transmission)? $transmission->title : null) }}" placeholder="Ведите тип коробки передач автомобиля">   
        @include('includes.error', ['field'=>'title'])
    </div>
    
    <button type="submit" class="btn btn-primary">{{isset($transmission)? "Изменить" : "Добавить"}}</button>
</form>
@endsection