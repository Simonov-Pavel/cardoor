<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Services\Filters\CarFilter;

class CarController extends Controller
{
    public function index(CarFilter $request)
    {
        $cars = Car::filter($request)->with('body', 'class_car', 'engine', 'transmission', 'brand', 'description')->orderBy('created_at', 'desc')->paginate(4);
        return view('car', compact('cars'));
    }

    public function show(string $slug)
    { 
        $car = Car::where('slug', $slug)->first();
        return view('car-show', compact('car'));
    }
}
