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
                <tr>
                    <td class="col-2">1.</td>
                    <td class="col-2">Update software</td>
                    <td class="col-6">
                        <div>
                            <div class="progress-bar progress-bar-danger"></div>
                        </div>
                    </td>
                    <td class="col-2"><span class="badge bg-danger">55%</span></td>
                </tr>
            </tbody>
        </table>
    </div>
              <!-- /.card-body -->
</div>
@endsection