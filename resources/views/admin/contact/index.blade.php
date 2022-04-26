@extends('layouts.account_panel')
@section('title', 'Контакты')
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
        <li class="breadcrumb-item active">Контакты</li>
    </ol>
</div>
@endsection

@section('content') 

<a href="{{ route('contact.edit', $contact) }}" class="btn btn-primary ml-2 mb-3">Редактировать</a>

<table class="table table-striped">
  <tbody>
    
    <tr>
      <td>Логотип</td>
      <td>
        <picture>
          <source srcset="{{ Storage::url('contact/'.$contact->logo_webp) }}" type="image/webp">
          <img src="{{ Storage::url('contact/'.$contact->logo) }}" width="100" alt="logo">
        </picture>
      </td>
    </tr>
    <tr>
      <td>Адрес</td>
      <td>
        @if(isset($contact->address))
        {{$contact->address}}
        @else
          <p>Не добавленно</p>
        @endif
      </td>
    </tr>
    <tr>
      <td>Телефон</td>
      <td>
      @if(isset($contact->phone))
        {{$contact->phone}}
        @else
          <p>Не добавленно</p>
        @endif
      </td>
    </tr>
    <tr>
      <td>Email</td>
      <td>
      @if(isset($contact->email))
        {{$contact->email}}
        @else
          <p>Не добавленно</p>
        @endif
      </td>
    </tr>
    <tr>
      <td>Режим работы</td>
      <td>
        {{$contact->start_week}} - {{$contact->end_week}} {{$contact->start_time}} -{{$contact->end_time}}
      </td>
    </tr>
    <tr>
      <td>Описание</td>
      <td>
      @if(isset($contact->description))
        {!!$contact->description!!}
      @else
          <p>Не добавленно</p>
      @endif
      </td>
    </tr>
  </tbody>
</table>
<div class="col-12 mt-2">
  @if(isset($contact->map))
    {{$contact->map}}
  @else
    <p>Карта не добавленна</p>
  @endif
</div>
</div>
@endsection