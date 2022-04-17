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

<a href="{{ route('contact.store', $contact) }}" class="btn btn-primary ml-2 mb-3">Редактировать</a>
@if(isset($contact))
<table class="table table-striped">
  <tbody>
    <tr>
      <td>Логотип</td>
      <td>
        <picture>
          <source srcset="{{ Storage::url('contact/'.$contact->logo_webp) }}" type="image/webp">
          <img src="{{ Storage::url('contact/'.$contact->logo) }}" width="100" alt="logo">
        </picture>
      </td>
    </tr>
    <tr>
      <td>Адрес</td>
      <td>{{$contact->address}}</td>
    </tr>
    <tr>
      <td>Телефон</td>
      <td>{{$contact->phone}}</td>
    </tr>
    <tr>
      <td>Email</td>
      <td>{{$contact->email}}</td>
    </tr>
    <tr>
      <td>Описание</td>
      <td>{!!$contact->description!!}</td>
    </tr>
  </tbody>
</table>
@else
<h3 class='text-center'>Вы пока ничего не добавили</h3>
@endif

</div>
@endsection