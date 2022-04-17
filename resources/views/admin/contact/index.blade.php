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

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Адрес</th>
      <th scope="col">Телефон</th>
      <th scope="col">E-mail</th>
      <th scope="col">Время работы</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
      <th scope="row"></th>
      <th scope="row"></th>
      <th scope="row"></th>
      <th scope="row"></th>
      <td scope="row" class="d-flex align-items-center">
        <a href="" class="btn btn-tool" title="Редактировать"><i class="fas fa-pen text-primary"></i></a>
      </td>
    </tr>
    
  </tbody>
</table>
@endsection