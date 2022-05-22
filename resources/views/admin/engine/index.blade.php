@extends('layouts.account_panel')
@section('title', 'Тип двигателей автомобиля')
@section('panel', "Панель администратора")
@section('keywords', 'keywords')
@section('description', 'description')

@section('user_menu')
  @include('admin.includes.sidebar_menu')
@endsection

@section('content') 
<a href="{{ route('engine.create') }}" title='Добавить тип двигателя автомобиля' class='btn btn-success mb-3'>Добавить тип двигателя автомобиля</a>
<div class="card">
    <div class="card-body p-0">
    
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>Тип двигателя автомобиля</th>
                    <th style="width: 40px">Деиствие</th>
                </tr>
            </thead>
            <tbody>
                @foreach($engines as $engine)
                <tr>
                    <td class="col-sm-2">{{$engine->title}}</td>
                    <td class="col-sm-1">
                        <a href="{{ route('engine.edit', $engine) }}" title='Редактировать'><i class="fa fa-pencil text-success ml-2" aria-hidden="true"></i></a>
                        <form action="{{ route('engine.destroy', $engine) }}" method="post" class='d-inline-block'>
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