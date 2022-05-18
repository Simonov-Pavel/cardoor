@extends('layouts.account_panel')
@section('title', isset($about)? "Редактирование страницы 'О нас'" : "Добавление страницы 'О нас'" )

@section('panel', "Панель администратора")
@section('keywords', 'keywords')
@section('description', 'description')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
@endsection
@section('custom-js')
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('plugins/summernote/lang/summernote-ru-RU.min.js') }}"></script>
    <script src="{{ asset('js/summernote-my.js') }}"></script>
@endsection

@section('user_menu')
  @include('admin.includes.sidebar_menu')
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{route('admin')}}">Главная</a></li>
        <li class="breadcrumb-item"><a href="{{route('about.index')}}">О нас</a></li>
        <li class="breadcrumb-item active">{{isset($about)? "Редактирование" : "Добавление"}}</li>
    </ol>
</div>
@endsection

@section('content') 
<form action="@if(isset($about)){{ route('about.update', $about) }}@else{{ route('about.store') }}@endif" method="post" enctype="multipart/form-data">
    @csrf
    @if(isset($about))
    @method('put')
    @endif
    <div class="form-group">
        <label>Описание</label>
        <textarea type="text" name='description' class="form-control" id="description" placeholder="Описание компании" required='required'>{{ old('description', isset($about)? $about->description : null) }}</textarea>
        @include('includes.error', ['field'=>'description'])
    </div>
    <div class="form-group">
        <label>Заголовок для условий аренды</label>
        <input type="text" required  name='conditions_header' class="form-control" id="conditions_header" value="{{ old('conditions_header', isset($about)? $about->conditions_header : null) }}" placeholder="Ведите заголовок для условий аренды">   
        @include('includes.error', ['field'=>'conditions_header'])
    </div>
    <div class="form-group">
        <label>Условия аренды</label>
        <textarea type="text" required  name='conditions_rental' class="form-control" id="conditions_rental" placeholder="Ведите условия аренды">{{ old('conditions_rental', isset($about)? $about->conditions_rental : null) }}</textarea> 
        @include('includes.error', ['field'=>'conditions_rental'])
    </div>
    <div class="form-group">
        <label>Видео @if(isset($about)) <small>(если хотите изменить его)</small> @endif</label>
        <input type="text"  name='video' required class="form-control" id="video" value="{{ old('video', isset($about)? $about->video : null) }}" placeholder="Добавьте iframe видео">   
        @include('includes.error', ['field'=>'video'])
        @if(isset($about))
        <div class="col-lg-6">
            <div class="about-video">{!!$about->video!!}</div>
        </div>
        @endif
    </div>
    <div class="form-group"> 
        <label for="file">Выбирете изображение @if(isset($about))<small>(если хотите изменить его)</small>@endif</label><br>
        <small>Рекомендуемые минимальные размеры 698px X 241px</small><br>
        <input type="file" id="file" name="image" @if(!isset($about)) required @endif><br><br>
        @include('includes.error', ['field'=>'image'])
        @if(isset($about))
        <picture>
            <source srcset="{{ Storage::url('about/'.$about->img_webp) }}" type="image/webp">
            <img src="{{ Storage::url('about/'.$about->img) }}" width="100" >
        </picture>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">{{isset($about)? "Изменить" : "Добавить"}}</button>
</form>
@endsection