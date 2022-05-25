@extends('layouts.account_panel')
@section('title', isset($option)? "Редактирование опции $option->title" : "Добавление опции автомобиля" )

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
        <li class="breadcrumb-item"><a href="{{route('brand.index')}}">Опции автомобилей</a></li>
        <li class="breadcrumb-item active">{{isset($option)? "Редактирование" : "Добавление"}}</li>
    </ol>
</div>
@endsection

@section('content') 
<form action="@if(isset($option)){{ route('option.update', $option) }}@else{{ route('option.store') }}@endif" method="post">
    @csrf
    @if(isset($option))
    @method('put')
    @endif
    <div class="form-group">
        <label>Опция</label>
        <input type="text" required  name='title' class="form-control" id="title" value="{{ old('title', isset($option)? $option->title : null) }}" placeholder="Ведите название дополнительной опции автомобиля">   
        @include('includes.error', ['field'=>'title'])
    </div>
    
    <button type="submit" class="btn btn-primary">{{isset($option)? "Изменить" : "Добавить"}}</button>
</form>
@endsection