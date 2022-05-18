@extends('layouts.account_panel')
@section('title', 'Партнеры')
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
        <li class="breadcrumb-item active">Партнеры</li>
    </ol>
</div>
@endsection

@section('content') 
<div class="card">
    <div class="card-body p-0">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>Партнер</th>
                    <th>Логотип</th>
                    <th style="width: 40px"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="col-sm-2"></td>
                    <td class="col-sm-2"></td>
                    <td class="col-sm-1">
                        
                    </td>
                </tr>
            </tbody>
        </table>
        
    </div>
    
</div>
<div style="width:fit-content;margin:0 auto">{{ $partners->withQueryString()->links() }}</div>
@endsection