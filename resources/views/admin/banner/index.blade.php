@extends('layouts.account_panel')
@section('title', 'Баннер')
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
        <li class="breadcrumb-item active">Банер</li>
    </ol>
</div>
@endsection

@section('content') 

<div class="card">
    <div class="card-body p-0">
    
        <table class="table table-sm">
            
            <tbody>
                <tr>
                    <td class="col-sm-2">Заголовок</td>
                    <td class="col-sm-2">@if(isset($banner->title)){{ $banner->title }}@else Не добавленно @endif</td>
                </tr>
                <tr>
                    <td class="col-sm-2">Текст(верх)</td>
                    <td class="col-sm-2">@if(isset($banner->text_up)){{ $banner->text_up }}@else Не добавленно @endif</td>
                </tr>
                <tr>
                    <td class="col-sm-2">Текст(низ)</td>
                    <td class="col-sm-2">@if(isset($banner->text_down)){{ $banner->text_down }}@else Не добавленно @endif</td>
                </tr>
            </tbody>
        </table>
        
    </div>
    
</div>
<a href="{{route('banner.edit', $banner)}}" class="btn btn-primary w-100">Редактировать</a>
@endsection