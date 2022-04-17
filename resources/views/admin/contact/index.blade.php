@extends('layouts.account_panel')
@section('title', 'Контакты')
@section('panel', "Панель администратора")
@section('keywords', 'keywords')
@section('description', 'description')
@section('canonical', route('index'))

@section('user_menu')
  @include('admin.includes.sidebar_menu')
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{route('admin')}}">Главная</a></li>
        <li class="breadcrumb-item active">Контакты</li>
    </ol>
</div>
@endsection


@section('content') 
  
@endsection