@extends('layouts.account_panel')
@section('title', 'Блог')
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
        <li class="breadcrumb-item active">Блог</li>
    </ol>
</div>
@endsection

@section('content') 
<a href="{{ route('post.create') }}" class="btn btn-primary ml-2 mb-3">Добавить</a>
@if($posts->total() != 0)
<div class="card">
    <div class="card-body p-0">
        
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>Изображение</th>
                    <th>Заголовок</th>
                    <th>Текст(превью)</th>
                    <th style="width: 40px"></th>
                </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                <td class="col-sm-2">
                        <picture>
                            <source srcset="{{ Storage::url('posts/'.$post->img_webp) }}" type="image/webp">
                            <img src="{{ Storage::url('posts/'.$post->img) }}" alt="{{$post->header}}" width="100">
                        </picture>
                    </td>
                    <td class="col-sm-2">{{ $post->header }}</td>
                    <td class="col-sm-2">{!! $post->text_preview !!}</td>
                    <td class="col-sm-1">
                        <a href="{{ route('post.show', $post) }}" title='Просмотреть'><i class="fa fa-eye ml-2" aria-hidden="true"></i></a>
                        <a href="{{ route('post.edit', $post) }}" title='Редактировать'><i class="fa fa-pencil text-success ml-2" aria-hidden="true"></i></a>
                        <form action="{{ route('post.destroy', $post) }}" method="post" class='d-inline-block'>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="p-0" style="background:transparent; border:none">
                                <a href="" title='Удалить'><i class="fa fa-times text-danger ml-2" aria-hidden="true"></i></a>
                            </button>
                        </form>
                    </td>
                    
                </tr>
            @endforeach
            </tbody>
        </table>
        
    </div>
    
</div>
<div style="width:fit-content;margin:0 auto">{{ $posts->links() }}</div>
@else
    <h3>Вы пока не добавляли статьи</h3>
@endif
@endsection