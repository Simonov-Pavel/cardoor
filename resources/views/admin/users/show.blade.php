@extends('layouts.account_panel')
@section('title', 'Пользователи')
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
        <li class="breadcrumb-item active">Пользователи</li>
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
                    <th>email</th>
                    <th style="width: 40px">Деиствие</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td class="col-sm-2">{{$user->name}}</td>
                    <td class="col-sm-2">{{$user->phone}}</td>
                    <td class="col-sm-2">{{$user->email}}</td>
                    <td class="col-sm-1">
                        <form action="" method="post" class='d-inline-block'>
                            @csrf
                            @method('put')
                            <button type="submit" class="p-0" style="background:transparent; border:none"><a href="" title='Просмотреть'><i class="fa fa-eye" aria-hidden="true"></i></a></button>
                        </form>
                        <a href="" title='Редактировать'><i class="fa fa-pencil text-success" aria-hidden="true"></i></a>
                        <a href="" title='Удалить'><i class="fa fa-close text-danger" aria-hidden="true"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
    
</div>
<div style="width:fit-content;margin:0 auto">{{ $users->withQueryString()->links() }}</div>
@endsection