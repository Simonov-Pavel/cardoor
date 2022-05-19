@extends('layouts.account_panel')
@section('title', isset($service_description)? "Редактирование описания услуг" : "Добавление описания услуг" )

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
        <li class="breadcrumb-item"><a href="{{route('service-description.index')}}">Описание раздела услуг</a></li>
        <li class="breadcrumb-item active">{{isset($service_description)? "Редактирование" : "Добавление"}}</li>
    </ol>
</div>
@endsection

@section('content') 
<form action="@if(isset($service_description)){{ route('service-description.update', $service_description) }}@else{{ route('service-description.store') }}@endif" method="post">
    @csrf
    @if(isset($service_description))
    @method('put')
    @endif
    <div class="form-group">
        <label>Заголовок раздела описания услуг</label>
        <input type="text" required  name='header' class="form-control" id="header" value="{{ old('header', isset($service_description)? $service_description->header : null) }}" placeholder="Ведите заголовок для раздела описания услуг">   
        @include('includes.error', ['field'=>'conditions_header'])
    </div>
    <div class="form-group">
        <label>Описание</label>
        <textarea type="text" name='description' class="form-control" id="description" placeholder="Описание раздела услуг" required='required'>{{ old('description', isset($service_description)? $service_description->description : null) }}</textarea>
        @include('includes.error', ['field'=>'description'])
    </div>
    
    <button type="submit" class="btn btn-primary">{{isset($service_description)? "Изменить" : "Добавить"}}</button>
</form>
@endsection