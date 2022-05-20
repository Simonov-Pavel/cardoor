@extends('layouts.account_panel')
@section('title', isset($brand)? "Редактирование марки автомобиля" : "Добавление марки автомобиля" )

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
        <li class="breadcrumb-item"><a href="{{route('brand.index')}}">Марки автомобилей</a></li>
        <li class="breadcrumb-item active">{{isset($brand)? "Редактирование" : "Добавление"}}</li>
    </ol>
</div>
@endsection

@section('content') 
<form action="@if(isset($brand)){{ route('brand.update', $brand) }}@else{{ route('brand.store') }}@endif" method="post">
    @csrf
    @if(isset($brand))
    @method('put')
    @endif
    <div class="form-group">
        <label>Марка</label>
        <input type="text" required  name='title' class="form-control" id="title" value="{{ old('title', isset($brand)? $brand->title : null) }}" placeholder="Ведите название марки автомобиля">   
        @include('includes.error', ['field'=>'title'])
    </div>
    
    <button type="submit" class="btn btn-primary">{{isset($brand)? "Изменить" : "Добавить"}}</button>
</form>
@endsection