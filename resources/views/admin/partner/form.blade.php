@extends('layouts.account_panel')
@section('title', isset($partner)? "Редактирование партнера - $partner->title" : "Добавление партнера" )

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
        <li class="breadcrumb-item"><a href="{{route('partner.index')}}">Партнеры</a></li>
        <li class="breadcrumb-item active">{{isset($partner)? "Редактирование" : "Добавление"}} партнера</li>
    </ol>
</div>
@endsection

@section('content') 
<form action="@if(isset($partner)){{ route('partner.update', $partner) }}@else{{ route('partner.store') }}@endif" method="post" enctype="multipart/form-data">
    @csrf
    @if(isset($partner))
    @method('put')
    @endif
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Наименование партнера</span>
            </div>
            <input type="text"  name='title' class="form-control" id="title" value="{{ old('title', isset($partner)? $partner->title : null) }}" placeholder="Введите наименование вашего парнера">
            
        </div>
        @include('includes.error', ['field'=>'title'])
    </div>
    <div class="form-group"> 
        <label for="image">Логотип партнера <small>({{isset($partner) ? "выбирете фаил,если хотите изменить его" : "выбирете фаил,что бы добавить логотип партнера" }})</small></label><br>
        @if(isset($partner))
        <div class="picture" style="position:relative;width: fit-content;">
            <picture>
                <source srcset="{{ Storage::url('partner/' . $partner->img_webp) }}" type="image/webp">
                <img src="{{ Storage::url('partner/' . $partner->img) }}" alt="{{$partner->title}}">
            </picture>
        </div>
        @endif
    </div>
    <small>Рекомендуемые минимальные размеры 250px X 105px</small><br>
    <input type="file" id="image" name="image"><br><br>
    @include('includes.error', ['field'=>'image'])
    <button type="submit" class="btn btn-primary">{{isset($partner)? "Изменить" : "Добавить"}}</button>
</form>
@endsection