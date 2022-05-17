@extends('layouts.account_panel')
@section('title', isset($about)? "Редактирование страницы 'О нас'" : "Добавление страницы 'О нас'" )

@section('panel', "Панель администратора")
@section('keywords', 'keywords')
@section('description', 'description')
@section('custom-js')
@endsection

@section('user_menu')
  @include('admin.includes.sidebar_menu')
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{route('admin')}}">Главная</a></li>
        <li class="breadcrumb-item"><a href="{{route('user.index')}}">О нас</a></li>
        <li class="breadcrumb-item active">{{isset($about)? "Редактирование" : "Добавление"}}</li>
    </ol>
</div>
@endsection

@section('content') 
<form action="@if(isset($about)){{ route('about.update', $about) }}@else{{ route('about.store') }}@endif" method="post" enctype="multipart/form-data">
    @csrf
    @if(isset($about))
    @method('put')
    @endif
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Описание</span>
            </div>
            <input type="text"  name='description' class="form-control" id="description" value="{{ old('description', isset($about)? $about->description : null) }}" placeholder="Описание компании" autocomplete="off">
            
        </div>
        @include('includes.error', ['field'=>'description'])
    </div>
    <button type="submit" class="btn btn-primary">{{isset($about)? "Изменить" : "Добавить"}}</button>
</form>
@endsection