@extends('layouts.account_panel')
@section('title', 'Автопарк')
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
        <li class="breadcrumb-item active">Автопарк</li>
    </ol>
</div>
@endsection

@section('content') 
<a href="{{ route('car.create') }}" class="btn btn-primary ml-2 mb-3">Добавить</a>
@if(isset($cars))
<div class="card">
    <div class="card-body p-0">
        
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>Изображение</th>
                    <th>Модель</th>
                    <th style="width: 40px"></th>
                </tr>
            </thead>
            <tbody>
            @foreach($cars as $car)
                <tr>
                    
                    <td class="col-sm-2">{{ $car->model }}</td>
                    <td class="col-sm-2">
                        <picture>
                            <source srcset="{{ Storage::url('cars/'.$car->img_webp) }}" type="image/webp">
                            <img src="{{ Storage::url('cars/'.$car->img) }}" alt="{{$car->slug}}">
                        </picture>
                    </td>
                    
                    <td class="col-sm-1">
                        <a href="{{ route('car.edit', $car) }}" title='Редактировать'><i class="fa fa-pencil text-success ml-2" aria-hidden="true"></i></a>
                        <form action="{{ route('car.destroy', $car) }}" method="post" class='d-inline-block'>
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
<div style="width:fit-content;margin:0 auto">{{ $partners->withQueryString()->links() }}</div>
@else
    <h3>Вы пока не добавляли партнеров</h3>
@endif
@endsection