<?php

namespace App\Http\Controllers;

use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        return view('car');
    }

    public function show(string $slug)
    { 
        $car = Car::where('slug', $slug)->first();
        return view('car-show', compact('car'));
    }
}
