@extends('layouts.account_panel')
@section('title', 'Сообщения')
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
        <li class="breadcrumb-item active">Сообщения</li>
    </ol>
</div>
@endsection

@section('content') 
<div class="card">
    <div class="card-body p-0">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>Имя</th>
                    <th>Телефон</th>
                    <th>Сообщение</th>
                    <th style="width: 40px"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($messages as $message)
                <tr>
                    <td class="col-2">{{$message->name}}</td>
                    <td class="col-2">{{$message->phone}}</td>
                    <td class="col-6">{{$message->text}}</td>
                    <td class="col-1"><a href="@if(!$message->views) {{route('admin-message.update', $message)}} @endif" title='@if($message->views) Просмотренно @else Смотреть @endif'><i class="fa @if($message->views) fa-eye-slash @else fa-eye @endif" aria-hidden="true"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
              <!-- /.card-body -->
</div>
@endsection