@extends('layouts.account_panel')
@section('title', "Редактирование контакта")
@section('panel', 'AdminPanel')
@section('keywords', 'keywords')
@section('description', 'description')
@section('meta')
  <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('user_menu')
    @include('admin.includes.sidebar_menu')
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{route('admin')}}">Главная</a></li>
        <li class="breadcrumb-item"><a href="{{route('contact.index')}}">Контакты</a></li>
        <li class="breadcrumb-item active">Редактирование контакта</li>
    </ol>
</div>
@endsection

@section('content')
<form action="{{ route('contact.update', $contact) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="address">Адрес</label>
        <input type="text" name='address' class="form-control" id="address" value="{{ old('address', isset($contact)? $contact->address : null) }}" placeholder="Введите адрес местоположения" autocomplete="off">
        @include('includes.error', ['field'=>'address'])
    </div>
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-phone"></i></span>
        </div>
            <input type="text"  name='phone' class="form-control" data-inputmask='"mask": "+7(999) 999-99-99"' data-mask value="{{ old('phone', isset($contact)? $contact->phone : null) }}">
    
            @include('includes.error', ['field'=>'phone'])
        </div>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name='email' class="form-control" id="email" value="{{ old('email', isset($contact)? $contact->email : null) }}" placeholder="Введите email">
        @include('includes.error', ['field'=>'email'])
    </div>
    <div class="form-group">
        <label for="summernote">Описание</label>
        <textarea  class="form-control" id="summernote" name='description'>{{ old('description', $contact->description) }}</textarea>
        @include('includes.error', ['field'=>'description'])
    </div>
    <div class="form-group">
        <label for="map">Карта</label>
        <textarea  class="form-control" id="map" name='map'>{{ old('map', $contact->map) }}</textarea>
        @include('includes.error', ['field'=>'map'])
    </div>
    <div class="form-group"> 
        <label for="logo">Логотип <small>(выбирете фаил,если хотите изменить его)</small></label><br>
        <div class="picture" style="position:relative;width: fit-content;">
        @if(isset($contact->logo))
            <picture>
                <source srcset="{{ Storage::url('contact/'.$contact->logo_webp) }}" type="image/webp">
                <img src="{{ Storage::url('contact/'.$contact->logo) }}" width="100" alt="logo">
            </picture>
        @else
            <p>Логотип не добавлен</p>
        @endif
      <div class="overflow d-none" style="position:absolute; top:0;left:0;right:0;bottom:0;background-color:rgba(255, 255, 255, 0.8);"></div>
    </div>
    <small>Рекомендуемые минимальные размеры 100px X 100px</small><br>
    <input type="file" id="logo" name="logo"><br><br>
    @include('includes.error', ['field'=>'logo'])
  
<button type="submit" class="btn btn-primary">Изменить</button>
</form>
@endsection