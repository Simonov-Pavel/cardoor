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
                    <th>Создано</th>
                    <th>Имя</th>
                    <th>Телефон</th>
                    <th>Сообщение</th>
                    <th>Обнавлено</th>
                    <th style="width: 40px"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($messages as $message)
                <tr style="background:@if($message->views) #ccc @else #0f0 @endif" >
                    <td class="col-sm-2">{{$message->created_at}}</td>
                    <td class="col-sm-2">{{$message->name}}</td>
                    <td class="col-sm-2">{{$message->phone}}</td>
                    <td class="col-sm-3">{{$message->message}}</td>
                    <td class="col-sm-2">{{$message->updated_at}}</td>
                    <td class="col-sm-1">
                        @if(!$message->views)
                            <form action="{{ route('message.update', $message) }}" method="post">
                                @csrf
                                @method('put')
                                <button type="submit" class="p-0" style="background:transparent; border:none"><i class="fa fa-eye" aria-hidden="true"></i></button>
                            </form>
                            
                        @else
                            <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
              <!-- /.card-body -->
</div>
@endsection