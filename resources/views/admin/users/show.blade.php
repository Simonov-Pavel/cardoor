@extends('layouts.account_panel')
@section('title', "Пользователь - $user->name")
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
        <li class="breadcrumb-item"><a href="{{route('user.index')}}">Пользователи</a></li>
        <li class="breadcrumb-item active">{{$user->name}}</li>
    </ol>
</div>
@endsection

@section('content') 

@endsection