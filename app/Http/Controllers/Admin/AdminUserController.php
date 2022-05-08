<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Mail\PasswordMail;
use App\Http\Requests\Admin\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Events\NewPasswordMail;

class AdminUserController extends Controller
{
    public function index()
    {
        return view('admin.users.index');
    }

    
    public function create()
    {
        return view('admin.users.form');
    }

    public function store(UserRequest $request)
    {
        $params = $request->all();
        $password = Str::random(6);
        $params['password'] = Hash::make($password);
        User::firstOrCreate(['email'=>$params['email']], $params);
        event(new NewPasswordMail($params['email'], $password));
        return to_route('user.index')->with('success', 'Новый пользователь добавлен');
    }

    public function show($id)
    {
        $user = User::withTrashed()->find($id);
        return view('admin.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('admin.users.form', compact('user'));
    }

    public function update(UserRequest $request, User $user)
    {
        $params = $request->all();
        $user->update($params);
        return to_route('user.index')->with('success', 'Успешно обновлено');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()->with('warning', "Пользователь $user->name временно усыплен");
    }

    public function forceDelete($id)
    {
        $user = User::withTrashed()->find($id);
        $user->forceDelete();
        return redirect()->back()->with('warning', "Пользователь $user->name оканчательно удален");
    }

    public function restore($id)
    {
        $user = User::withTrashed()->find($id);
        $user->restore();
        return redirect()->back()->with('success', "Пользователь $user->name успешно воскрешен");
    }
}
