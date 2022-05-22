<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClassCar;
use App\Http\Requests\Admin\ClassCarRequest;

class AdminClassCarController extends Controller
{
    public function index()
    {
        return view('admin.class.index');
    }

    public function create()
    {
        return view('admin.class.form');
    }

    public function store(ClassCarRequest $request)
    {
        ClassCar::create($request->all());
        return to_route('class.index')->with('success', "Новый класс $request->title успешно добавлен");
    }

    public function edit(ClassCar $class)
    {
        return view('admin.class.form', compact('class'));
    }

    public function update(ClassCarRequest $request, ClassCar $class)
    {
        $class->update($request->all());
        return to_route('class.index')->with('succes', "Класс $class->title успешно обновлен");
    }

    public function destroy(ClassCar $class)
    {
        $class->delete();
        return to_route('class.index')->with('warning', "Класс $class->title успешно удален");
    }
}
