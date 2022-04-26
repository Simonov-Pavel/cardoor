@extends('layouts.account_panel')
@section('panel', 'Личный кабинет')
@section('title', 'Главная')
@section('keywords', 'keywords')
@section('description', 'description')
@section('user_menu')
    @include('account.includes.sidebar-menu')
@endsection

@section('content')

<div class="user-panel row">
    <div class="col-12 user-content" >
        
        <div class="row mb-2" style="justify-content: space-around;">
        
            <div class="col-2" style="display:flex; justify-content: center; min-width:160px">
                <picture>
                    <sourse srcset="{{ Storage::url('user/' . Auth::user()->img_webp)}}" type="image/webp">
                    <img src="{{ Storage::url('user/' . Auth::user()->img)}}" alt="User Image - {{Auth::user()->name}}" style="width: 100%">
                </picture>
            </div>
            <div class="col-9" style="min-width:300px">
                <table class="table table-striped">
                    <tr>   
                        <td>Имя</td>
                        <td>{{$user->name}}</td>
                    </tr>
                    <tr>   
                        <td>Email</td>
                        <td>{{$user->email}}</td>
                    </tr>
                    <tr>   
                        <td>Телефон</td>
                        <td>{{$user->phone}}</td>
                    </tr>
                
                </table>
            
            </div>
            <a href="#" class="btn btn-warning w-100">Редактировать личные данные</a>
        </div>
    </div>
</div>
@endsection