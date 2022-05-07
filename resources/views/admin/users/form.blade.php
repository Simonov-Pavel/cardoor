@extends('layouts.account_panel')
@section('title', isset($user)? "Редактирование пользователя - $user->name" : "Добавление пользователя" )

@section('panel', "Панель администратора")
@section('keywords', 'keywords')
@section('description', 'description')
@section('custom-js')
    <script src="{{ asset('plugins/inputmask/jquery.inputmask.min.js') }}"></script>
    <script>
        $('[data-mask]').inputmask()
    </script>
@endsection

@section('user_menu')
  @include('admin.includes.sidebar_menu')
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{route('admin')}}">Главная</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.users.index')}}">Пользователи</a></li>
        <li class="breadcrumb-item active">{{isset($user)? "Редактирование" : "Добавление"}} пользователя</li>
    </ol>
</div>
@endsection

@section('content') 
<form action="@if(isset($user)){{ route('admin.user.update', $user) }}@else{{ route('admin.users.store') }}@endif" method="post" enctype="multipart/form-data">
    @csrf
    @if(isset($user))
    @method('put')
    @endif
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Имя</span>
            </div>
            <input type="text"  name='name' class="form-control" id="name" value="{{ old('name', isset($user)? $user->name : null) }}" placeholder="Введите ваше имя" autocomplete="off">
            
        </div>
        @include('includes.error', ['field'=>'name'])
    </div>
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-phone"></i></span>
            </div>
            <input type="text"  name='phone' class="form-control" data-inputmask='"mask": "+7(999) 999-99-99"' data-mask value="{{ old('phone', isset($user)? $user->phone : null) }}" placeholder="Введите телефон">
            
        </div>
        @include('includes.error', ['field'=>'phone'])
    </div>
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" style='font-weight:bold'>@</span>
            </div>
            <input type="text"  name='email' class="form-control"  id="email" value="{{ old('email', isset($user)? $user->email : null) }}" placeholder="Введите email">
            
        </div>
        @include('includes.error', ['field'=>'email'])
    </div>
    <button type="submit" class="btn btn-primary">{{isset($user)? "Изменить" : "Добавить"}}</button>
</form>
@endsection