@extends('layouts.account_panel')
@section('title', 'О нас')
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
        <li class="breadcrumb-item active">Описание раздела услуг</li>
    </ol>
</div>
@endsection

@section('content') 
<a href="@if($service_description != null){{ route('service-description.edit', $service_description) }}@else{{ route('service-description.create') }}@endif" class="btn btn-primary ml-2 mb-3">@if($service_description != null) Редактировать @else Создать @endif</a>

<table class="table table-striped">
    <tbody>
        <tr>
            <td>Заголовок</td>
            <td>
                @if($service_description != null){!!$service-description->header!!}@else Не добавленно @endif
            </td>
        </tr>
        <tr>
            <td>Описание</td>
            <td>
                @if($service_description != null){!!$service-description->description!!}@else Не добавленно @endif
            </td>
        </tr>
    </tbody>
</table>

@endsection