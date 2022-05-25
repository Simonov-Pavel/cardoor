<?php

namespace App\Http\Controllers\Admin;

use App\Models\Car;
use App\Models\Description;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CarRequest;
use App\Services\Images;

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
        if($request->has('image')){
            Images::createImages($request, 'cars', 1280, 800);
        }
        $params = $request->all();
        $car = Car::create($params);
        $car->description()->create($request->only('text', 'text_preview'));
        if($request->options):
            $car->options()->attach($request->options);
        endif;
        return to_route('car.index');
    }

    public function show(Car $car)
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
