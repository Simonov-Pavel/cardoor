@extends('layouts.account_panel')
@section('title', 'Пользователи')
@section('panel', "Панель администратора")
@section('keywords', 'keywords')
@section('description', 'description')

@section('user_menu')
  @include('admin.includes.sidebar_menu')
@endsection

@section('content') 
<a href="{{ route('user.create') }}" title='Добавить' class='btn btn-success mb-3'>Добавить</a>
<div class="card">
    <div class="card-body p-0">
    
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>Имя</th>
                    <th>Телефон</th>
                    <th>email</th>
                    <th style="width: 40px">Деиствие</th>
                </tr>
            </thead>
            <tbody>
            
                @foreach($users as $user)
                <tr>
                    <td class="col-sm-2">{{$user->name}}</td>
                    <td class="col-sm-2">{{$user->phone}}</td>
                    <td class="col-sm-2">{{$user->email}}</td>
                    <td class="col-sm-1">
                        <a href="{{ route('user.show', $user->id) }}" title='Просмотреть'><i class="fa fa-eye ml-2" aria-hidden="true"></i></a>
                        @if($user->deleted_at)
                        <a href="{{ route('admin.user.restore', $user->id) }}" title='Воскресить'><i class="fa fa-ambulance text-primary ml-2" aria-hidden="true"></i></a>
                        
                        <form action="{{ route('admin.user.forceDelete', $user->id) }}" method="post" class='d-inline-block'>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="p-0" style="background:transparent; border:none">
                                <a href="" title='Удалить окончательно'><i class="fa fa-times text-danger ml-2" aria-hidden="true"></i></a>
                            </button>
                        </form>
                        @else
                        <a href="{{ route('user.edit', $user) }}" title='Редактировать'><i class="fa fa-pencil text-success ml-2" aria-hidden="true"></i></a>
                        <form action="{{ route('user.destroy', $user) }}" method="post" class='d-inline-block'>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="p-0" style="background:transparent; border:none">
                                <a href="" title='Удалить'><i class="fa fa-times text-danger ml-2" aria-hidden="true"></i></a>
                            </button>
                        </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
    
</div>
<div style="width:fit-content;margin:0 auto">{{ $users->withQueryString()->links() }}</div>
@endsection