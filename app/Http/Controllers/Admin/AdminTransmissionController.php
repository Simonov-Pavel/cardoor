<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transmission;
use App\Http\Requests\Admin\TransmissionRequest;

class AdminTransmissionController extends Controller
{
    public function index()
    {
        return view('admin.transmission.index');
    }

    public function create()
    {
        return view('admin.transmission.form');
    }

    public function store(TransmissionRequest $request)
    {
        Transmission::create($request->all());
        return to_route('transmission.index')->with('success', "Новый тип коробки передач успешно добавлен");
    }

    public function edit(Transmission $transmission)
    {
        return view('admin.transmission.form', compact('transmission'));
    }

    public function update(TransmissionRequest $request, Transmission $transmission)
    {
        $transmission->update($request->all());
        return to_route('transmission.index')->with('success', "Тип коробки передач $transmission->title успешно обновлен");
    }

    public function destroy(Transmission $transmission)
    {
        $transmission->delete();
        return to_route('transmission.index')->with('warning', "Тип коробки передач $transmission->title успешно удален");
    }
}
