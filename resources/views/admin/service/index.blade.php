@extends('layouts.account_panel')
@section('title', 'Услуги')
@section('panel', "Панель администратора")
@section('keywords', 'keywords')
@section('description', 'description')

@section('user_menu')
  @include('admin.includes.sidebar_menu')
@endsection

@section('content') 
<a href="{{ route('service.create') }}" title='Добавить' class='btn btn-success mb-3'>Добавить</a>

@if($services->total() != 0)

<div class="card">
    <div class="card-body p-0">
    
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>Услуга</th>
                    <th>Изображение</th>
                    <th style="width: 40px">Деиствие</th>
                </tr>
            </thead>
            <tbody>
            
                @foreach($services as $service)
                <tr>
                    <td class="col-sm-2">{{$service->header}}</td>
                    <td class="col-sm-2">
                        <picture>
                            <source srcset="{{ Storage::url('service/'.$service->img_webp) }}" type="image/webp">
                            <img src="{{ Storage::url('service/'.$service->img) }}" alt="{{$service->header}}"  width="100">
                        </picture>
                    </td>
                    <td class="col-sm-1">
                        <a href="{{ route('service.edit', $service) }}" title='Редактировать'><i class="fa fa-pencil text-success ml-2" aria-hidden="true"></i></a>
                        <form action="{{ route('service.destroy', $service) }}" method="post" class='d-inline-block'>
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
<div style="width:fit-content;margin:0 auto">{{ $services->withQueryString()->links() }}</div>
@else
<h3>У вас пока нет добавленных услуг</h3>
@endif
@endsection