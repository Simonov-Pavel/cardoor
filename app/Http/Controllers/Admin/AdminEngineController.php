<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Engine;
use App\Http\Requests\Admin\EngineRequest;

class AdminEngineController extends Controller
{
    public function index()
    {
        return view('admin.engine.index');
    }

    public function create()
    {
        return view('admin.engine.form');
    }

    public function store(EngineRequest $request)
    {
        Engine::create($request->all());
        return to_route('engine.index')->with('success', "Новый тип двигателя - $request->title успешно добавлен");
    }

    public function edit(Engine $engine)
    {
        return view('admin.engine.form', compact('engine'));
    }

    public function update(EngineRequest $request, Engine $engine)
    {
        $engine->update($request->all());
        return to_route('engine.index')->with('success', "Тип двигателя - $engine->title успешно обновлен");
    }

    public function destroy(Engine $engine)
    {
        $engine->delete();
        return to_route('engine.index')->with('warning', "Тип двигателя - $engine->title успешно удален");
    }
}
