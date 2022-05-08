@extends('layouts.account_panel')
@section('panel', 'Личный кабинет')
@section('title', 'Редактировать личные данные')
@section('keywords', 'keywords')
@section('description', 'description')
@section('user_menu')
    @include('account.includes.sidebar-menu')
@endsection
@section('custom-js')
    <script src="{{ asset('plugins/inputmask/jquery.inputmask.min.js') }}"></script>
    <script>
        $('[data-mask]').inputmask()
    </script>
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{route('account')}}">Главная</a></li>
        <li class="breadcrumb-item active">Редактирование</li>
    </ol>
</div>
@endsection

@section('content') 
<form action="{{ route('persona.update', $persona)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Имя</span>
            </div>
            <input type="text"  name='name' class="form-control" id="name" value="{{ old('name', $persona->name ) }}" placeholder="Введите ваше имя" autocomplete="off">
            
        </div>
        @include('includes.error', ['field'=>'name'])
    </div>
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-phone"></i></span>
            </div>
            <input type="text"  name='phone' class="form-control" data-inputmask='"mask": "+7(999) 999-99-99"' data-mask value="{{ old('phone',  $persona->phone ) }}" placeholder="Введите телефон">
            
        </div>
        @include('includes.error', ['field'=>'phone'])
    </div>
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" style='font-weight:bold'>@</span>
            </div>
            <input type="text"  name='email' class="form-control"  id="email" value="{{ old('email',  $persona->email) }}" placeholder="Введите email">
            
        </div>
        @include('includes.error', ['field'=>'email'])
    </div>
    <div class="form-group"> 
        <label for="image">Аватар <small>(выбирете фаил,если хотите изменить его)</small></label><br>
        <div class="picture" style="position:relative;width: fit-content;">
            <picture>
                <source srcset="{{ Storage::url('user/'.$persona->img_webp) }}" type="image/webp">
                <img src="{{ Storage::url('user/'.$persona->img) }}" alt="avatar">
            </picture>
        </div>
    </div>
    <small>Рекомендуемые минимальные размеры 160px X 160px</small><br>
    <input type="file" id="image" name="image"><br><br>
    @include('includes.error', ['field'=>'image'])
    <button type="submit" class="btn btn-primary">Изменить</button>
</form>
@endsection