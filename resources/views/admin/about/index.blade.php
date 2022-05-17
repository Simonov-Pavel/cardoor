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
        <li class="breadcrumb-item active">О нас</li>
    </ol>
</div>
@endsection

@section('content') 

<a href="@if(isset($about)){{ route('about.edit', $about) }}@else{{ route('about.create') }}@endif" class="btn btn-primary ml-2 mb-3">Редактировать</a>

<table class="table table-striped">
    <tbody>
        <tr>
            <td>Описание</td>
            <td>
                @if(isset($about)){!!$about->description!!}@else Не добавленно @endif
            </td>
        </tr>
        <tr>
            <td>Заголовок условий аренды</td>
            <td>
                @if(isset($about)){{$about->conditions_header}}@else Не добавленно @endif
            </td>
        </tr>
        <tr>
            <td>Условия аренды</td>
            <td>
                @if(isset($about)){!!$about->conditions_rental!!}@else Не добавленно @endif
            </td>
        </tr>
        <tr>
            <td>Видео</td>
            <td>
                @if(isset($about))
                <div class="col-lg-6">
                    <div class="about-video">{{$about->video}}</div>
                </div>
                @else Не добавленно @endif
            </td>
        </tr>
        <tr>
            <td>Изображение</td>
            <td>
                @if(isset($about))
                <picture>
                    <source srcset="{{ Storage::url('about/'.$about->img_webp) }}" type="image/webp">
                    <img src="{{ Storage::url('about/'.$about->img) }}" alt="image_about-us">
                </picture>
                @else Не добавленно @endif
            </td>
        </tr>
    </tbody>
</table>

@endsection