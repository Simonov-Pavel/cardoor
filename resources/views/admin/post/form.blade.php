@extends('layouts.account_panel')
@section('title', isset($post)? "Редактирование статьи $post->header" : "Добавление статьи" )

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
        <li class="breadcrumb-item"><a href="{{route('post.index')}}">Блог</a></li>
        <li class="breadcrumb-item active">{{isset($post)? "Редактирование" : "Добавление"}}</li>
    </ol>
</div>
@endsection

@section('content') 
<form action="@if(isset($post)){{ route('post.update', $post) }}@else{{ route('post.store') }}@endif" method="post" enctype="multipart/form-data">
    @csrf
    @if(isset($post))
    @method('put')
    @endif
    <div class="form-group">
        <label>Заголовок</label>
        <input type="text" required  name='header' class="form-control" id="header" value="{{ old('header', isset($post)? $post->header : null) }}" placeholder="Ведите заголовок статьи">   
        @include('includes.error', ['field'=>'header'])
    </div>
    <div class="form-group">
        <label>Краткое описание</label>
        <textarea type="text" name='text_preview' class="form-control" id="text_preview" placeholder="Краткий смысл статьи" required='required'>{{ old('text_preview', isset($post->text_preview)? $post->text_preview : null) }}</textarea>
        @include('includes.error', ['field'=>'text_preview'])
    </div>
    <div class="form-group">
        <label>Описание</label>
        <textarea type="text" name='text' class="form-control" id="text" placeholder="Текст статьи" required='required'>{{ old('text', isset($post->text)? $post->text : null) }}</textarea>
        @include('includes.error', ['field'=>'text'])
    </div>
    
    <div class="form-group"> 
        <label for="file">Выбирете изображение @if(isset($post))<small>(если хотите изменить его)</small>@endif</label><br>
        <small>Рекомендуемые минимальные размеры 1000px X 667px</small><br>
        <input type="file" id="file" name="image" @if(!isset($post)) required @endif><br><br>
        @include('includes.error', ['field'=>'image'])
        @if(isset($post))
        <picture>
            <source srcset="{{ Storage::url('posts/'.$post->img_webp) }}" type="image/webp">
            <img src="{{ Storage::url('posts/'.$post->img) }}" width="100" >
        </picture>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">{{isset($post)? "Изменить" : "Добавить"}}</button>
</form>
@endsection