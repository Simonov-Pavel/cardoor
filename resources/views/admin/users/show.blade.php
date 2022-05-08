@extends('layouts.account_panel')
@section('title', "Пользователь - $user->name")
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
        <li class="breadcrumb-item"><a href="{{route('user.index')}}">Пользователи</a></li>
        <li class="breadcrumb-item active">{{$user->name}}</li>
    </ol>
</div>
@endsection

@section('content') 
<div class="user-panel row">
  <div class="col-12 user-content" >
    <div class="row mb-2" style="justify-content: space-around;">
      <div class="col-2" style="display:flex; justify-content: center; min-width:160px">
        <picture>
          <sourse srcset="{{ Storage::url('user/' . $user->img_webp)}}" type="image/webp">
          <img src="{{ Storage::url('user/' . $user->img)}}" alt="User Image - {{$user->name}}" style="width: 100%">
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
      
    </div>
  </div>
</div>
<div class="row">
<div>
        @if($user->deleted_at)
          <a href="{{ route('admin.user.restore', $user->id) }}" title='Воскресить' class="btn btn-success">Воскресить</a>
          <form action="{{ route('admin.user.forceDelete', $user->id) }}" method="post" class='d-inline-block'>
            @csrf
            @method('DELETE')
            <button type="submit" class="p-0" style="background:transparent; border:none">
              <a href="" title='Удалить окончательно' class="btn btn-danger">Удалить окончательно</a>
            </button>
          </form>
          @else
            <a href="{{ route('user.edit', $user) }}" title='Редактировать' class="btn btn-primary">Редактировать</a>
            <form action="{{ route('user.destroy', $user) }}" method="post" class='d-inline-block'>
              @csrf
              @method('DELETE')
              <button type="submit" class="p-0" style="background:transparent; border:none">
                <a href="" class=" btn btn-warning" title="Усыпить">Усыпить</a> 
            </button>
            </form>
          @endif
      </div>
</div>
@endsection