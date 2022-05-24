<?php

namespace App\Http\Controllers\Admin;

use App\Models\Car;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CarRequest;

class AdminCarController extends Controller
{
    public function index()
    {
        return view('admin.car.index');
    }

    public function create()
    {
        return view('admin.car.form');
    }

    public function store(CarRequest $request)
    {
        //
    }

    public function edit(Car $car)
    {
        return view('admin.car.form', compact('car'));
    }

    public function update(CarRequest $request, Car $car)
    {
        //
    }

    public function destroy(Car $car)
    {
        //
    }
}
