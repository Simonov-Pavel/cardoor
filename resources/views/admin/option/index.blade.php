@extends('layouts.account_panel')
@section('title', 'Дополнительные опции автомобилей')
@section('panel', "Панель администратора")
@section('keywords', 'keywords')
@section('description', 'description')

@section('user_menu')
  @include('admin.includes.sidebar_menu')
@endsection

@section('content') 
<a href="{{ route('option.create') }}" title='Добавить опцию автомобиля' class='btn btn-success mb-3'>Добавить опцию автомобиля</a>
<div class="card">
    <div class="card-body p-0">
    
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>Опция автомобиля</th>
                    <th style="width: 40px">Деиствие</th>
                </tr>
            </thead>
            <tbody>
                @foreach($options as $option)
                <tr>
                    <td class="col-sm-2">{{$option->title}}</td>
                    <td class="col-sm-1">
                        <a href="{{ route('option.edit', $option) }}" title='Редактировать'><i class="fa fa-pencil text-success ml-2" aria-hidden="true"></i></a>
                        <form action="{{ route('option.destroy', $option) }}" method="post" class='d-inline-block'>
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

@endsection