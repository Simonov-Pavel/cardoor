<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Body;
use App\Http\Requests\Admin\BodyRequest;

class AdminBodyController extends Controller
{
    public function index()
    {
        return view('admin.body.index');
    }

    public function create()
    {
        return view('admin.body.form');
    }

    public function store(BodyRequest $request)
    {
        Body::create($request->all());
        return to_route('body.index')->with('success', 'Новый кузов автомобиля добавлен');
    }

    public function edit(Body $body)
    {
        return view('admin.body.form', compact('body'));
    }

    public function update(BodyRequest $request, Body $body)
    {
        $body->update($request->all());
        return to_route('body.index')->with('success', 'Кузов автомобиля успешно обнавлен');
    }

    public function destroy(Body $body)
    {
        $body->delete();
        return to_route('body.index')->with('warning', 'Кузов автомобиля успешно удален');
    }
}
