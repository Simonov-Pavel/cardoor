@extends('layouts.account_panel')
@section('title', isset($brand)? "Редактирование кузова автомобиля" : "Добавление кузова автомобиля" )

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
        <li class="breadcrumb-item"><a href="{{route('body.index')}}">Кузова автомобилей</a></li>
        <li class="breadcrumb-item active">{{isset($body)? "Редактирование" : "Добавление"}}</li>
    </ol>
</div>
@endsection

@section('content') 
<form action="@if(isset($body)){{ route('body.update', $body) }}@else{{ route('body.store') }}@endif" method="post">
    @csrf
    @if(isset($body))
    @method('put')
    @endif
    <div class="form-group">
        <label>Кузов автомобиля</label>
        <input type="text" required  name='title' class="form-control" id="title" value="{{ old('title', isset($body)? $body->title : null) }}" placeholder="Ведите название кузова автомобиля">   
        @include('includes.error', ['field'=>'title'])
    </div>
    
    <button type="submit" class="btn btn-primary">{{isset($body)? "Изменить" : "Добавить"}}</button>
</form>
@endsection